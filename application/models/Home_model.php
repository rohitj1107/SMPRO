<?php

/**
 *Home_model class
 */
class Home_model extends CI_Model{

  function __construct(){
      parent::__construct();
  }

  public function user_agent($data){
      $sql = $this->db->insert('s_user_agent',$data);
      if ($sql) {
          return true;
      } else {
          return FALSE;
      }
  }

  public function select_user_agent(){
      $sql = $this->db->order_by("ua_Id","desc")->get('s_user_agent');
      if ($sql->num_rows() > 0) {
          return $sql->result();
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

  public function check_user_g($name){
      $where = "u_emailId='$name'";
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

  function Is_already_register($id){
      $this->db->where('u_emailId', $id);
      $query = $this->db->get('s_user');
      if($query->num_rows() > 0){
       return true;
      } else {
       return false;
      }
  }

 function Update_user_data($data, $id){
      $this->db->set(['u_picture'=>$data['u_picture'],'u_updated_at'=>$data['updated_at']])->where('u_emailId', $id);
      $this->db->update('s_user');
 }

 function Update_create_user_data($data, $id){
      $this->db->where('u_emailId', $id);
      $this->db->update('s_user',$data);
 }

 function Insert_user_data($data){
      $data_g = array(
           'u_emailId' => $data['u_emailId'],
           'u_picture' => $data['u_picture'],
           'u_updated_at' => $data['u_updated_at'],
           'u_customerId' => 'CU-'.time(),
           'u_action' => 'google',
           'u_password' => 'GO-'.time()
      );
      $this->db->insert('s_user', $data_g);
 }
 function facebook_login($email){
        $sql = $this->db->where('u_emailId',$email)->get('s_user');
        if($sql->num_rows() > 0){
            return true;
        } else {
            return false;
        }
 }

 public function forgot_password_check($emailID){
     $where = "u_customerId='$emailID' OR u_emailId='$emailID'";
     $sql = $this->db->where($where)->get('s_user');

     if ($sql->num_rows() > 0) {
         $result = $sql->result();
         return $result;
     } else {
         return false;
     }
 }

 public function new_password($password,$email){
    $sql = $this->db->set('u_password',$password)->where('u_emailId',$email)->update('s_user');
    if ($sql) {
        return true;
    } else {
        return false;
    }
 }
}

?>
