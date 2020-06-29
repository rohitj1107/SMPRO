<?php

/**
 * Po
 */
class Po extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function po_show(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $so = $this->Admin_model->select_po_so_list();
      $companyname = $this->Admin_model->select_company_name();
      $this->load->view('dashbord/po/po_show_view',['data'=>$data,'type'=>$type,'user'=>$user,'so'=>$so,'companyname'=>$companyname]);
        // $this->load->view('dashbord/po/po_show_view');
    }

    public function po_form(){
        $this->load->view('dashbord/po/po_form_view');
    }

    public function view_po_single($po_id){
        $id_po = base64_decode($po_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $po_select = $this->Admin_model->select_po_single($id_po);
        $view_enquiry = $this->Admin_model->select_view_enquiry($po_select->s_customer_ID,$po_select->s_enquiry_ID);
        $follow_up = $this->Admin_model->select_follow_up_so($id_po);
        $this->load->view('dashbord/po/view_po_single',['data'=>$data,'type'=>$type,'user'=>$user,
        'po_select'=>$po_select,'view_enquiry'=>$view_enquiry,'follow_up'=>$follow_up]);

    }

    public function po_edite($po_id){
        $id_po = base64_decode($po_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $po_select = $this->Admin_model->select_po_single($id_po);
        $this->load->view('dashbord/po/po_edite',['data'=>$data,'type'=>$type,'user'=>$user,'po_select'=>$po_select]);
    }

    public function delete_po(){
        $this->load->view('dashbord/po/delete_po');
    }

    public function follow_up_so(){
        $data = [
            'fp_po_number' => $this->input->post('po_number'),
            'fp_quote_number' => $this->input->post('quote_number'),
            'fp_status' => $this->input->post('status'),
            'fp_comment' => $this->input->post('comment'),
            'fp_select_date' => $this->input->post('select_date'),
            'fp_enquiry_id' => $this->input->post('enquiry_ID')
        ];
        if ($this->Admin_model->create_follow_up_so($data)) {
            $this->session->set_flashdata('follow_up_create','Create Follow Up Success fully !');
            return redirect("view_po_single/".base64_encode($this->input->post('po_number')));
        } else {
            $this->session->set_flashdata('folluw_up_not','Not Create Follow Up');
            return redirect("view_po_single/".base64_encode($this->input->post('po_number')));
        }
    }

    public function update_po(){
        $s=null;
        for($i=0; $i < count($this->input->post('sn'));$i++){
            if (empty($this->input->post('sn')[$i])) {
                $q[] = 0;
            } else {
                $s[] = $this->input->post('sn')[$i];
            }
        }
        $sn = implode(' | ',$s);

        $d = null;
        for($i=0; $i < count($this->input->post('description'));$i++){
            if (empty($this->input->post('description')[$i])) {
                $q[] = 0;
            } else {
                $d[] = $this->input->post('description')[$i];
            }
        }
        $description = implode(' | ',$d);

        $q = null;
        for($i=0; $i < count($this->input->post('qty'));$i++){
            if (empty($this->input->post('qty')[$i])) {
                $a[] = 0;
            } else {
                $q[] = $this->input->post('qty')[$i];
            }
        }
        $qty = implode(' | ',$q);

        $data = [
          's_market_segment' => $this->input->post('s_market_segment'),
          's_delay_penalty' => $this->input->post('s_delay_penalty'),
          's_scope_text' => $this->input->post('s_scope_text'),
          's_load_time' => $this->input->post('s_load_time'),
          's_sn'=>$sn,
          's_description'=>$description,
          's_qty'=>$qty,
        ];

        if ($this->Admin_model->update_po($data,$this->input->post('po_po_number'))) {
            $this->session->set_flashdata('po_seccess','OP Success fully Updated !');
            return redirect("po_edite/".base64_encode($this->input->post('po_po_number')));
        } else {
            $this->session->set_flashdata('po_failed','OP Not Updated !');
            return redirect("po_edite/".base64_encode($this->input->post('po_po_number')));
        }
    }

    public function so_to_po_supplier($po_id){
        $id_po = base64_decode($po_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $po_select = $this->Admin_model->select_so_single($id_po);
        $supplierID = $this->Admin_model->supplierID_admin();
        $min_item = $this->Admin_model->min_item($id_po);
        $update_select_item = $this->Admin_model->update_select_item($id_po);
        $this->load->view('dashbord/po/po_to_supplier_view',['data'=>$data,'type'=>$type,'user'=>$user,'po_select'=>$po_select,
        'supplierID'=>$supplierID,'min_item'=>$min_item,'update_select_item'=>$update_select_item]);
    }

    public function po_create($po_id){
        $a = null;
        $b = null;
        $c = null;
        $d = null;
        $item = null;
        $match_qty = null;
        $match_sn = null;
        $match_desc = null;
        $name = null;
        $desc = null;
        $qty = null;
        $o_qty = null;
        $o = null;
        $match_o_qty = null;
        $o_arry = null;
        $o_m_qty = null;
        if ($this->input->post('chk')) {
          $a = $this->input->post('chk[]');
          $b = $this->input->post('qty[]');
          $ic = $this->input->post('ic[]');
          $ts = $this->input->post('ts[]');
          $dd = $this->input->post('dd[]');
          $c = $this->input->post('sn[]');
          $d = $this->input->post('description[]');
          $o = $this->input->post('o_qty[]');

          //echo '<br>';
            // print_r($o);
            $match_qty = array_intersect_key($b,array_flip($a));
            $match_sn = array_intersect_key($c,$match_qty);
            $match_desc = array_intersect_key($d,$match_qty);
            $match_ic = array_intersect_key($ic,$match_qty);
            $match_ts = array_intersect_key($ts,$match_qty);
            $match_dd = array_intersect_key($dd,$match_qty);

            // $match_o_qty = array_intersect_key($o,$match_qty);
            // print_r($match_ic);
            // exit;

            for ($i=0; $i < count($c); $i++) {
                if (isset($match_sn[$i])) {
                    $name = $match_sn[$i].' | ';
                    $desc = $match_desc[$i].' | ';
                    $sqty = $match_qty[$i].' | ';
                    $mic = $match_ic[$i].' | ';
                    $mts = $match_ts[$i].' | ';
                    $mdd = $match_dd[$i].' | ';

                    $qty = $match_qty[$i];
                    $o_qty = $match_qty[$i];
                } else {
                    $name = null;
                    $desc = null;
                    $qty = null;
                    $o_qty = null;
                    $mic = null;
                    $mts = null;
                    $mdd = null;
                }

                if (isset($name)) {
                    $namee[] = $name;
                    $descc[] = $desc;
                    $qtyy[] = $sqty;
                    $arry[] = $name.$desc.$qty;
                    $o_arry[] = $qty;
                    $micc[] = $mic;
                    $mtss[] = $mts;
                    $mddd[] = $mdd;
                }
            }
            $item = implode(' ||| ',$arry);
            $item_n = implode('',$namee);
            $item_d = implode('',$descc);
            $item_q = implode('',$qtyy);
            $item_icc = implode('',$micc);
            $item_tss = implode('',$mtss);
            $item_ddd = implode('',$mddd);
            // print_r($item);
            $o_m_qty = ($o-array_sum($o_arry));


            $update_select_item = $this->Admin_model->update_select_item($this->input->post('so_number'));
            $update_select_item_a = explode(' | ',$update_select_item->up_item_code);
            $update_select_item_q = explode(' | ',$update_select_item->up_qty);

            $zzz = array_intersect($update_select_item_a,$match_ic);
            $result = array_diff($update_select_item_a,$match_ic);
            $item_update = array_merge_recursive($zzz,$result);

            for ($i=0; $i < count($update_select_item_q); $i++) {
                if (isset($match_qty[$i])) {
                    $qty_update[] = $update_select_item_q[$i] - $match_qty[$i];
                } else {
                    $qty_update[] = $update_select_item_q[$i];
                }
            }

            $update_qty = implode(' | ',$qty_update);
            $update_item = implode(' | ',$item_update);

            // print_r();

            // exit;

        $id_po = base64_decode($po_id);
        $this->load->model('Admin_model');
        $supp = $this->input->post('supplierID');

        $cpt = count($_FILES['po_anachment']['name']);

        for($i=0; $i < $cpt; $i++) {
        unset($config);
        $config = array();
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';

        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $config['remove_spaces'] = FALSE;
        $config['file_name'] = $_FILES['po_anachment']['name'][$i];

        $_FILES['f']['name'] =  $_FILES['po_anachment']['name'][$i];
        $_FILES['f']['type'] = $_FILES['po_anachment']['type'][$i];
        $_FILES['f']['tmp_name'] = $_FILES['po_anachment']['tmp_name'][$i];
        $_FILES['f']['error'] = $_FILES['po_anachment']['error'][$i];
        $_FILES['f']['size'] = $_FILES['po_anachment']['size'][$i];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (! $this->upload->do_upload('f')) {
          $data1['upload_data']['file_name'] = null;
          $data1['upload_data']['full_path'] = null;

        } else {
          $data1 = array('upload_data' => $this->upload->data());
        }
          $name1[] = $data1['upload_data']['file_name'];
          $path1[] = $data1['upload_data']['full_path'];
      }

      $img_name1 = implode(' | ',$name1);
      $img_path1 = implode(' | ',$path1);

      $cpt1 = count($_FILES['quote_anachment']['name']);
      for ($j=0; $j < $cpt1; $j++) {
        unset($config);
        $config = array();
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';

        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $config['remove_spaces'] = FALSE;
        $config['file_name'] = $_FILES['quote_anachment']['name'][$j];

        $_FILES['ff']['name'] =  $_FILES['quote_anachment']['name'][$j];
        $_FILES['ff']['type'] = $_FILES['quote_anachment']['type'][$j];
        $_FILES['ff']['tmp_name'] = $_FILES['quote_anachment']['tmp_name'][$j];
        $_FILES['ff']['error'] = $_FILES['quote_anachment']['error'][$j];
        $_FILES['ff']['size'] = $_FILES['quote_anachment']['size'][$j];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (! $this->upload->do_upload('ff')) {
          $data2['upload_data']['file_name'] = null;
          $data2['upload_data']['full_path'] = null;
          // $error = array('error' => $this->upload->display_errors());
        } else {
          $data2 = array('upload_data' => $this->upload->data());
        }
        $name2[] = $data2['upload_data']['file_name'];
        $path2[] = $data2['upload_data']['full_path'];
      }

      $img_name2 = implode(' | ',$name2);
      $img_path2 = implode(' | ',$path2);
      // echo $img_name1.'<br>';
      // echo $img_name2.'<br>';
      // print_r($error);
      // exit;
        // echo $supp;
        echo '<br>';
        $s_po_number = null;
        $so_num = $this->Admin_model->check_supplier($supp,$this->input->post('so_number'));
        if ($so_num->s_po_number){
            $s_po_number = substr_replace($so_num->s_po_number,++$so_num->number,20);
        } else {
            $s_po_number = 'POS-SO-'.time().'-S.1';
        }
        // print_r($s_po_number);
        // exit;
        $data = [
            's_quote_number'=> $this->input->post('quote_number'),
            's_enquiry_ID' => $this->input->post('enquiry_ID'),
            's_customer_ID'=> $this->input->post('customer_ID'),
            's_po_number'=>$s_po_number,
            's_so_number'=>$this->input->post('so_number'),
            's_supplier_ID' =>$supp,
            's_class'=>$this->input->post('Class'),
            's_category'=>$this->input->post('s_category'),
            's_po_anachment_path'=>$img_path1,
            's_po_anachment_name'=>$img_name1,
            's_quote_anachment_path'=>$img_path2,
            's_quote_anachment_name'=>$img_name2,
            's_market'=>$this->input->post('market'),
            's_item' =>$item,
            's_name' =>$item_n,
            's_desc' =>$item_d,
            's_item_code' =>$item_icc,
            's_tech_specs' =>$item_tss,
            's_delivery_date' =>$item_ddd,
            's_qty' =>$item_q,
            's_o_m_qty' => $o_m_qty,
            's_value'=>$this->input->post('value'),
            's_into_term'=>$this->input->post('into_term'),
            's_delivery_me'=>$this->input->post('delivery_me'),
            's_payment_terms'=>$this->input->post('payment_terms'),
        ];

        $dataUpdate = [
            'up_item_code' => $update_item,
            'up_qty' => $update_qty,
        ];
        if ($this->Admin_model->insert_po($data)) {
            $this->Admin_model->update_item_all($dataUpdate,$this->input->post('so_number'));
            $this->session->set_flashdata('po_success','Insert SO success fully !');
            return redirect('so_to_po_supplier/'.base64_encode($id_po));
        } else {
          $this->session->set_flashdata('po_faile','Not Insert SO !');
          return redirect('so_to_po_supplier/'.base64_encode($id_po));
        }
      } else {
          $id_po = base64_decode($po_id);

          $this->session->set_flashdata('po_faile','Atlist select One Item !');
          return redirect('so_to_po_supplier/'.base64_encode($id_po));
          // print_r('Atlist select One Item');
      }
    }

}


?>
