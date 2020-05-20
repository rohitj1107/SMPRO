<?php if ($this->session->flashdata('errors')) {
    echo $this->session->flashdata('errors');
} ?>
<?php echo validation_errors(); ?>
<?php echo form_open('Home/login_check','class="email" id="myform"') ?>
<?php echo form_error('name'); ?>
  <?php $name_data = [
    'name' => 'name',
    'value' => set_value('name'),
    'placeholder' => 'Type name'
  ]; ?>

  <?php echo form_input($name_data); ?>

<?php echo form_error('password'); ?>
  <?php $password_data = [
    'name' => 'password',
    'value' => '',
    'placeholder' => 'Type Password'
  ]; ?>

  <?php echo form_password($password_data); ?>

  <?php echo form_submit('mysubmit','Submit Post!'); ?>

<?php echo form_close(); ?>
