<?php if($this->session->userdata('logged_in')){
  echo '<h1>Logout</h1>';
  echo form_open('Home/logout');
  if ($this->session->userdata('logged_in')) {
      echo '<p>You\'r logged in as '.$this->session->userdata('emailId').'</p>';
  }

  $data = array('class' => 'btn btn-primary','name'=>'submit','value'=>'logout' );
  echo form_submit($data);
  echo form_close();
} else { ?>

  <?php $this->load->view('Home_view'); ?>

<?php } ?>
