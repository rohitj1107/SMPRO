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
    $this->db->where($where);
    // $this->db->or_where('u_customerId',$name);
    // $this->db->where('u_password',$password);

    $sql = $this->db->get('s_user');
    //exit;
    if ($sql->num_rows() == 1) {
      return true;
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

}

?>
