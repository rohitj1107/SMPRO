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
    $this->load->view('dashbord/dashbord_view',['data'=>$data,'type'=>$type,'user'=>$user]);
  }

  public function do_upload(){
    $image1 = $_FILES["Photo_Of_The_Parts"]['name'];
    $image2 = $_FILES["Drawing_Of_The_Parts"]['name'];
    $config['image_metadata1']['file_name'] = $image1;
    $config['image_metadata2']['file_name'] = $image2;
    $data_one = null;
    $data_two = null;

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('Photo_Of_The_Parts')){
        $data_one = array('image_metadata1' => $this->upload->data());
    } else {
        $data_one['image_metadata1']['full_path'] = null;
        $data_one['image_metadata1']['file_name'] = null;
    }
    if($this->upload->do_upload('Drawing_Of_The_Parts')){
        $data_two = array('image_metadata2' => $this->upload->data());
    } else {
        $data_two['image_metadata2']['full_path'] = null;
        $data_two['image_metadata2']['file_name'] = null;
    }
    $ran_cust = '0123456789abcdefghijklmnopqrstuvwxyz';
    $data = [
        'e_customerID'=>$this->input->post('customerId'),
        'e_emailID' => $this->session->userdata('emailId'),
        'e_appliction'=>$this->input->post('application'),
        'e_machine_model'=>$this->input->post('machine_model'),
        'e_machine_make'=>$this->input->post('machine_make'),
        'e_required_qty'=>$this->input->post('required_qty'),
        'e_required_description'=>$this->input->post('required_description'),
        'e_photo_of_the_parts_path'=>$data_one['image_metadata1']['full_path'],
        'e_photo_of_the_parts_name'=>$data_one['image_metadata1']['file_name'],
        'e_drawing_of_the_parts_path'=>$data_two['image_metadata2']['full_path'],
        'e_drawing_of_the_parts_name'=>$data_two['image_metadata2']['file_name'],
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
    $this->load->view('dashbord/enquiry_show_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry]);
  }

  public function view_enquiry_admin($customerID,$enquiryID){
    $data = $this->Admin_model->user_table();
    $type = $this->Admin_model->select_type();
    $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
    $enquiry = $this->Admin_model->select_enquiry($user->u_customerId);
    $view_enquiry = $this->Admin_model->select_view_enquiry($customerID,$enquiryID);
    $this->load->view('dashbord/view_enquiry_admin_view',['data'=>$data,'type'=>$type,'user'=>$user,'enquiry'=>$enquiry,'view_enquiry'=>$view_enquiry]);
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

    $image1 = $_FILES["Photo_Of_The_Parts"]['name'];
    $image2 = $_FILES["Drawing_Of_The_Parts"]['name'];
    $config['image_metadata1']['file_name'] = $image1;
    $config['image_metadata2']['file_name'] = $image2;
    $data_one = null;
    $data_two = null;

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('Photo_Of_The_Parts')){
        $data_one = array('image_metadata1' => $this->upload->data());
    } else {
        $data_one['image_metadata1']['full_path'] = null;
        $data_one['image_metadata1']['file_name'] = null;
    }
    if($this->upload->do_upload('Drawing_Of_The_Parts')){
        $data_two = array('image_metadata2' => $this->upload->data());
    } else {
        $data_two['image_metadata2']['full_path'] = null;
        $data_two['image_metadata2']['file_name'] = null;
    }
    $ran_cust = '0123456789abcdefghijklmnopqrstuvwxyz';
    $data = [
        'e_customerID'=>$custo[0],
        'e_emailID' => $custo[1],
        'e_appliction'=>$this->input->post('application'),
        'e_machine_model'=>$this->input->post('machine_model'),
        'e_machine_make'=>$this->input->post('machine_make'),
        'e_required_qty'=>$this->input->post('required_qty'),
        'e_required_description'=>$this->input->post('required_description'),
        'e_photo_of_the_parts_path'=>$data_one['image_metadata1']['full_path'],
        'e_photo_of_the_parts_name'=>$data_one['image_metadata1']['file_name'],
        'e_drawing_of_the_parts_path'=>$data_two['image_metadata2']['full_path'],
        'e_drawing_of_the_parts_name'=>$data_two['image_metadata2']['file_name'],
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

}

?>
