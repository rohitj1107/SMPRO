<?php

/**
 * Enquiry
 */
class Enquiry extends CI_Controller{

  function __construct(){
      parent::__construct();
  }

  public function view_enquiry_single_admin($customerID,$enquiryID){
      $this->load->model('Admin_model');
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $enquiry = $this->Admin_model->select_enquiry($user->u_customerId);
      $view_enquiry = $this->Admin_model->select_view_enquiry($customerID,$enquiryID);
      $quatation = $this->Admin_model->select_quatation_list($view_enquiry->e_customerID,$view_enquiry->e_enquiryId);
      //$follow_up = $this->Admin_model->select_follow_up($view_enquiry->e_enquiryId);
      $select_e_follow_up = $this->Admin_model->select_e_follow_up($view_enquiry->e_enquiryId);
      $this->load->view('dashbord/enquiry/view_enquiry_single_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,
      'enquiry'=>$enquiry,'view_enquiry'=>$view_enquiry,'quatation'=>$quatation,
      'select_e_follow_up'=>$select_e_follow_up]);
  }

  public function enquiry_form_admin(){
      $this->load->model('Admin_model');
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerID = $this->Admin_model->customerId_admin();
      $this->load->view('dashbord/enquiry/form_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
  }

  public function do_upload_admin(){
      $this->load->model('Admin_model');
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
          'e_enquiryId'=> 'EN-'.time()
      ];
      if ($this->Admin_model->insert_enquiry($data)) {
          $this->session->set_flashdata('enquiry_success','Insert Enquiry success fully !');
          return redirect('enquiry_form_admin');
      } else {
        $this->session->set_flashdata('enquiry_faile','Not Insert Enquiry !');
        return redirect('enquiry_form_admin');
      }

  }

  public function enquiry_show_admin(){
      $this->load->model('Admin_model');
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $companyname = $this->Admin_model->select_company_name();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $enquiry = $this->Admin_model->select_enquiry_admin();
      for ($i=0; $i < count($enquiry); $i++) {
          // $quatation = $this->Admin_model->select_quatation_list($enquiry[$i]->e_customerID,$enquiry[$i]->e_enquiryId);
          // echo '<pre>';

          //  print_r($enquiry[$i]->e_customerID);
          $qu_count[] = $this->Admin_model->count_qu($enquiry[$i]->e_customerID,$enquiry[$i]->e_enquiryId);
          // print_r($qu_count);
      }

      // exit;
      // print_r($qu_count);
      $this->load->view('dashbord/enquiry/enquiry_show_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,
      'companyname'=>$companyname,'enquiry'=>$enquiry,'qu_count'=>$qu_count]);
  }

  public function enquiry_edite($customerID,$enquiryID){
      $this->load->model('Admin_model');
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $customerId = $this->Admin_model->customerId_admin();
      $editenquiry = $this->Admin_model->select_edite($customerID,$enquiryID);

      $this->load->view('dashbord/enquiry/enquiry_edite_view',['data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerId,'editenquiry'=>$editenquiry]);
  }

  public function do_upload_edite($customerID,$enquiryID){
    $this->load->model('Admin_model');
    $data = [
        'e_appliction'=>$this->input->post('application'),
        'e_machine_model'=>$this->input->post('machine_model'),
        'e_machine_make'=>$this->input->post('machine_make'),
        'e_required_qty'=>$this->input->post('required_qty'),
        'e_required_description'=>$this->input->post('required_description'),
        'e_special_remarks'=>$this->input->post('special_remarks'),

    ];
    if ($this->Admin_model->edite_enquiry($data,$customerID,$enquiryID)) {
        $this->session->set_flashdata('enquiry_success','Update Enquiry success fully !');
        return redirect('enquiry_edite/'.$customerID.'/'.$enquiryID);
    } else {
      $this->session->set_flashdata('enquiry_faile','Not Update Enquiry !');
      return redirect('enquiry_edite/'.$customerID.'/'.$enquiryID);
    }
  }

  public function view_enquiry_admin($customerID,$enquiryID){
      $this->load->model('Admin_model');
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $enquiry = $this->Admin_model->select_enquiry($user->u_customerId);
      $view_enquiry = $this->Admin_model->select_view_enquiry($customerID,$enquiryID);
      $quatation = $this->Admin_model->select_quatation_list($view_enquiry->e_customerID,$view_enquiry->e_enquiryId);
      $follow_up = $this->Admin_model->select_follow_up($view_enquiry->e_enquiryId);
      $this->load->view('dashbord/enquiry/view_enquiry_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry,'view_enquiry'=>$view_enquiry,'quatation'=>$quatation,'follow_up'=>$follow_up]);
  }

  public function enquiry_follow_up(){
    // print_r($this->input->post());
    $this->load->model('Admin_model');
    
    $data = [
        'e_enquiryId' => $this->input->post('enquiryId'),
        'e_status' => $this->input->post('status'),
        'e_comment' => $this->input->post('comment'),
        'e_select_date' => $this->input->post('select_date')
    ];
    $enquiryID = $this->input->post('enquiryId');
    $customerID = $this->input->post('customerId');

    // print_r($data);exit;
      if ($this->Admin_model->insert_e_follow_up($data)) {
          $this->session->set_flashdata('follow_up_success','Follow Up created success fully !');
          return redirect('view_enquiry_single_admin/'.$customerID.'/'.$enquiryID);
      } else {
          $this->session->set_flashdata('follow_up_faild','Follow Up Not created !');
          return redirect('view_enquiry_single_admin/'.$customerID.'/'.$enquiryID);
      }
  }
}



 ?>
