<?php

/**
 * Dashbord Class
 */
class Dashbord extends CI_Controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Admin_model');
  }

  public function index(){
    $data = $this->Admin_model->user_table();
    $type = $this->Admin_model->select_type();
    $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
    $admin_head = 'Dashbord_head';
    $users_count = $this->Admin_model->users_count();
    $enquiry_count = $this->Admin_model->enquiry_count();
    $quatation_count = $this->Admin_model->quatation_count();
    $po_count = $this->Admin_model->po_count();
    $this->load->view('dashbord/dashbord_view',['data'=>$data,'type'=>$type,'user'=>$user,$admin_head,
    'users_count'=>$users_count,'enquiry_count'=>$enquiry_count,'quatation_count'=>$quatation_count,'po_count'=>$po_count]);
  }

  public function do_upload(){

    // $image1 = $_FILES["Photo_Of_The_Parts"]['name'];
    // $image2 = $_FILES["Drawing_Of_The_Parts"]['name'];
    // $config['image_metadata1']['file_name'] = $image1;
    // $config['image_metadata2']['file_name'] = $image2;
    // $data_one = null;
    // $data_two = null;
    //
    // $config['upload_path'] = './uploads/';
    // $config['allowed_types'] = 'gif|jpg|png';
    // $config['max_size'] = 2000;
    // $config['max_width'] = 1500;
    // $config['max_height'] = 1500;
    // $this->load->library('upload', $config);
    //
    // if ($this->upload->do_upload('Photo_Of_The_Parts')){
    //     $data_one = array('image_metadata1' => $this->upload->data());
    // } else {
    //     $data_one['image_metadata1']['full_path'] = null;
    //     $data_one['image_metadata1']['file_name'] = null;
    // }
    // if($this->upload->do_upload('Drawing_Of_The_Parts')){
    //     $data_two = array('image_metadata2' => $this->upload->data());
    // } else {
    //     $data_two['image_metadata2']['full_path'] = null;
    //     $data_two['image_metadata2']['file_name'] = null;
    // }

    $cpt = count($_FILES['Photo_Of_The_Parts']['name']);

    for($i=0; $i < $cpt; $i++) {
    unset($config);
    $config = array();
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';

    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;
    $config['remove_spaces'] = FALSE;
    $config['file_name'] = $_FILES['Photo_Of_The_Parts']['name'][$i];

    $_FILES['f']['name'] =  $_FILES['Photo_Of_The_Parts']['name'][$i];
    $_FILES['f']['type'] = $_FILES['Photo_Of_The_Parts']['type'][$i];
    $_FILES['f']['tmp_name'] = $_FILES['Photo_Of_The_Parts']['tmp_name'][$i];
    $_FILES['f']['error'] = $_FILES['Photo_Of_The_Parts']['error'][$i];
    $_FILES['f']['size'] = $_FILES['Photo_Of_The_Parts']['size'][$i];

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

  $cpt1 = count($_FILES['Drawing_Of_The_Parts']['name']);
  for ($j=0; $j < $cpt1; $j++) {
    unset($config);
    $config = array();
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';

    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;
    $config['remove_spaces'] = FALSE;
    $config['file_name'] = $_FILES['Drawing_Of_The_Parts']['name'][$j];

    $_FILES['ff']['name'] =  $_FILES['Drawing_Of_The_Parts']['name'][$j];
    $_FILES['ff']['type'] = $_FILES['Drawing_Of_The_Parts']['type'][$j];
    $_FILES['ff']['tmp_name'] = $_FILES['Drawing_Of_The_Parts']['tmp_name'][$j];
    $_FILES['ff']['error'] = $_FILES['Drawing_Of_The_Parts']['error'][$j];
    $_FILES['ff']['size'] = $_FILES['Drawing_Of_The_Parts']['size'][$j];

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (! $this->upload->do_upload('ff')) {
      $data2['upload_data']['file_name'] = null;
      $data2['upload_data']['full_path'] = null;
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
  // exit;
    $ran_cust = '0123456789abcdefghijklmnopqrstuvwxyz';
    $data = [
        'e_customerID'=>$this->input->post('customerId'),
        'e_emailID' => $this->session->userdata('emailId'),
        'e_appliction'=>$this->input->post('application'),
        'e_machine_model'=>$this->input->post('machine_model'),
        'e_machine_make'=>$this->input->post('machine_make'),
        'e_required_qty'=>$this->input->post('required_qty'),
        'e_required_description'=>$this->input->post('required_description'),
        'e_photo_of_the_parts_path'=>$img_path1,
        'e_photo_of_the_parts_name'=>$img_name1,
        'e_drawing_of_the_parts_path'=>$img_path2,
        'e_drawing_of_the_parts_name'=>$img_name2,
        'e_special_remarks'=>$this->input->post('special_remarks'),
        'e_enquiryId'=>time().substr(str_shuffle($ran_cust), 1, 3)
    ];
    if ($this->Admin_model->insert_enquiry($data)) {
        $this->session->set_flashdata('enquiry_success','Insert Enquiry success fully !');
        return redirect('Dashbord');
    } else {
      $this->session->set_flashdata('enquiry_faile','Not Insert Enquiry !');
      return redirect('Dashbord');
    }
  }

  public function enquiry_show(){
    $data = $this->Admin_model->user_table();
    $type = $this->Admin_model->select_type();
    $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
    $enquiry = $this->Admin_model->select_enquiry($user->u_customerId);
    $this->load->view('dashbord/enquiry_show_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry]);
  }

  public function view_enquiry($customerID,$enquiryID){
    $data = $this->Admin_model->user_table();
    $type = $this->Admin_model->select_type();
    $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
    $enquiry = $this->Admin_model->select_enquiry($user->u_customerId);
    $view_enquiry = $this->Admin_model->select_view_enquiry($customerID,$enquiryID);
    $this->load->view('dashbord/view_enquiry_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry,'view_enquiry'=>$view_enquiry]);
  }

  public function enquiry_show_admin(){
    $data = $this->Admin_model->user_table();
    $type = $this->Admin_model->select_type();
    $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
    $enquiry = $this->Admin_model->select_enquiry_admin();
    // for ($i=0; $i < count($enquiry); $i++) {
    //     $quatation = $this->Admin_model->select_quatation_list($enquiry[$i]->e_customerID,$enquiry[$i]->e_enquiryId);
    // }

    // echo '<pre>';
    // print_r($quatation);
    $this->load->view('dashbord/enquiry_show_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry]);
  }

  public function view_enquiry_admin($customerID,$enquiryID){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $enquiry = $this->Admin_model->select_enquiry($user->u_customerId);
      $view_enquiry = $this->Admin_model->select_view_enquiry($customerID,$enquiryID);
      $quatation = $this->Admin_model->select_quatation_list($view_enquiry->e_customerID,$view_enquiry->e_enquiryId);
      $follow_up = $this->Admin_model->select_follow_up($view_enquiry->e_enquiryId);
      $this->load->view('dashbord/view_enquiry_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry,'view_enquiry'=>$view_enquiry,'quatation'=>$quatation,'follow_up'=>$follow_up]);
  }

  public function enquiry_form_admin(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerID = $this->Admin_model->customerId_admin();
      $this->load->view('dashbord/form_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
  }

  public function do_upload_admin(){
      $custo = explode(' ',$this->input->post('customerId'));
      $cpt = count($_FILES['Photo_Of_The_Parts']['name']);

      for($i=0; $i < $cpt; $i++) {
      unset($config);
      $config = array();
      $config['upload_path']   = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png|pdf';

      $config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;
      $config['remove_spaces'] = FALSE;
      $config['file_name'] = $_FILES['Photo_Of_The_Parts']['name'][$i];

      $_FILES['f']['name'] =  $_FILES['Photo_Of_The_Parts']['name'][$i];
      $_FILES['f']['type'] = $_FILES['Photo_Of_The_Parts']['type'][$i];
      $_FILES['f']['tmp_name'] = $_FILES['Photo_Of_The_Parts']['tmp_name'][$i];
      $_FILES['f']['error'] = $_FILES['Photo_Of_The_Parts']['error'][$i];
      $_FILES['f']['size'] = $_FILES['Photo_Of_The_Parts']['size'][$i];

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

    $cpt1 = count($_FILES['Drawing_Of_The_Parts']['name']);
    for ($j=0; $j < $cpt1; $j++) {
      unset($config);
      $config = array();
      $config['upload_path']   = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png|pdf';

      $config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;
      $config['remove_spaces'] = FALSE;
      $config['file_name'] = $_FILES['Drawing_Of_The_Parts']['name'][$j];

      $_FILES['ff']['name'] =  $_FILES['Drawing_Of_The_Parts']['name'][$j];
      $_FILES['ff']['type'] = $_FILES['Drawing_Of_The_Parts']['type'][$j];
      $_FILES['ff']['tmp_name'] = $_FILES['Drawing_Of_The_Parts']['tmp_name'][$j];
      $_FILES['ff']['error'] = $_FILES['Drawing_Of_The_Parts']['error'][$j];
      $_FILES['ff']['size'] = $_FILES['Drawing_Of_The_Parts']['size'][$j];

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

      $ran_cust = '0123456789abcdefghijklmnopqrstuvwxyz';
      $data = [
          'e_customerID'=>$custo[0],
          'e_emailID' => $custo[1],
          'e_appliction'=>$this->input->post('application'),
          'e_machine_model'=>$this->input->post('machine_model'),
          'e_machine_make'=>$this->input->post('machine_make'),
          'e_required_qty'=>$this->input->post('required_qty'),
          'e_required_description'=>$this->input->post('required_description'),
          'e_photo_of_the_parts_path'=>$img_path1,
          'e_photo_of_the_parts_name'=>$img_name1,
          'e_drawing_of_the_parts_path'=>$img_path2,
          'e_drawing_of_the_parts_name'=>$img_name2,
          'e_special_remarks'=>$this->input->post('special_remarks'),
          'e_enquiryId'=>time().substr(str_shuffle($ran_cust), 1, 3)
      ];
      if ($this->Admin_model->insert_enquiry($data)) {
          $this->session->set_flashdata('enquiry_success','Insert Enquiry success fully !');
          return redirect('enquiry_form_admin');
      } else {
        $this->session->set_flashdata('enquiry_faile','Not Insert Enquiry !');
        return redirect('enquiry_form_admin');
      }

  }

  public function insert_quotation(){
      $data = [
        'q_enquiry_status'=>$this->input->post('enquiry_status'),
        'q_registration'=>$this->input->post('registration'),
        'q_under_process'=>$this->input->post('under_process'),
        'q_order_status'=>$this->input->post('order_status'),
        'q_customer_ID'=>$this->input->post('customer_ID'),
        'q_enquiry_ID'=>$this->input->post('enquiry_ID'),
        'q_market_segment'=>$this->input->post('market_segment'),
        'q_date'=>$this->input->post('date'),
        'q_quote_number'=>$this->input->post('quote_number'),
        'q_quoted_value'=>$this->input->post('quoted_value'),
        'q_scope_text'=>$this->input->post('scope_text'),
        'q_into_terms'=>$this->input->post('into_terms'),
        'q_load_time'=>$this->input->post('demo3_22'),
        'q_payment_terms'=>$this->input->post('payment_terms'),
        'q_general_terms_gic_provided'=>$this->input->post('general_terms_gic_provided'),
        'q_order_expected_by'=>$this->input->post('order_expected_by'),
        'q_date_entry_by'=>$this->input->post('date_entry_by'),
        'q_emailId'=>$this->input->post('emailId')

      ];
      $result = $this->Admin_model->insert_quotation_model($data);
      if ($result) {
          $this->session->set_flashdata('quotation_seccess','Quotation Upload Success Fully !');
          return redirect("view_enquiry_admin/".$this->input->post('customer_ID').'/'.$this->input->post('enquiry_ID'));
      } else {
          $this->session->set_flashdata('quotation_failed','Failed To upload !');
          return redirect("view_enquiry_admin/".$this->input->post('customer_ID').'/'.$this->input->post('enquiry_ID'));
      }
  }

  public function quotation_to_po($q_quote_number){
      $quatation = $this->Admin_model->select_quatation_single($q_quote_number);
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $po_number_result = $this->Admin_model->select_po($q_quote_number);
      $po_number_row = $this->Admin_model->select_po_row($q_quote_number);

      $this->load->view('dashbord/view_quotation_to_po_view',['data'=>$data,'type'=>$type,'user'=>$user,'quatation'=>$quatation,'po_number_result'=>$po_number_result,'po_number_row'=>$po_number_row]);
  }

  public function insert_po(){
      $data = [
          'po_customer_ID'=>$this->input->post('customer_ID'),
          'po_enquiry_ID'=>$this->input->post('enquiry_ID'),
          'po_quote_number'=>$this->input->post('quote_number'),
          'po_po_number'=>$this->input->post('po_number'),
          'po_date'=>$this->input->post('date'),
          'po_market_segment'=>$this->input->post('market_segment'),
          'po_delay_penalty'=>$this->input->post('delay_penalty'),
          'po_scope_text'=>$this->input->post('scope_text'),
          'po_lc_applicabl'=>$this->input->post('lc_applicabl'),
          'po_into_terms'=>$this->input->post('into_terms'),
          'po_load_time'=>$this->input->post('load_time'),
          'po_payment'=>$this->input->post('payment'),
          'po_expiry_date_of_lc'=>$this->input->post('expiry_date_of_lc'),
          'po_emailId'=>$this->input->post('emailId')
      ];

      if($this->Admin_model->insert_po_model($data)){
          $this->session->set_flashdata('po_seccess','PO upload success fully !');
          return redirect("quotation_to_po/".$this->input->post('quote_number'));
      } else {
          $this->session->set_flashdata('po_failed','PO NOT upload !');
          return redirect("quotation_to_po/".$this->input->post('quote_number'));
      }

  }

  public function user_list(){
      $data = $this->Admin_model->user_table();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $type = $this->Admin_model->select_type();
      $this->load->view('dashbord/user_list_view',['data'=>$data,'type'=>$type,'user'=>$user]);

  }

  public function follow_up(){
    // print_r($this->input->post());
    $data = [
        'f_quote_number' => $this->input->post('quote_number'),
        'f_status' => $this->input->post('status'),
        'f_comment' => $this->input->post('comment'),
        'f_select_date' => $this->input->post('select_date'),
        'f_enquiry_id' => $this->input->post('enquiry_ID')
    ];
    $customerId = $this->input->post('customerId');
    $enquiry_ID = $this->input->post('enquiry_ID');
    // print_r($data);exit;
      if ($this->Admin_model->insert_follow_up($data)) {
          $this->session->set_flashdata('follow_up_success','Follow Up created success fully !');
          return redirect('view_enquiry_admin/'.$customerId.'/'.$enquiry_ID);
      } else {
          $this->session->set_flashdata('follow_up_faild','Follow Up Not created !');
          return redirect('view_enquiry_admin/'.$customerId.'/'.$enquiry_ID);
      }
  }

  public function supplier_form_admin(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerID = $this->Admin_model->customerId_admin();
      $this->load->model('Home_model');
      $countries = $this->Home_model->select_countri();
      $this->load->view('dashbord/supplier_form_admin_view',['countries'=>$countries,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
  }

  public function supplier_form_admin_insert(){
      $cpt = count($_FILES['s_attachment_of_company_catalogue']['name']);

      for($i=0; $i < $cpt; $i++) {
      unset($config);
      $config = array();
      $config['upload_path']   = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png|pdf';

      $config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;
      $config['remove_spaces'] = FALSE;
      $config['file_name'] = $_FILES['s_attachment_of_company_catalogue']['name'][$i];

      $_FILES['f']['name'] =  $_FILES['s_attachment_of_company_catalogue']['name'][$i];
      $_FILES['f']['type'] = $_FILES['s_attachment_of_company_catalogue']['type'][$i];
      $_FILES['f']['tmp_name'] = $_FILES['s_attachment_of_company_catalogue']['tmp_name'][$i];
      $_FILES['f']['error'] = $_FILES['s_attachment_of_company_catalogue']['error'][$i];
      $_FILES['f']['size'] = $_FILES['s_attachment_of_company_catalogue']['size'][$i];

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
    $data = [
        's_supplier_id'=> $this->input->post('s_supplier_id'),
        's_company_name' => $this->input->post('s_company_name'),
        's_website'=> $this->input->post('s_website'),
        's_company_category'=> $this->input->post('s_company_category'),
        's_country'=> $this->input->post('s_country'),
        's_contact_person_name'=> $this->input->post('s_contact_person_name'),
        's_contact_information'=> $this->input->post('s_contact_information'),
        's_attachment_of_company_catalogue_path'=> $img_path1,
        's_attachment_of_company_catalogue_name'=> $img_name1,
        's_contact_email_id'=> $this->input->post('s_contact_email_id'),
        's_verification'=> $this->input->post('application'),
        's_country_code'=> $this->input->post('s_country_code'),
        's_contact_number_1'=> $this->input->post('s_contact_number_1'),
        's_infrastructure_details'=> $this->input->post('s_infrastructure_details'),
        's_machines_plant_capacity'=> $this->input->post('s_machines_plant_capacity'),
        's_support_infrastructure'=> $this->input->post('s_support_infrastructure'),
        's_qms_applicable'=> $this->input->post('s_qms_applicable'),
    ];
    if ($this->Admin_model->supplier_form_admin_insert_model($data)) {
        $this->session->set_flashdata('enquiry_success','Insert Enquiry success fully !');
        return redirect('supplier_form_admin');
    } else {
      $this->session->set_flashdata('enquiry_faile','Not Insert Enquiry !');
      return redirect('supplier_form_admin');
    }
  }

  public function supplier_show_admin(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerID = $this->Admin_model->customerId_admin();
      $supplier = $this->Admin_model->select_supplier_model();
      $this->load->view('dashbord/supplier_show_admin_view',['supplier'=>$supplier,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
  }

  public function supplier_view($supplier_id){
      // echo base64_decode($supplier_id);
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerID = $this->Admin_model->customerId_admin();
      $supplier = $this->Admin_model->select_supplier_ob_model(base64_decode($supplier_id));
      $this->load->view('dashbord/supplier/supplier_show_ob_admin_view',['supplier'=>$supplier,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
  }

  public function supplier_edite($supplier_id){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerID = $this->Admin_model->customerId_admin();
      $supplier = $this->Admin_model->select_supplier_ob_model(base64_decode($supplier_id));
      $this->load->model('Home_model');
      $countries = $this->Home_model->select_countri();
      $this->load->view('dashbord/supplier/supplier_edite_ob_admin_view',['countries'=>$countries,'supplier'=>$supplier,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);

  }

  public function supplier_form_admin_update($supplier_id){
    // echo $supplier_id;exit;
    $data = [
        's_supplier_id'=> $this->input->post('s_supplier_id'),
        's_company_name' => $this->input->post('s_company_name'),
        's_website'=> $this->input->post('s_website'),
        's_company_category'=> $this->input->post('s_company_category'),
        's_country'=> $this->input->post('s_country'),
        's_contact_person_name'=> $this->input->post('s_contact_person_name'),
        's_contact_information'=> $this->input->post('s_contact_information'),
        's_contact_email_id'=> $this->input->post('s_contact_email_id'),
        's_verification'=> $this->input->post('s_verification'),
        's_country_code'=> $this->input->post('s_country_code'),
        's_contact_number_1'=> $this->input->post('s_contact_number_1'),
        's_infrastructure_details'=> $this->input->post('s_infrastructure_details'),
        's_machines_plant_capacity'=> $this->input->post('s_machines_plant_capacity'),
        's_support_infrastructure'=> $this->input->post('s_support_infrastructure'),
        's_qms_applicable'=> $this->input->post('s_qms_applicable'),
    ];
    if ($this->Admin_model->supplier_form_admin_update_model($data)) {
        $this->session->set_flashdata('supplier_success','Update Supplier success fully !');
        return redirect('supplier_edite/'.base64_encode($this->input->post('s_supplier_id')));
    } else {
      $this->session->set_flashdata('supplier_faile','Not Update Supplier !');
      return redirect('supplier_edite/'.base64_encode($this->input->post('s_supplier_id')));
    }
  }


}

?>
