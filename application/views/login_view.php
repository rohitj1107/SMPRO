<?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">LOGIN</p>
            </div>
        </div>
    </div>


    <div class="container w-50 mt-5">
        <div class="row login-grid">
            <div class="col-md-12 mt-4">
              <?php echo form_open('Home/login_check','id="myform"') ?>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('errors'); ?>

                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('otp_success')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('otp_success'); ?>

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
                    <div class="recaptcha-48 d-flex justify-content-between">
                        <div class="form-check captcha-checkbox">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I'm not a robot
                            </label>
                        </div>
                        <div class="logo text-center">
                            <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/" width="30" />
                            <p class="m-0 pt-2">reCAPTCHA</p>
                            <small>Privacy - Terms</small>
                        </div>
                    </div>
                    <div class="col-md-6 align-self">
                        <p class="m-0"><a href="">Forgot Password</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
              <?php echo form_submit(['name'=>'mysubmit','value'=>'LOGIN','class'=>'w-100 btn btn-danger']); ?>
              <?php echo form_close(); ?>

                <!-- <button class="w-100 btn btn-danger">LOGIN</button> -->

            </div>
            <div class="col-md-12 mt-5 hr-line-center">
                <p class="m-auto"><span>Or</span></p>
            </div>
            <div class="col-md-12 mt-5">
                <a href="<?php echo base_url('register'); ?>"> <button class="w-100 btn btn-signup">SIGN UP</button></a>
            </div>
        </div>
    </div>

</body>

<?php include('footer.php'); ?>

</html>
