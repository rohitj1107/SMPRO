<?php

/**
 * Dashbord Class
 */
class Dashbord extends CI_Controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Admin_model');
      $this->load->model('Home_model');

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
      $countries = $this->Home_model->select_countri();

      $this->load->view('dashbord/dashbord_view',['countries'=>$countries,'data'=>$data,'type'=>$type,'user'=>$user,$admin_head,
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
        // 'e_machine_model'=>$this->input->post('machine_model'),
        // 'e_machine_make'=>$this->input->post('machine_make'),
        // 'e_required_qty'=>$this->input->post('required_qty'),
        'e_your_industry'=>$this->input->post('your_industry'),
        'e_requirement_category'=>$this->input->post('requirement_category'),
        'e_required_description'=>$this->input->post('required_description'),
        'e_photo_of_the_parts_path'=>$img_path1,
        'e_photo_of_the_parts_name'=>$img_name1,
        'e_drawing_of_the_parts_path'=>$img_path2,
        'e_drawing_of_the_parts_name'=>$img_name2,
        'e_special_remarks'=>$this->input->post('special_remarks'),
        'e_enquiryId'=> 'EN-'.time(),
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
          return redirect('view_quotation_single/'.base64_encode($data['f_quote_number']));
      } else {
          $this->session->set_flashdata('follow_up_faild','Follow Up Not created !');
          return redirect('view_quotation_single/'.base64_encode($data['f_quote_number']));
      }
  }

  public function register_create(){
      $this->form_validation->set_rules('companyName','Company Name','trim|required|min_length[3]');
      $this->form_validation->set_rules('termsConditions','Terms Conditions','required');
      $this->form_validation->set_rules('websiteUrl','web Site Url','valid_url');
      $this->form_validation->set_rules('password','Password','trim|required|md5');

      if($this->form_validation->run()){

          $data = [
              'u_companyName' => $this->security->xss_clean($this->input->post('companyName')),
              'u_websiteUrl' => $this->security->xss_clean($this->input->post('websiteUrl')),
              'u_country' => $this->security->xss_clean($this->input->post('country')),
              'u_postalCode' => $this->security->xss_clean($this->input->post('postalCode')),
              'u_companyType' => $this->security->xss_clean($this->input->post('companyType')),
              'u_eou' => $this->security->xss_clean($this->input->post('eou')),
              'u_emailId' => $this->security->xss_clean($this->input->post('emailId')),
              'u_contactNumber' => $this->security->xss_clean($this->input->post('contactNumber')),
              'u_contactNumber_one' => $this->security->xss_clean($this->input->post('contactNumber_one')),
              'u_mobileNumber' => $this->security->xss_clean($this->input->post('mobileNumber')),
              'u_gst' => $this->security->xss_clean($this->input->post('gst')),
              'u_industry' => $this->security->xss_clean($this->input->post('industry')),
              'u_comment' => $this->security->xss_clean($this->input->post('comment')),
              'u_customerId' => 'CU-'.time(),
              'u_password' => $this->security->xss_clean($this->input->post('password')),
              'u_action' => '1',
              'u_otp' => rand('1000','5000')
          ];

          if ($this->Home_model->Update_create_user_data($data,$data['u_emailId'])) {

              echo $data['u_action'];
              $user_data = array('emailId'=>$data['u_emailId'],'actionId'=>$data['u_action'],'logged_in'=>true);
              $this->session->set_userdata($user_data);
              $this->session->sess_destroy();
              return redirect("Dashbord");

          } else {
              $data =  array('errors' => validation_errors());

              $this->session->set_flashdata($data);
              return redirect('Dashbord');
          }
      } else {
          $data =  array('errors' => validation_errors());
          $this->session->set_flashdata($data);

          return redirect('Dashbord');
      }
  }

  public function user_history(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $result = $this->Home_model->select_user_agent();
      $this->load->view('dashbord/user_agent',['data'=>$data,'type'=>$type,'user'=>$user,'result'=>$result]);
  }

  public function my_account(){
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $this->load->view('dashbord/my_account_view',['user'=>$user]);
  }

  public function edit_profile_user(){
      $countries = $this->Home_model->select_countri();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $this->load->view('dashbord/my_account_edit_view',['user'=>$user,'countries'=>$countries]);
  }

  public function my_account_update(){
      $data = [
        'u_companyName' => $this->input->post('Company_Name'),
        'u_industry' => $this->input->post('industry'),
        'u_companyType' => $this->input->post('companyType'),
        'u_company_category' => $this->input->post('company_category'),
        'u_websiteUrl' => $this->input->post('websiteUrl'),
        'u_country' => $this->input->post('country'),
        'u_location' => $this->input->post('location'),
        'u_postalCode' => $this->input->post('postalCode'),
        'u_contact_person_name' => $this->input->post('contact_person_name'),
        'u_designation' => $this->input->post('designation'),
        'u_company_identity' => $this->input->post('company_identity'),
        'u_gst' => $this->input->post('gst'),
        'u_contactNumber' => $this->input->post('contactNumber'),
        'u_mobileNumber' => $this->input->post('mobileNumber'),
        'u_remark' => $this->input->post('remark'),
      ];
      $result = $this->Home_model->my_account_update($data,$this->session->userdata('emailId'));
      if ($result) {
          $this->session->set_flashdata('account_success','Update Account success fully !');
          return redirect('edit_profile_user');
      } else {
          $this->session->set_flashdata('account_faile','Not Update Account !');
          return redirect('edit_profile_user');
      }
  }

}

?>
