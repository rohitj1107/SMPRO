<?php

/**
 * Supplier
 */
class Supplier extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function supplier_form_admin(){
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $customerID = $this->Admin_model->customerId_admin();
        $this->load->model('Home_model');
        $countries = $this->Home_model->select_countri();
        $this->load->view('dashbord/supplier/supplier_form_admin_view',['countries'=>$countries,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
    }

    public function supplier_form_admin_insert(){
        $cpt = count($_FILES['s_attachment_of_company_catalogue']['name']);

        for($i=0; $i < $cpt; $i++) {
        unset($config);
        $config = array();
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';

        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $config['remove_spaces'] = FALSE;
        $config['file_name'] = $_FILES['s_attachment_of_company_catalogue']['name'][$i];

        $_FILES['f']['name'] =  $_FILES['s_attachment_of_company_catalogue']['name'][$i];
        $_FILES['f']['type'] = $_FILES['s_attachment_of_company_catalogue']['type'][$i];
        $_FILES['f']['tmp_name'] = $_FILES['s_attachment_of_company_catalogue']['tmp_name'][$i];
        $_FILES['f']['error'] = $_FILES['s_attachment_of_company_catalogue']['error'][$i];
        $_FILES['f']['size'] = $_FILES['s_attachment_of_company_catalogue']['size'][$i];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (! $this->upload->do_upload('f')) {
          $data1['upload_data']['file_name'] = null;
          $data1['upload_data']['full_path'] = null;

        } else {
          $data1 = array('upload_data' => $this->upload->data());
        }
          $name1[] = $data1['upload_data']['file_name'];
          $path1[] = $data1['upload_data']['full_path'];
      }

      $img_name1 = implode(' | ',$name1);
      $img_path1 = implode(' | ',$path1);
      $data = [
          's_supplier_id'=> $this->input->post('s_supplier_id'),
          's_company_name' => $this->input->post('s_company_name'),
          's_website'=> $this->input->post('s_website'),
          's_company_category'=> $this->input->post('s_company_category'),
          's_country'=> $this->input->post('s_country'),
          's_contact_person_name'=> $this->input->post('s_contact_person_name'),
          's_contact_information'=> $this->input->post('s_contact_information'),
          's_attachment_of_company_catalogue_path'=> $img_path1,
          's_attachment_of_company_catalogue_name'=> $img_name1,
          's_contact_email_id'=> $this->input->post('s_contact_email_id'),
          's_verification'=> $this->input->post('application'),
          's_country_code'=> $this->input->post('s_country_code'),
          's_contact_number_1'=> $this->input->post('s_contact_number_1'),
          's_infrastructure_details'=> $this->input->post('s_infrastructure_details'),
          's_machines_plant_capacity'=> $this->input->post('s_machines_plant_capacity'),
          's_support_infrastructure'=> $this->input->post('s_support_infrastructure'),
          's_qms_applicable'=> $this->input->post('s_qms_applicable'),
      ];
      if ($this->Admin_model->supplier_form_admin_insert_model($data)) {
          $this->session->set_flashdata('enquiry_success','Insert Enquiry success fully !');
          return redirect('supplier_form_admin');
      } else {
        $this->session->set_flashdata('enquiry_faile','Not Insert Enquiry !');
        return redirect('supplier_form_admin');
      }
    }

    public function supplier_show_admin(){
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $customerID = $this->Admin_model->customerId_admin();
        $supplier = $this->Admin_model->select_supplier_model();
        $this->load->view('dashbord/supplier/supplier_show_admin_view',['supplier'=>$supplier,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
    }

    public function supplier_view($supplier_id){
        // echo base64_decode($supplier_id);
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $customerID = $this->Admin_model->customerId_admin();
        $supplier = $this->Admin_model->select_supplier_ob_model(base64_decode($supplier_id));
        $this->load->view('dashbord/supplier/supplier_show_ob_admin_view',['supplier'=>$supplier,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);
    }

    public function supplier_edite($supplier_id){
        $data = $this->Admin_model->user_table();
        $type = $this->Admin_model->select_type();
        $user = $this->Admin_model->select_user($this->session->userdata('emailId'));
        $customerID = $this->Admin_model->customerId_admin();
        $supplier = $this->Admin_model->select_supplier_ob_model(base64_decode($supplier_id));
        $this->load->model('Home_model');
        $countries = $this->Home_model->select_countri();
        $this->load->view('dashbord/supplier/supplier_edite_ob_admin_view',['countries'=>$countries,'supplier'=>$supplier,'data'=>$data,'type'=>$type,'user'=>$user,'customerID'=>$customerID]);

    }

    public function supplier_form_admin_update($supplier_id){
      // echo $supplier_id;exit;
      $data = [
          's_supplier_id'=> $this->input->post('s_supplier_id'),
          's_company_name' => $this->input->post('s_company_name'),
          's_website'=> $this->input->post('s_website'),
          's_company_category'=> $this->input->post('s_company_category'),
          's_country'=> $this->input->post('s_country'),
          's_contact_person_name'=> $this->input->post('s_contact_person_name'),
          's_contact_information'=> $this->input->post('s_contact_information'),
          's_contact_email_id'=> $this->input->post('s_contact_email_id'),
          's_verification'=> $this->input->post('s_verification'),
          's_country_code'=> $this->input->post('s_country_code'),
          's_contact_number_1'=> $this->input->post('s_contact_number_1'),
          's_infrastructure_details'=> $this->input->post('s_infrastructure_details'),
          's_machines_plant_capacity'=> $this->input->post('s_machines_plant_capacity'),
          's_support_infrastructure'=> $this->input->post('s_support_infrastructure'),
          's_qms_applicable'=> $this->input->post('s_qms_applicable'),
      ];
      if ($this->Admin_model->supplier_form_admin_update_model($data)) {
          $this->session->set_flashdata('supplier_success','Update Supplier success fully !');
          return redirect('supplier_edite/'.base64_encode($this->input->post('s_supplier_id')));
      } else {
        $this->session->set_flashdata('supplier_faile','Not Update Supplier !');
        return redirect('supplier_edite/'.base64_encode($this->input->post('s_supplier_id')));
      }
    }

    public function po_to_supplier(){
        $this->load->view('dashbord/supplier/po_to_supplier_view');
    }
}


?>
