<?php
/**
 * POS
 */
class Pof extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index(){
      $data = $this->Admin_model->user_table();
      $type = $this->Admin_model->select_type();
      $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
      $so = $this->Admin_model->select_pof_list();
      $companyname = $this->Admin_model->select_company_name();
      $suppliername = $this->Admin_model->supplierID_admin();
      $this->load->view('dashbord/pof/list_pof',['data'=>$data,'type'=>$type,'user'=>$user,'so'=>$so,
      'companyname'=>$companyname,'suppliername'=>$suppliername]);
        // $this->load->view('dashbord/po/po_show_view');
    }


    public function view_pof_single($po_id){
        $id_pof = base64_decode($po_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $po_select = $this->Admin_model->select_pof_single($id_pof);
        $view_enquiry = $this->Admin_model->select_view_enquiry($po_select->s_customer_ID,$po_select->s_enquiry_ID);
        $follow_up = $this->Admin_model->select_follow_up_so($id_pof);
        $this->load->view('dashbord/pof/view_pof_single',['data'=>$data,'type'=>$type,'user'=>$user,
        'po_select'=>$po_select,'view_enquiry'=>$view_enquiry,'follow_up'=>$follow_up]);

    }
}


?>
