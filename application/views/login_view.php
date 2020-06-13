<?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">LOGIN</p>
            </div>
        </div>
    </div>


    <div class="container w-50 mt-5">
      <?php echo form_open('Home/login_check','id="myform"'); ?>

        <div class="row login-grid">

            <div class="col-md-12 mt-4">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('errors'); ?>

                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('email_success')) { ?>
                <div class="text-white bg-success text-center">

                  <?php echo $this->session->flashdata('email_success'); ?>

                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('email_faild')) { ?>
                <div class="text-white bg-success text-center">

                  <?php echo $this->session->flashdata('email_faild'); ?>

                </div>
              <?php } ?>

              <?php if ($this->session->flashdata('login_faild')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('login_faild'); ?>

                </div>
              <?php } ?>


                <p class="m-0 font-weight-bold">Lorem ipsum</p>
            </div>

            <div class="col-md-12 mt-4">
              <?php echo form_error('name'); ?>
                <?php $name_data = [
                  'name' => 'name',
                  'value' => set_value('customerId'),
                  'placeholder' => 'CUSTOMER ID / Registered Email',
                  'class'=>'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>

                <!-- <input type="text" class="form-control" id="email" placeholder="CUSTOMER ID / Registered Email" name="customerId"> -->
            </div>
            <div class="col-md-12 mt-4">

              <?php echo form_error('password'); ?>
                <?php $password_data = [
                  'name' => 'password',
                  'value' => set_value('password'),
                  'placeholder' => 'Type Password',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_password($password_data); ?>

                <!-- <input type="text" class="form-control" id="email" placeholder="Password" name="password"> -->
            </div>
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                      <script src='https://www.google.com/recaptcha/api.js'></script>
                      <div class="g-recaptcha" data-sitekey="6Lf8J6MZAAAAAFHT5nnm8mO57laBx7nHxIGDBkj-"></div>
                    </div>
                    <div class="col-md-6 align-self">
                        <p class="m-0"><a href="">Forgot Password</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
              <?php echo form_submit(['name'=>'mysubmit','value'=>'LOGIN','class'=>'w-100 btn btn-danger']); ?>

                <!-- <button class="w-100 btn btn-danger">LOGIN</button> -->

            </div>
            <div class="col-md-12 mt-4">
              <?php
                  if(isset($login_button)){
                       echo '<div align="center">'.$login_button . '</div>';
                  }
              ?>
            </div>
            <div class="col-md-12 mt-5 hr-line-center">
                <p class="m-auto"><span>Or</span></p>
            </div>
            <div class="col-md-12 mt-5">
                <a href="<?php echo base_url('register'); ?>"> <button class="w-100 btn btn-signup">SIGN UP</button></a>
            </div>
        </div>
        <?php echo form_close(); ?>

    </div>

</body>

<?php include('footer.php'); ?>

</html>
