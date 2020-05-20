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
    $this->load->view('register_view');
  }

  public function register_create(){
    $this->form_validation->set_rules('name','Username','trim|required|min_length[3]');
    $this->form_validation->set_rules('email','Email','trim|required');
    $this->form_validation->set_rules('password','Password','trim|required');

    if($this->form_validation->run()){
      $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password'))
      ];
        if ($this->Home_model->create_user($data)) {
          $user_data = array('name'=>$username,'logged_in'=>true);

          $this->session->set_userdata($user_data);
          $this->session->set_flashdata('login_success','You are now logged in');
          // return redirect('Home/index');

          // $data['main_view'] = "admin_view";
          // $this->load->view('layouts/main',$data);
          return redirect('Dashbord');
    } else {
      $data =  array('errors' => validation_errors());

      $this->session->set_flashdata($data);
      return redirect('Home/register');
    }
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

}




 ?>
