<?php

/**
 * Admin Model
 */
class Admin_model extends CI_Model{

  function __construct(){
      parent::__construct();
  }

  public function check_admin($name,$password){
    $where = "password='$password' AND name='$name'";
    $this->db->where($where);
    // $this->db->or_where('u_customerId',$name);
    // $this->db->where('u_password',$password);

    $sql = $this->db->get('admin');
    //exit;
    if ($sql->num_rows() == 1) {
      return true;
    } else {
      return false;
    }
  }

  public function select_user($emailID){
      $sql = $this->db->where('u_emailId',$emailID)->get('s_user');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  public function user_single_table($customerID){
      $sql = $this->db->where('u_customerId',$customerID)->get('s_user');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  public function user_table(){
    $sql = $this->db->get('s_user');
    if ($sql->num_rows() > 0) {
        return $sql->result();
    } else {
      return false;
    }
  }

  public function admin_approval_model($u_Id,$u_action){
    $data = array(
        'u_action' => $u_action,
      );

      $this->db->where('u_Id', $u_Id);
      $sql = $this->db->update('s_user', $data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function admin_anapproval_model($u_Id,$u_action){
    $data = array(
        'u_action' => $u_action,
      );

      $this->db->where('u_Id', $u_Id);
      $sql = $this->db->update('s_user', $data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function select_type(){
      $sql = $this->db->get('s_type');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function insert_enquiry($data){
      $sql = $this->db->insert('s_enquiry',$data);
      if ($sql) {
          return TRUE;
      } else {
          return false;
      }
  }

  public function select_enquiry($enquiryID){
      $sql = $this->db->where('e_customerID',$enquiryID)->get('s_enquiry');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_view_enquiry($custumerID,$enquiryID){
      $sql = $this->db->where(['e_customerID'=>$custumerID,'e_enquiryId'=>$enquiryID])->get('s_enquiry');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  public function select_enquiry_admin(){
      $sql = $this->db->get('s_enquiry');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function customerId_admin(){
      $sql = $this->db->select(['u_customerId','u_emailId'])->get('s_user');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function supplierID_admin(){
      $sql = $this->db->select(['s_supplier_id','s_company_name','s_contact_email_id'])->get('s_supplier');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function insert_quotation_model($data){
      $sql = $this->db->insert('s_quotation',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function select_quatation_list($e_customerID,$e_enquiryId){
      $sql = $this->db->where(['q_customer_ID'=>$e_customerID,'q_enquiry_ID'=>$e_enquiryId])->get('s_quotation');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_quatation_single($q_quote_number){
      $sql = $this->db->where('q_quote_number',$q_quote_number)->get('s_quotation');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  public function insert_po_model($data){
      $sql = $this->db->insert('s_po',$data);
      if ($sql) {
          return TRUE;
      } else {
          return FALSE;
      }
  }

  public function select_po($po_number){
      $sql = $this->db->where('s_quote_number',$po_number)->order_by('s_so_id desc')->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function select_po_row($po_number){
    $sql = $this->db->where('s_quote_number',$po_number)->order_by('s_so_id desc')->get('s_po');
    if ($sql->num_rows() > 0) {
        return $sql->row();
    } else {
        return FALSE;
    }
  }

  public function users_count(){
      $sql = $this->db->where('u_action','1')->get('s_user');
      if ($sql->num_rows() > 0) {
          return $sql->num_rows();
      } else {
          return false;
      }
  }

  public function enquiry_count(){
      $sql = $this->db->select('e_id')->get('s_enquiry');
      if ($sql->num_rows() > 0) {
          return $sql->num_rows();
      } else {
          return false;
      }
  }
  public function quatation_count(){
      $sql = $this->db->select('q_id')->get('s_quotation');
      if ($sql->num_rows() > 0) {
          return $sql->num_rows();
      } else {
          return false;
      }
  }
  public function po_count(){
      $sql = $this->db->select('s_so_id')->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->num_rows();
      } else {
          return false;
      }
  }

  public function select_user_view($u_Id){
      $sql = $this->db->where('u_Id',$u_Id)->get('s_user');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function user_update($data,$u_Id){
      $sql = $this->db->set($data)->where('u_Id',$u_Id)->update('s_user');
      if ($sql) {
          return TRUE;
      } else {
          return FALSE;
      }
  }

  public function create_user($data){
      $sql = $this->db->insert('s_user',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function insert_follow_up($data){
    $sql = $this->db->insert('s_follow_up',$data);
    if ($sql) {
        return TRUE;
    } else {
        return FALSE;
    }
  }
  public function insert_c_follow_up($data){
    $sql = $this->db->insert('c_follow_up',$data);
    if ($sql) {
        return TRUE;
    } else {
        return FALSE;
    }
  }

  public function insert_e_follow_up($data){
    $sql = $this->db->insert('e_follow_up',$data);
    if ($sql) {
        return TRUE;
    } else {
        return FALSE;
    }
  }

  public function insert_p_follow_up($data){
    $sql = $this->db->insert('p_follow_up',$data);
    if ($sql) {
        return TRUE;
    } else {
        return FALSE;
    }
  }

  public function select_follow_up($e_enquiryId){
      $sql = $this->db->where('f_enquiry_id',$e_enquiryId)->get('s_follow_up');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_c_follow_up($c_customerId){
      $sql = $this->db->where('c_customerId',$c_customerId)->get('c_follow_up');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_e_follow_up($e_enquiryId){
      $sql = $this->db->where('e_enquiryId',$e_enquiryId)->get('e_follow_up');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_p_follow_up($p_po_number){
      $sql = $this->db->where('p_po_number',$p_po_number)->get('p_follow_up');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function supplier_form_admin_insert_model($data){
    $sql = $this->db->insert('s_supplier',$data);
    if ($sql) {
        return TRUE;
    } else {
        return FALSE;
    }
  }

  public function select_supplier_model(){
      $sql = $this->db->get('s_supplier');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function select_supplier_ob_model($supplier_id){
      $sql = $this->db->where('s_supplier_id',$supplier_id)->get('s_supplier');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function supplier_form_admin_update_model($data){
      // echo $data['s_supplier_id'];exit;
      $this->db->where('s_supplier_id', $data['s_supplier_id']);
      $sql = $this->db->update('s_supplier', $data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function select_edite($customerID,$enquiryID){
      $sql = $this->db->where('e_customerID',$customerID)->where('e_enquiryId',$enquiryID)->get('s_enquiry');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function edite_enquiry($data,$customerID,$enquiryID){
      $sql = $this->db->set($data)->where('e_customerID',$customerID)->where('e_enquiryId',$enquiryID)->update('s_enquiry');
      if ($sql) {
          return TRUE;
      } else {
          return FALSE;
      }
  }

  public function count_qu($customerID,$enquiryID){
      $sql = $this->db->select("count(s_quotation.q_quote_number) as number , q_enquiry_ID")->where('q_customer_ID',$customerID)->where('q_enquiry_ID',$enquiryID)->get('s_quotation');
      if ($sql) {
          return $sql->result();
          // print_r($sql->result());exit;
      } else {
          return FALSE;
      }
  }

  public function count_quotation($enquiryID,$quotation_number){
      $sql = $this->db->select("count(s_po.s_po_number) as number , s_quote_number")->where('s_quote_number',$quotation_number)->where('s_enquiry_ID',$enquiryID)->get('s_po');
      if ($sql) {
          return $sql->result();
          // print_r($sql->result());exit;
      } else {
          return FALSE;
      }
  }

  public function select_po_list(){
      $sql = $this->db->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function select_quotation_list(){
      $sql = $this->db->order_by('q_id','desc')->get('s_quotation');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function select_quotation_admin(){
      $sql = $this->db->get('s_quotation');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_quotation_single($q_id){
      $sql = $this->db->where('q_quote_number',$q_id)->get('s_quotation');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function update_quotation_single($quotation_id,$data){
      $sql = $this->db->set($data)->where('q_quote_number',$quotation_id)->update('s_quotation');
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function select_company_name(){
      $sql = $this->db->select('u_customerId,u_companyName')->get('s_user');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  public function select_po_single($po_id){

      $sql = $this->db->where('s_so_number',$po_id)->get('s_po_so');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function select_so_single($po_id){
      $sql = $this->db->where('s_so_number',$po_id)->get('s_po_so');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function create_follow_up_so($data){
      $sql = $this->db->insert('s_follow_up_so',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function select_follow_up_so($po_id){
      $sql = $this->db->where('fp_po_number',$po_id)->get('s_follow_up_so');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function update_po($data,$po_id){
      $sql = $this->db->where('s_so_number',$po_id)->set($data)->update('s_po_so');
      if ($sql) {
          return true;
      } else {
          return FALSE;
      }
  }

  public function insert_po($data){
      $sql = $this->db->insert('s_po',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function insert_pos_model($data){
      $sql = $this->db->insert('s_po_so',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function select_po_so_list(){
      $sql = $this->db->order_by('s_id','desc')->get('s_po_so');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function min_item($so_number){
      $sql = $this->db->select('s_o_m_qty,s_qty,s_item_code')->where('s_so_number',$so_number)->order_by('s_so_id','desc')->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  public function select_pof_list(){
      $sql = $this->db->order_by('s_so_id','desc')->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return FALSE;
      }
  }

  public function select_pof_single($pof_id){

      $sql = $this->db->where('s_po_number',$pof_id)->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function check_supplier($sID,$so_number){
      $sql = $this->db->select('count(s_po.s_po_number) as number ,s_supplier_ID,s_so_number,s_po_number')->where('s_supplier_ID',$sID)->where('s_so_number',$so_number)->get('s_po');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return FALSE;
      }
  }

  public function insert_pos_update($data){
      $sql = $this->db->insert('s_item_qty',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  public function update_select_item($so_number){
      $sql = $this->db->where('up_so_number',$so_number)->order_by('up_id','desc')->get('s_item_qty');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  public function update_item_all($dataUpdate,$so_number){
      $sql = $this->db->set($dataUpdate)->where('up_so_number',$so_number)->update('s_item_qty');
      if ($sql) {
          return TRUE;
      } else {
          return FALSE;
      }
  }
}


?>
