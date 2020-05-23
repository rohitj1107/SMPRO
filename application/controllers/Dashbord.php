<?php

/**
 * Dashbord Class
 */
class Dashbord extends CI_Controller{

  function __construct(){
      parent::__construct();
  }

  public function index(){
    $data['Home_view'] = 'Home_view';
    $this->load->view('Dashbord_view',$data);
  }
}

?>
