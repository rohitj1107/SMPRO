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
      $po = $this->Admin_model->select_po_list();
      $companyname = $this->Admin_model->select_company_name();
      $this->load->view('dashbord/po/po_show_view',['data'=>$data,'type'=>$type,'user'=>$user,'po'=>$po,'companyname'=>$companyname]);
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
        $view_enquiry = $this->Admin_model->select_view_enquiry($po_select->po_customer_ID,$po_select->po_enquiry_ID);
        $follow_up = $this->Admin_model->select_follow_up_po($id_po);
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

    public function follow_up_po(){
        $data = [
            'fp_po_number' => $this->input->post('po_number'),
            'fp_quote_number' => $this->input->post('quote_number'),
            'fp_status' => $this->input->post('status'),
            'fp_comment' => $this->input->post('comment'),
            'fp_select_date' => $this->input->post('select_date'),
            'fp_enquiry_id' => $this->input->post('enquiry_ID')
        ];
        if ($this->Admin_model->create_follow_up_po($data)) {
            $this->session->set_flashdata('follow_up_create','Create Follow Up Success fully !');
            return redirect("view_po_single/".base64_encode($this->input->post('po_number')));
        } else {
            $this->session->set_flashdata('folluw_up_not','Not Create Follow Up');
            return redirect("view_po_single/".base64_encode($this->input->post('po_number')));
        }
    }

    public function update_po(){
        $data = [
          'po_market_segment' => $this->input->post('po_market_segment'),
          'po_delay_penalty' => $this->input->post('po_delay_penalty'),
          'po_scope_text' => $this->input->post('po_scope_text'),
          'po_load_time' => $this->input->post('po_load_time')
        ];

        if ($this->Admin_model->update_po($data,$this->input->post('po_po_number'))) {
            $this->session->set_flashdata('po_seccess','OP Success fully Updated !');
            return redirect("po_edite/".base64_encode($this->input->post('po_po_number')));
        } else {
            $this->session->set_flashdata('po_failed','OP Not Updated !');
            return redirect("po_edite/".base64_encode($this->input->post('po_po_number')));
        }
    }

}


?>
