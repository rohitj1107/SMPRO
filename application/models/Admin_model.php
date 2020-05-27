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

  public function user_table(){
    $sql = $this->db->get('s_user');
    if ($sql->num_rows() > 0) {
        return $sql->result();
    } else {
      return false;
    }
  }

  public function admin_approval_model($u_Id,$u_password,$u_action,$u_customerId){
    $data = array(
        'u_action' => $u_action,
        'u_password' => $u_password,
        'u_customerId' => $u_customerId
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
}


?>
