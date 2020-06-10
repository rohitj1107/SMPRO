<?php

/**
 * User
 */
class User extends CI_Controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Admin_model');
  }

  public function view($u_Id){
      $uid = base64_decode($u_Id);
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $user_view = $this->Admin_model->select_user_view($uid);

      $this->load->view('dashbord/user_one_view',['data'=>$data,'type'=>$type,'user_view'=>$user_view,'user'=>$user]);
  }

  public function edite($u_Id){
      $uid = base64_decode($u_Id);
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $user_view = $this->Admin_model->select_user_view($uid);
      $this->load->model('Home_model');
      $countries = $this->Home_model->select_countri();
      $this->load->view('dashbord/user/user_one_edite_view',['data'=>$data,'countries'=>$countries,'type'=>$type,'user_view'=>$user_view,'user'=>$user]);
  }

  public function register_update($u_Id){
      $uid = base64_decode($u_Id);
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
          // 'u_action' => $this->input->post('action')
      ];

      if ($this->Admin_model->user_update($data,$uid)) {
          $this->session->set_flashdata('seccess','User Update success fully !');
          return redirect("edite/$u_Id");
      } else {
          $this->session->set_flashdata('failed','User data not Update !');
          return redirect("edite/$u_Id");
      }
  }

  public function create_user(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $this->load->model('Home_model');
      $countries = $this->Home_model->select_countri();
      $this->load->view('dashbord/user/create_user_view',['data'=>$data,'countries'=>$countries,'type'=>$type,'user'=>$user]);
  }

  public function create_user_insert(){
      $this->form_validation->set_rules('companyName','Company Name','trim|required|min_length[3]');
      $this->form_validation->set_rules('emailId','Email','trim|required|valid_email');
      // $this->form_validation->set_rules('termsConditions','Terms Conditions','required');
      $this->form_validation->set_rules('websiteUrl','web Site Url','valid_url');
      $this->form_validation->set_rules('password','Password','trim|md5');

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
          'u_customerId' => 'CU-'.time(),
          'u_password' => md5(substr(str_shuffle($ran_pass),0,5)),

          'u_otp' => rand('1000','5000')
        ];

          if ($this->Admin_model->create_user($data)) {
            $config = array(
                'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                'smtp_host' => 'youtubergo.club',
                'smtp_port' => 465,
                'smtp_user' => 'rohit@youtubergo.club',
                'smtp_pass' => 'Rohit!123',
                'mailtype' => 'text', //plaintext 'text' mails or 'html'
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $this->load->library('email',$config);

            $this->email->from('rohit@youtubergo.club', 'From Email');
            $this->email->to($data['u_emailId'],'To Email');
            $this->email->subject('OTP for register form');
            $this->email->message('Please type your OTO'. $data['u_otp']);

            $this->email->send();

            // $url_data = base64_encode($this->input->post('emailId'));
            $this->session->set_flashdata('seccess','User create success fully !');
            return redirect("create_user");

          } else {
            $data =  array('errors' => validation_errors());

            $this->session->set_flashdata($data);
            return redirect('create_user');
          }
      } else {
        $data =  array('errors' => validation_errors());
        $this->session->set_flashdata($data);

        return redirect('create_user');
      }
  }

  public function user_list(){
      $data = $this->Admin_model->user_table();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $type = $this->Admin_model->select_type();
      $this->load->view('dashbord/user/user_list_view',['data'=>$data,'type'=>$type,'user'=>$user]);

  }
}


 ?>
