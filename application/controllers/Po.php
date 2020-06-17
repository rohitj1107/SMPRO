<?php

/**
 * Po
 */
class Po extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function po_show(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $po = $this->Admin_model->select_po_list();
      $companyname = $this->Admin_model->select_company_name();
      $this->load->view('dashbord/po/po_show_view',['data'=>$data,'type'=>$type,'user'=>$user,'po'=>$po,'companyname'=>$companyname]);
        // $this->load->view('dashbord/po/po_show_view');
    }

    public function po_form(){
        $this->load->view('dashbord/po/po_form_view');

    }
}


?>
