<?php

/**
 * Home Class
 */
class Home extends CI_Controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Home_model');
      $this->load->helper('security');
  }

  public function index(){
    $this->load->view('Home_view');
  }

  public function about(){
    $this->load->view('about_view');
  }

  public function enquiry(){
    $this->load->view('enquiry_view');
  }

  public function products(){
    $this->load->view('products_view');
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
    $this->form_validation->set_rules('password','Password','trim|required|md5');


    if($this->form_validation->run()){
      $ran_cust = '0123456789abcdefghijklmnopqrstuvwxyz';
      $ran_pass = '0123456789abcdefghijklmnopqrstuvwxyz';

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
        'u_customerId' => substr(str_shuffle($ran_cust), 0, 10),
        'u_password' => $this->security->xss_clean($this->input->post('password')),

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
              'smtp_user' => 'your_email@gmail.com',
              'smtp_pass' => 'your_password',
              'mailtype' => 'html', //plaintext 'text' mails or 'html'
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE
          );
          $this->load->library('email',$config);

          $this->email->from('from_email', 'From Email');
          $this->email->to('to_email','To Email');
          $this->email->subject('OTP for register form');
          $this->email->message('Please type your OTO'. $data['u_otp']);

          $this->email->send();

          $url_data = base64_encode($this->input->post('emailId'));
          return redirect("otp/$url_data");

        } else {
          $data =  array('errors' => validation_errors());

          $this->session->set_flashdata($data);
          return redirect('register');
        }
    } else {
      $data =  array('errors' => validation_errors());
      $this->session->set_flashdata($data);

      return redirect('register');
    }
  }

  public function login(){
    $this->load->view('login_view');
  }

  public function login_check(){
    $this->form_validation->set_rules('name','CUSTOMER ID / Registered Email','trim|required|min_length[3]');
    $this->form_validation->set_rules('password','Password','trim|md5|required');

    if ($this->form_validation->run()) {
        $name = $this->security->xss_clean($this->input->post('name'));
        // $password = md5($this->input->post('password'));
        $password = $this->input->post('password');

        $result = $this->Home_model->check_user($name,$password);

        if ($result) {

            $user_data = array('emailId'=>$name,'actionId'=>$result,'logged_in'=>true);

            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('login_success','You are now logged in');

            return redirect('Dashbord');
        } else {
            $this->session->set_flashdata('login_faild','ID and Password not match');
            return redirect('login');
        }
    } else {
      $data =  array('errors' => validation_errors());
      $this->session->set_flashdata($data);
      return redirect('login');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    return redirect('login');
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
        $this->session->set_flashdata('otp_success','OTP success fully create !');
        return redirect('login');
    } else {
        $this->session->set_flashdata('errors','OTP is not match');
        $url_data = base64_encode($this->input->post('emailId'));
        return redirect("otp/$url_data");
    }
  }

}

 ?>
