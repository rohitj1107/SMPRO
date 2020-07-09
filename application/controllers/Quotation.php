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
          'q_emailId'=>$this->input->post('emailId'),
          'q_company'=>$this->input->post('company'),
          'q_location'=>$this->input->post('location'),
          'q_quote_categ'=>$this->input->post('quote_categ'),
          'q_industry'=>$this->input->post('industry'),
          'q_currency'=>$this->input->post('currency'),
          'q_quote_class'=>$this->input->post('quote_class'),
          'q_sales_channel'=>$this->input->post('sales_channel'),
          'q_sales_engineer'=>$this->input->post('sales_engineer'),

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
        $this->load->model('Home_model');
        $q_id = base64_decode($quotation_id);
        $q_select = $this->Admin_model->select_quotation_single($q_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $countries = $this->Home_model->select_countri();
        $this->load->view('dashbord/quotation/edite_quotation_single_view',['data'=>$data,'type'=>$type,'user'=>$user,
        'q_select'=>$q_select,'countries'=>$countries]);
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
            'q_emailId'=>$this->input->post('emailId'),
            'q_company'=>$this->input->post('company'),
            'q_location'=>$this->input->post('location'),
            'q_quote_categ'=>$this->input->post('quote_categ'),
            'q_industry'=>$this->input->post('industry'),
            'q_currency'=>$this->input->post('currency'),
            'q_quote_class'=>$this->input->post('quote_class'),
            'q_sales_channel'=>$this->input->post('sales_channel'),
            'q_sales_engineer'=>$this->input->post('sales_engineer')
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
        $this->load->model('Home_model');
        $quotation_id = base64_decode($q_quote_number);
        $quatation = $this->Admin_model->select_quatation_single($quotation_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $po_number_result = $this->Admin_model->select_po($quotation_id);
        $po_number_row = $this->Admin_model->select_po_row($quotation_id);
        $countries = $this->Home_model->select_countri();
        $this->load->view('dashbord/quotation/view_quotation_to_po_view',['data'=>$data,'type'=>$type,'user'=>$user,
        'quatation'=>$quatation,'po_number_result'=>$po_number_result,'po_number_row'=>$po_number_row,
      'countries'=>$countries]);
    }

    public function insert_pos(){
        for ($i=0; $i < count( $this->input->post('item_code')); $i++) {
            $sn[] = $i+1;
        }
        $snf = implode(' | ',$sn);
        $description = implode(' | ',$this->input->post('description'));
        $item_code = implode(' | ',$this->input->post('item_code'));
        $tech_specs = implode(' | ',$this->input->post('tech_specs'));
        $delivery_date = implode(' | ',$this->input->post('delivery_date'));
        $qty = implode(' | ',$this->input->post('qty'));

        $data = [
            's_customer_ID'=>$this->input->post('customer_ID'),
            's_enquiry_ID'=>$this->input->post('enquiry_ID'),
            's_quote_number'=>$this->input->post('quote_number'),
            's_so_number'=>$this->input->post('so_number'),
            's_market'=>$this->input->post('market'),
            's_so_date'=>$this->input->post('so_date'),
            's_category'=>$this->input->post('category'),
            's_customer_po_number'=>$this->input->post('customer_po_number'),
            's_po_date'=>$this->input->post('po_date'),
            's_value'=>$this->input->post('value'),
            's_currency'=>$this->input->post('currency'),
            's_market_segment'=>$this->input->post('market_segment'),
            's_delay_penalty'=>$this->input->post('delay_penalty'),
            's_lc_applicabl'=>$this->input->post('lc_applicabl'),
            's_into_terms'=>$this->input->post('into_terms'),
            's_load_time'=>$this->input->post('load_time'),
            's_payment'=>$this->input->post('payment'),
            's_expiry_date_of_lc'=>$this->input->post('expiry_date_of_lc'),
            's_item_code'=>$item_code,
            's_tech_specs'=>$tech_specs,
            's_delivery_date'=>$delivery_date,
            's_sn'=>$snf,
            's_description'=>$description,
            's_qty'=>$qty,
            's_emailId'=>$this->input->post('emailId'),
            's_company'=>$this->input->post('company'),
            's_location'=>$this->input->post('location'),
            's_industry'=>$this->input->post('industry'),
            's_so_status'=>$this->input->post('so_status'),
            's_stage_gate'=>$this->input->post('stage_gate'),
            's_sales_channel'=>$this->input->post('sales_channel'),
            's_sales_engineer'=>$this->input->post('sales_engineer')

        ];
        $dataupdate = [
          'up_qty'=>$qty,
          'up_item_code'=>$item_code,
          'up_so_number'=>$this->input->post('so_number'),
        ];

        if($this->Admin_model->insert_pos_model($data)){
            $this->Admin_model->insert_pos_update($dataupdate);
            $this->session->set_flashdata('so_seccess','PO(SO) upload success fully !');
            return redirect("quotation_to_po/".base64_encode($this->input->post('quote_number')));
        } else {
            $this->session->set_flashdata('so_failed','PO(SO) NOT upload !');
            return redirect("quotation_to_po/".base64_encode($this->input->post('quote_number')));
        }

    }
}


?>
