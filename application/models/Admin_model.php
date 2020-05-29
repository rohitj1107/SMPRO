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
}


?>
