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

    public function quotation_show(){
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $quotation = $this->Admin_model->select_quotation_list();
        // $po = $this->Admin_model->count_po();
        $companyname = $this->Admin_model->select_company_name();
        $po = $this->Admin_model->select_quotation_admin();
        for ($i=0; $i < count($po); $i++) {
            $po_count[] = $this->Admin_model->count_quotation($po[$i]->q_enquiry_ID,$po[$i]->q_quote_number);
        }

        // exit;
        // print_r($po_count);
        $this->load->view('dashbord/quotation/quotation_show_view',['data'=>$data,'type'=>$type,'user'=>$user,
        'po_count'=>$po_count,'quotation'=>$quotation,'companyname'=>$companyname]);
        // $this->load->view('dashbord/quotation/quotation_show_view');
    }

    public function view_quotation_single($quotation_id){
        $q_id = base64_decode($quotation_id);
        $q_select = $this->Admin_model->select_quotation_single($q_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $view_enquiry = $this->Admin_model->select_view_enquiry($q_select->q_customer_ID,$q_select->q_enquiry_ID);
        $follow_up = $this->Admin_model->select_follow_up($q_select->q_enquiry_ID);
        $this->load->view('dashbord/quotation/view_quotation_single_view',['data'=>$data,'type'=>$type,'user'=>$user,
        'q_select'=>$q_select,'view_enquiry'=>$view_enquiry,'follow_up'=>$follow_up]);
    }

    public function edite_quotation_single($quotation_id){
        $q_id = base64_decode($quotation_id);
        $q_select = $this->Admin_model->select_quotation_single($q_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));

        $this->load->view('dashbord/quotation/edite_quotation_single_view',['data'=>$data,'type'=>$type,'user'=>$user,
        'q_select'=>$q_select]);
    }

    public function update_quotation($quotation_id){
        $q_id = base64_decode($quotation_id);
        $data = [
            'q_enquiry_status'=>$this->input->post('enquiry_status'),
            'q_registration'=>$this->input->post('registration'),
            'q_under_process'=>$this->input->post('under_process'),
            'q_order_status'=>$this->input->post('order_status'),
            'q_customer_ID'=>$this->input->post('customer_ID'),
            'q_enquiry_ID'=>$this->input->post('enquiry_ID'),
            'q_market_segment'=>$this->input->post('market_segment'),
            'q_date'=>$this->input->post('date'),
            'q_quote_number'=>$this->input->post('quote_number'),
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
        $q_update = $this->Admin_model->update_quotation_single($q_id,$data);
        if ($q_update) {
            $this->session->set_flashdata('quotation_seccess','Quotation Upload Success Fully !');
            return redirect("edite_quotation_single/".$quotation_id);
        } else {
            $this->session->set_flashdata('quotation_failed','Failed To upload !');
            return redirect("edite_quotation_single/".$quotation_id);
        }
    }

    public function quotation_to_po($q_quote_number){
        $quotation_id = base64_decode($q_quote_number);
        $quatation = $this->Admin_model->select_quatation_single($quotation_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $po_number_result = $this->Admin_model->select_po($quotation_id);
        $po_number_row = $this->Admin_model->select_po_row($quotation_id);

        $this->load->view('dashbord/quotation/view_quotation_to_po_view',['data'=>$data,'type'=>$type,'user'=>$user,'quatation'=>$quatation,'po_number_result'=>$po_number_result,'po_number_row'=>$po_number_row]);
    }

    public function insert_po(){
        $data = [
            'po_customer_ID'=>$this->input->post('customer_ID'),
            'po_enquiry_ID'=>$this->input->post('enquiry_ID'),
            'po_quote_number'=>$this->input->post('quote_number'),
            'po_po_number'=>$this->input->post('po_number'),
            'po_date'=>$this->input->post('date'),
            'po_market_segment'=>$this->input->post('market_segment'),
            'po_delay_penalty'=>$this->input->post('delay_penalty'),
            'po_scope_text'=>$this->input->post('scope_text'),
            'po_lc_applicabl'=>$this->input->post('lc_applicabl'),
            'po_into_terms'=>$this->input->post('into_terms'),
            'po_load_time'=>$this->input->post('load_time'),
            'po_payment'=>$this->input->post('payment'),
            'po_expiry_date_of_lc'=>$this->input->post('expiry_date_of_lc'),
            'po_emailId'=>$this->input->post('emailId')
        ];

        if($this->Admin_model->insert_po_model($data)){
            $this->session->set_flashdata('po_seccess','PO upload success fully !');
            return redirect("quotation_to_po/".base64_encode($this->input->post('quote_number')));
        } else {
            $this->session->set_flashdata('po_failed','PO NOT upload !');
            return redirect("quotation_to_po/".base64_encode($this->input->post('quote_number')));
        }

    }
}


?>
