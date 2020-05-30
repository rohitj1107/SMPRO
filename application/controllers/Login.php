<?php

/**
 *
 */
class Login extends CI_Controller{

  function __construct() {
      parent::__construct();
  }

  function fblogin(){

    $fb = new Facebook\Facebook([
          'app_id' => 'your app id',
          'app_secret' => 'your app key',
          'default_graph_version' => 'v2.5',
        ]);

   $helper = $fb->getRedirectLoginHelper();

   $permissions = ['email','user_location','user_birthday','publish_actions'];
// For more permissions like user location etc you need to send your application for review

   $loginUrl = $helper->getLoginUrl('http://192.168.64.2/smpro/login/fbcallback', $permissions);

   header("location: ".$loginUrl);
 }

}



?>
