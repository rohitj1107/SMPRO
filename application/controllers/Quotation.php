<?php

/**
 * Quotation
 */
class Quotation extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function insert_quotation(){
        $data = [
          'q_enquiry_status'=>$this->input->post('enquiry_status'),
          'q_registration'=>$this->input->post('registration'),
          'q_under_process'=>$this->input->post('under_process'),
          'q_order_status'=>$this->input->post('order_status'),
          'q_customer_ID'=>$this->input->post('customer_ID'),
          'q_enquiry_ID'=>$this->input->post('enquiry_ID'),
          'q_market_segment'=>$this->input->post('market_segment'),
          'q_date'=>$this->input->post('date'),
          'q_quote_number'=>'QU-'.time(),
          'q_quoted_value'=>$this->input->post('quoted_value'),
          'q_scope_text'=>$this->input->post('scope_text'),
          'q_into_terms'=>$this->input->post('into_terms'),
          'q_load_time'=>$this->input->post('demo3_22'),
          'q_payment_terms'=>$this->input->post('payment_terms'),
          'q_general_terms_gic_provided'=>$this->input->post('general_terms_gic_provided'),
          'q_order_expected_by'=>$this->input->post('order_expected_by'),
          'q_date_entry_by'=>$this->input->post('date_entry_by'),
          'q_emailId'=>$this->input->post('emailId')

        ];
        $result = $this->Admin_model->insert_quotation_model($data);
        if ($result) {
            $this->session->set_flashdata('quotation_seccess','Quotation Upload Success Fully !');
            return redirect("view_enquiry_admin/".$this->input->post('customer_ID').'/'.$this->input->post('enquiry_ID'));
        } else {
            $this->session->set_flashdata('quotation_failed','Failed To upload !');
            return redirect("view_enquiry_admin/".$this->input->post('customer_ID').'/'.$this->input->post('enquiry_ID'));
        }
    }

    public function quotation_form(){
        $this->load->view('dashbord/quotation/quotation_form_view');
    }

    public function quotation_show(){
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $quotation = $this->Admin_model->select_quotation_list();
        // $po = $this->Admin_model->count_po();
        $po = $this->Admin_model->select_quotation_admin();
        for ($i=0; $i < count($po); $i++) {
            $po_count[] = $this->Admin_model->count_quotation($po[$i]->q_enquiry_ID,$po[$i]->q_quote_number);
        }

        // exit;
        // print_r($qu_count);
        $this->load->view('dashbord/quotation/quotation_show_view',['data'=>$data,'type'=>$type,'user'=>$user,'po_count'=>$po_count,'quotation'=>$quotation]);
        // $this->load->view('dashbord/quotation/quotation_show_view');
    }
}


?>
