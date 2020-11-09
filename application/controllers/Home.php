<?php

/**
 * Home Class
 */
class Home extends CI_Controller{

  function __construct(){
      parent::__construct();
      $this->load->model('Home_model');
      $this->load->helper('security');
      $this->load->library('facebook');
      $this->load->model('Admin_model');

  }

  public function index(){
    $this->load->library('user_agent');

    if ($this->agent->is_browser()){
            $agent = $this->agent->browser().' '.$this->agent->version();
    } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
    } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
    } else {
            $agent = 'Unidentified User Agent';
    }

    // echo $_SERVER['REMOTE_ADDR'];
    $ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request
    $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    $data = [
        'browser' => $this->agent->browser(),
        'platform' => $this->agent->platform(),
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'city' => $dataArray->geoplugin_city,
        'region' => $dataArray->geoplugin_region,
        'countryName' => $dataArray->geoplugin_countryName,
        'continentName' => $dataArray->geoplugin_continentName,
        'latitude' => $dataArray->geoplugin_latitude,
        'longitude' => $dataArray->geoplugin_longitude,
        'referrer' => $this->agent->referrer()
    ];
    $this->Home_model->user_agent($data);

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

  function validate_captcha() {
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp= $this->input->ip_address();
        $secret='6Lf8J6MZAAAAAKm5B6EpR6iS5YCF84y9nECUHX78';
        $data = array(
            'secret' => "$secret",
            'response' => "$recaptcha",
            'remoteip' =>"$userIp"
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $status= json_decode($response, true);
        if(empty($status['success'])){
            return FALSE;
        }else{
            return TRUE;
        }
    }

  public function register_create(){
    $this->form_validation->set_rules('companyName','Company Name','trim|required|min_length[3]');
    $this->form_validation->set_rules('emailId','Email','trim|required|valid_email|is_unique[s_user.u_emailId]',array('is_unique' => 'This %s already exists.'));
    $this->form_validation->set_rules('termsConditions','Terms Conditions','required');
    $this->form_validation->set_rules('websiteUrl','web Site Url','valid_url');
    $this->form_validation->set_rules('password','Password','trim|required|md5');
    $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
    $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

    if($this->form_validation->run()){
      $ran_cust = '0123456789abcdefghijklmnopqrstuvwxyz';
      $ran_pass = '0123456789abcdefghijklmnopqrstuvwxyz';

      $data = [
        'u_companyName' => $this->security->xss_clean($this->input->post('companyName')),
        'u_industry' => $this->security->xss_clean($this->input->post('industry')),
        'u_companyType' => $this->security->xss_clean($this->input->post('companyType')),
        'u_company_category' => $this->security->xss_clean($this->input->post('company_category')),
        'u_websiteUrl' => $this->security->xss_clean($this->input->post('websiteUrl')),
        'u_country' => $this->security->xss_clean($this->input->post('country')),
        'u_location' => $this->security->xss_clean($this->input->post('location')),
        'u_postalCode' => $this->security->xss_clean($this->input->post('postalCode')),
        'u_contact_person_name' => $this->security->xss_clean($this->input->post('contact_person_name')),
        'u_designation' => $this->security->xss_clean($this->input->post('designation')),
        'u_company_identity' => $this->security->xss_clean($this->input->post('company_identity')),
        'u_gst' => $this->security->xss_clean($this->input->post('gst')),
        'u_emailId' => $this->security->xss_clean($this->input->post('emailId')),
        'u_password' => $this->security->xss_clean($this->input->post('password')),
        'u_contactNumber' => $this->security->xss_clean($this->input->post('contactNumber')),
        'u_mobileNumber' => $this->security->xss_clean($this->input->post('mobileNumber')),
        'u_remark' => $this->security->xss_clean($this->input->post('remark')),

        // 'u_eou' => $this->security->xss_clean($this->input->post('eou')),
        // 'u_contactNumber_one' => $this->security->xss_clean($this->input->post('contactNumber_one')),
        'u_customerId' => 'CU-'.time(),
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

          $this->load->config('email');
          $this->load->library('email');

          $from = $this->config->item('smtp_user');
          $to = $data['u_emailId'];
          $subject = 'Important: verify your email to use SMPRO';
          $message = 'Hey '. $data['u_companyName']."<br>";
          $message .= "<br>";
          $message .= 'We need to verify your email address so you can use SMPRO'."<br>";;
          $message .= "<br>";
          $message .= "<a href='h'>Hello</a>";
          $message .= "<a href='".base_url('emailcheck/'.base64_encode($data['u_emailId']))."'>Click here to verify your email.</a>"."<br>";
          $message .= 'Thanks'."<br>";
          $message .= 'Team SMPRO'."<br>";

          $this->email->set_newline("\r\n");
          $this->email->from($from);
          $this->email->to($to);
          $this->email->subject($subject);
          $this->email->message($message);

          if($this->email->send()){
              return redirect("checkemail_message");
          } else {
              $this->session->set_flashdata('email_error','Email Not send !');
              return redirect('register');
          }

          // $url_data = base64_encode($this->input->post('emailId'));

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
      include_once APPPATH . "libraries/vendor/autoload.php";

      $google_client = new Google_Client();
      $google_client->setClientId('190202093767-mj3tjlg9cptq1fofd0knfrfm2l19ll0c.apps.googleusercontent.com'); //Define your ClientID
      $google_client->setClientSecret('aOb03sLytgZwlxTibYCqY_MD'); //Define your Client Secret Key
      $google_client->setRedirectUri(base_url().'login'); //Define your Redirect Uri
      $google_client->addScope('email');
      $google_client->addScope('profile');

      if(isset($_GET["code"])){
         $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
         if(!isset($token["error"])){
              $google_client->setAccessToken($token['access_token']);
              $this->session->set_userdata('access_token', $token['access_token']);
              $google_service = new Google_Service_Oauth2($google_client);
              $data = $google_service->userinfo->get();
              $current_datetime = date('Y-m-d H:i:s');
              if($this->Home_model->Is_already_register($data['email'])){
                  //update data
                   $user_data1 = array(
                      // 'first_name' => $data['given_name'],
                      // 'last_name'  => $data['family_name'],
                      'u_emailId'   => $data['email'],
                      'u_picture'   => $data['picture'],
                      'u_updated_at'  => $current_datetime
                   );
                   $this->Home_model->Update_user_data($user_data1, $data['email']);
              } else {
                  //insert data
                  $user_data1 = array(
                      // 'login_oauth_uid' => $data['id'],
                      // 'first_name'  => $data['given_name'],
                      // 'last_name'   => $data['family_name'],
                      'u_emailId'  => $data['email'],
                      'u_picture' => $data['picture'],
                      'u_c_date'  => $current_datetime
                  );
                  $this->Home_model->Insert_user_data($user_data1);
           }
           $this->session->set_userdata('user_data', $user_data1['u_emailId']);
         }
      }

      $login_button = '';
      if(!$this->session->userdata('access_token')){
          $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/sign-in-with-google.png" width="200"/></a>';
          $data['login_button'] = $login_button;
          $this->load->view('login_view', $data);
      }else{
          // echo $user_data1['u_emailId'];exit;
          $result = $this->Home_model->check_user_g($user_data1['u_emailId']);
          $user_data = array('emailId'=>$user_data1['u_emailId'],'actionId'=>$result,'logged_in'=>true);
          $this->session->set_userdata($user_data);
          $this->session->set_flashdata('login_success','You are now logged in');
          return redirect('Dashbord');
      }
  }

  public function login_check(){
    $this->form_validation->set_rules('name','CUSTOMER ID / Registered Email','trim|required|min_length[3]');
    $this->form_validation->set_rules('password','Password','trim|md5|required');
    $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
    $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

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

  // public function otp($segment){
  //   $data = base64_decode($segment);
  //   $this->load->view('otp_view',['segment'=>$data]);
  // }

  // public function check_otp(){
  //   $otp = $this->input->post('otp');
  //   $emailID = $this->input->post('emailId');
  //   // echo $emailID;
  //
  //   if ($this->Home_model->check_otp_model($otp,$emailID)) {
  //       $this->session->set_flashdata('otp_success','OTP success fully create !');
  //       return redirect('login');
  //   } else {
  //       $this->session->set_flashdata('errors','OTP is not match');
  //       $url_data = base64_encode($this->input->post('emailId'));
  //       return redirect("otp/$url_data");
  //   }
  // }

  public function emailcheck($email){
      $emailID = base64_decode($email);
      if ($this->Home_model->checkemail($emailID)) {
          $this->session->set_flashdata('email_success','Email ID is verify Success fully !');
          return redirect('login');
      } else {
          $this->session->set_flashdata('email_faild','Email ID is not verify !');
          return redirect('login');
      }
  }

  public function checkemail_message(){
      $this->load->view('checkemail_view');
  }

  public function facebook_login(){
			$data['user'] = array();
            $current_datetime = date('Y-m-d H:i:s');
			// Check if user is logged in
				if ($this->facebook->is_authenticated()){
					// User logged in, get user details
						$user = $this->facebook->request('get', '/me?fields=id,name,email,picture');
						if (!isset($user['error'])){
							$data['user'] = $user;
						}
				}

				if($this->Home_model->facebook_login($data['user']['email'])){
    				     $user_data1 = array(
                          // 'first_name' => $data['given_name'],
                          // 'last_name'  => $data['family_name'],
                          'u_emailId'   => $data['user']['email'],
                          'u_picture'   => $data['user']['picture']['data']['url'],
                          'updated_at'  => $current_datetime
                       );
                       $this->Home_model->Update_user_data($user_data1, $data['user']['email']);
				} else {
				        $user_data1 = array(
                          // 'first_name' => $data['given_name'],
                          // 'last_name'  => $data['family_name'],
                          'u_emailId'   => $data['user']['email'],
                          'u_picture'   => $data['user']['picture']['data']['url'],
                          'updated_at'  => $current_datetime
                       );
                       $this->Home_model->Insert_user_data($user_data1, $data['user']['email']);
				}

				$result = $this->Home_model->check_user_g($user_data1['u_emailId']);
                $user_data = array('emailId'=>$user_data1['u_emailId'],'actionId'=>$result,'logged_in'=>true);
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success','You are now logged in');
                return redirect('Dashbord');

	}

  public function forgot_password(){
      $this->load->view('forgot_password_view');
  }

  public function forgot_password_check(){
      $this->form_validation->set_rules('name','CUSTOMER ID / Registered Email','trim|required');
      $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
      $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

      if ($this->form_validation->run()) {
          $name = $this->security->xss_clean($this->input->post('name'));
          $result = $this->Home_model->forgot_password_check($name);
          if ($result) {
            $this->load->config('email');
            $this->load->library('email');

            $from = $this->config->item('smtp_user');
            $to = $result[0]->u_emailId;
            $subject = 'Important : Change Your Password with SMPRO';
            $message = 'Hey '. $result[0]->u_companyName."<br>";
            $message .= "<br>";
            $message .= 'someone requested that the password for SMPRO account be reset'."<br>";;
            $message .= "<br>";
            $message .= "<a href='".base_url('forgot_password_email/'.base64_encode($result[0]->u_emailId))."'> Reset My Password </a>"."<br>";
            $message .= "<br>";
            $message .= 'Thanks'."<br>";
            $message .= 'Team SMPRO'."<br>";

            $this->email->set_newline("\r\n");
            $this->email->from($from);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send()){
                $this->session->set_flashdata('forgot_success','Email send Success Fully !');
                return redirect('login');
            } else {
                $this->session->set_flashdata('forgot_faild','Email Not send Please type again !');
                return redirect('forgot_password');
            }
          } else {
            $this->session->set_flashdata('forgot_faild','Email Not match, Please type again !');
            return redirect('forgot_password');
          }
      } else {
        $this->session->set_flashdata('errors',array(validation_errors()));
        return redirect('forgot_password');
      }
  }

  public function forgot_password_email($email){
      $emailID['email'] = base64_decode($email);
      $this->load->view('forgot_password_email',$emailID);
  }

  public function new_password_type(){
      $this->form_validation->set_rules('password','passwrod','trim|md5|required');
      $this->form_validation->set_rules('re_password','Retype Passwrod','trim|md5|required|matches[password]');
      $this->form_validation->set_rules('email','email','trim|required');
      $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
      $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

      if ($this->form_validation->run()) {
          $result = $this->Home_model->new_password($this->security->xss_clean($this->input->post('password')),$this->input->post('email'));
          if ($result) {
              echo  "<script type='text/javascript'>";
              echo "window.close();";
              echo "</script>";
          } else {
              $this->session->set_flashdata('new_password_failed','New password is not created please type agine !');
              return redirect('forgot_password_email/'.base64_encode($this->input->post('email')));
          }
      } else {
          $this->session->set_flashdata(array('errors'=> validation_errors()));
          return redirect('forgot_password_email/'.base64_encode($this->input->post('email')));
      }

  }

  public function customer_follow_up(){
    // print_r($this->input->post());
    $data = [
        'c_customerId' => $this->input->post('customerId'),
        'c_status' => $this->input->post('status'),
        'c_comment' => $this->input->post('comment'),
        'c_select_date' => $this->input->post('select_date')
    ];
    $u_id = $this->input->post('u_id');
    // print_r($data);exit;
      if ($this->Admin_model->insert_c_follow_up($data)) {
          $this->session->set_flashdata('follow_up_success','Follow Up created success fully !');
          return redirect('view/'.$u_id);
      } else {
          $this->session->set_flashdata('follow_up_faild','Follow Up Not created !');
          return redirect('view/'.$u_id);
      }
  }

}

 ?>
