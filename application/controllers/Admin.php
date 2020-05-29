<?php

/**
 * Admin
 */
class Admin extends CI_controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Admin_model');
      $this->load->helper('security');
  }

  public function login(){
      $this->load->view('Admin/admin_login');
  }

  public function Dashbord(){
    $data = $this->Admin_model->user_table();
    $type = $this->Admin_model->select_type();
    // print_r($data);
    $this->load->view('Admin/dashbord_view',['data'=>$data,'type'=>$type]);
  }

  public function check_login(){
      $this->form_validation->set_rules('name','Admin ID ','trim|required|min_length[3]');
      $this->form_validation->set_rules('password','Password','trim|required');

      if ($this->form_validation->run()) {
          $name = $this->security->xss_clean($this->input->post('name'));
          // $password = md5($this->input->post('password'));
          $password = md5($this->security->xss_clean($this->input->post('password')));

          if ($this->Admin_model->check_admin($name,$password)) {

              $user_data = array('emailId'=>$username,'logged_in'=>true);

              $this->session->set_userdata($user_data);
              $this->session->set_flashdata('login_success','You are now logged in');

              return redirect('Admin/Dashbord');
          } else {
              $this->session->set_flashdata('login_faild','ID and Password not match');
              return redirect('admin');
          }
      } else {
        $data =  array('errors' => validation_errors());
        $this->session->set_flashdata($data);
        return redirect('admin');
      }

  }

  public function admin_approval($u_Id){
      $u_action = $this->input->post('type');

      if ($this->Admin_model->admin_approval_model($u_Id,$u_action)) {
          $this->session->set_flashdata('approval','User Approval success fully !');
          return redirect('Dashbord');
      } else {
          $this->session->set_flashdata('not_approval','User not Approval !');
          return redirect('Dashbord');
      }
  }

  public function admin_unapproval($u_Id){
      $u_action = '0';

      if ($this->Admin_model->admin_anapproval_model($u_Id,$u_password,$u_action,$u_customerId)) {
          $this->session->set_flashdata('approval','User An Approval success fully !');
          return redirect('Admin/Dashbord');
      } else {
          $this->session->set_flashdata('not_approval','User not An Approval !');
          return redirect('Admin/Dashbord');
      }
  }

}


?>
