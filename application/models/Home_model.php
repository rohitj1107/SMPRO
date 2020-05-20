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
    $this->db->where('name',$name);
    $this->db->where('password',$password);

    $result = $this->db->get('s_user');
    if ($result->num_rows() == 1) {
        return $result->row(0)->id;
    } else {
      return false;
    }
  }
}

?>
