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
      $follow_up = $this->Admin_model->select_follow_up($view_enquiry->e_enquiryId);
      $this->load->view('dashbord/enquiry/view_enquiry_single_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry,'view_enquiry'=>$view_enquiry,'quatation'=>$quatation,'follow_up'=>$follow_up]);
  }
}



 ?>
