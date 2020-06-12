<?php

/**
 *Home_model class
 */
class Home_model extends CI_Model{

  function __construct(){
      parent::__construct();
  }

  public function create_user($data){
    $sql = $this->db->insert('s_user',$data);
    if ($sql) {
        return true;
    } else {
        return false;
    }
  }

  public function check_user($name,$password){
    $where = "u_password='$password' AND (u_customerId='$name' OR u_emailId='$name')";
    $sql = $this->db->where($where)->get('s_user');

    if ($sql->num_rows() > 0) {
      $result = $sql->result();
      return $result[0]->u_action;
    } else {
      return false;
    }
  }

  public function check_otp_model($otp,$emailID){
    $this->db->where('u_otp',$otp);
    $this->db->where('u_emailId',$emailID);

    $result = $this->db->get('s_user');
    if ($result->num_rows() == 1) {
        return true;
    } else {
      return false;
    }
  }

  public function select_countri(){
    $sql = $this->db->select('country_name')->get('s_countries');
    if ($sql->num_rows() > 0) {
        return $sql->result();
    } else {
      return false;
    }
  }

  public function checkemail($emailID){
      $sql = $this->db->where('u_emailId',$emailID)->get('s_user');
      if ($sql->num_rows() > 0) {
          $sql = $this->db->set('u_action','1')->where('u_emailId',$emailID)->update('s_user');
          return TRUE;
      } else {
          return FALSE;
      }
  }

}

?>
