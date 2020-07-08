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
        $select_p_follow_up = $this->Admin_model->select_p_follow_up($id_pof);
        $this->load->view('dashbord/pof/view_pof_single',['data'=>$data,'type'=>$type,'user'=>$user,
        'po_select'=>$po_select,'view_enquiry'=>$view_enquiry,
        'follow_up'=>$follow_up,'select_p_follow_up'=>$select_p_follow_up]);

    }

    public function pof_follow_up(){
      // print_r($this->input->post());
      $data = [
          'p_po_number' => $this->input->post('fp_po_number'),
          'p_status' => $this->input->post('status'),
          'p_comment' => $this->input->post('comment'),
          'p_select_date' => $this->input->post('select_date')
      ];
      $u_id = base64_encode($this->input->post('fp_po_number'));
      // print_r($data);exit;
        if ($this->Admin_model->insert_p_follow_up($data)) {
            $this->session->set_flashdata('follow_up_success','Follow Up created success fully !');
            return redirect('view_pof_single/'.$u_id);
        } else {
            $this->session->set_flashdata('follow_up_faild','Follow Up Not created !');
            return redirect('view_pof_single/'.$u_id);
        }
    }
}


?>
