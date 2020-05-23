<?php

/**
 * Home Class
 */
class Home extends CI_Controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Home_model');
  }

  public function index(){
    $this->load->view('Home_view');
  }

  public function register(){
    $data = $this->Home_model->select_countri();
    $this->load->view('register_view',['countries'=>$data]);
  }

  public function register_create(){
    $this->form_validation->set_rules('companyName','Company Name','trim|required|min_length[3]');
    $this->form_validation->set_rules('emailId','Email','trim|required|valid_email');
    $this->form_validation->set_rules('termsConditions','Terms Conditions','required');
    $this->form_validation->set_rules('websiteUrl','web Site Url','valid_url');

    if($this->form_validation->run()){
      $data = [
        'u_companyName' => $this->input->post('companyName'),
        'u_websiteUrl' => $this->input->post('websiteUrl'),
        'u_country' => $this->input->post('country'),
        'u_postalCode' => $this->input->post('postalCode'),
        'u_companyType' => $this->input->post('companyType'),
        'u_eou' => $this->input->post('eou'),
        'u_emailId' => $this->input->post('emailId'),
        'u_contactNumber' => $this->input->post('contactNumber'),
        'u_contactNumber_one' => $this->input->post('contactNumber_one'),
        'u_mobileNumber' => $this->input->post('mobileNumber'),
        'u_gst' => $this->input->post('gst'),
        'u_industry' => $this->input->post('industry'),
        'u_comment' => $this->input->post('comment'),
        'u_otp' => rand('1000','5000')
      ];

        if ($this->Home_model->create_user($data)) {
          // $user_data = array('name'=>$username,'logged_in'=>true);

          // $this->session->set_userdata($user_data);
          // $this->session->set_flashdata('login_success','You are now logged in');
          // return redirect('Home/index');

          // $data['main_view'] = "admin_view";
          // $this->load->view('layouts/main',$data);
          // $this->u_emailId = $this->input->post('emailId');

          $config = array(
              'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'rohit.jadhavk1107@gmail.com',
              'smtp_pass' => 'Rj@@@0403',
              'mailtype' => 'html', //plaintext 'text' mails or 'html'
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE
          );
          $this->load->library('email',$config);

          $this->email->from('rohit.jadhav0403@gmail.com', 'Rohit Jadhav');
          $this->email->to('rohit.jadhavk1107@gmail.com','Admin');
          $this->email->subject('OTP for register form');
          $this->email->message('Please type your OTO'. $data['u_otp']);

          $this->email->send();

          $url_data = base64_encode($this->input->post('emailId'));
          return redirect("otp/$url_data");

        } else {
          $data =  array('errors' => validation_errors());

          $this->session->set_flashdata($data);
          return redirect('Home/register');
        }
    } else {
      $data =  array('errors' => validation_errors());
      $this->session->set_flashdata($data);

      return redirect('Home/register');
    }
  }


  public function login(){
    $this->load->view('login_view');
  }

  public function login_check(){
    $this->form_validation->set_rules('name','User Name','trim|required|min_length[3]');
    $this->form_validation->set_rules('password','Password','trim|required');

    if ($this->form_validation->run()) {
        $name = $this->input->post('name');
        $password = md5($this->input->post('password'));

        if ($this->Home_model->check_user($name,$password)) {
            $user_data = array('name'=>$username,'logged_in'=>true);

            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('login_success','You are now logged in');
            return redirect('Dashbord');
        } else {
            return redirect('Home/login');
        }
    } else {
      $data =  array('errors' => validation_errors());

      $this->session->set_flashdata($data);
      return redirect('Home/login');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    return redirect('Home/index');
  }

  public function otp($segment){
    $data = base64_decode($segment);
    $this->load->view('otp_view',['segment'=>$data]);
  }

  public function check_otp(){
    $otp = $this->input->post('otp');
    $emailID = $this->input->post('emailId');
    // echo $emailID;

    if ($this->Home_model->check_otp_model($otp,$emailID)) {
        return redirect('Dashbord');
    } else {
        $this->session->set_flashdata('errors','OTP is not match');
        $url_data = base64_encode($this->input->post('emailId'));
        return redirect("otp/$url_data");
    }
  }

}




 ?>
