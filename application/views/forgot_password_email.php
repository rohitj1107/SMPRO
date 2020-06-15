<?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">LOGIN</p>
            </div>
        </div>
    </div>


    <div class="container w-50 mt-5">
      <?php echo form_open('new_password_type','id="myform"'); ?>

        <div class="row login-grid">

            <div class="col-md-12 mt-4">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('errors'); ?>

                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('password_success')) { ?>
                <div class="text-white bg-success text-center">

                  <?php echo $this->session->flashdata('password_success'); ?>

                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('password_faild')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('password_faild'); ?>

                </div>
              <?php } ?>
                <p class="m-0 font-weight-bold">Type New Password <?php echo $email; ?></p>
            </div>
            <input type="hidden" name="email" value="<?php echo $email; ?>">

            <div class="col-md-12 mt-4">
              <?php echo form_error('password'); ?>
                <?php $name_data = [
                  'name' => 'password',
                  'value' => set_value('password'),
                  'type' => 'password',
                  'placeholder' => 'Password',
                  'class'=>'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>

                <!-- <input type="text" class="form-control" id="email" placeholder="CUSTOMER ID / Registered Email" name="customerId"> -->
            </div>
            <div class="col-md-12 mt-4">
              <?php echo form_error('re_password'); ?>
                <?php $name_data = [
                  'name' => 're_password',
                  'value' => set_value('re_password'),
                  'type' => 'password',
                  'placeholder' => 'Retype-Password',
                  'class'=>'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>

                <!-- <input type="text" class="form-control" id="email" placeholder="CUSTOMER ID / Registered Email" name="customerId"> -->
            </div>

            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                      <script src='https://www.google.com/recaptcha/api.js'></script>
                      <div class="g-recaptcha" data-sitekey="6Lf8J6MZAAAAAFHT5nnm8mO57laBx7nHxIGDBkj-"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
              <?php echo form_submit(['name'=>'mysubmit','value'=>'Submit','class'=>'w-100 btn btn-danger']); ?>

                <!-- <button class="w-100 btn btn-danger">LOGIN</button> -->

            </div>
          </div>
        <?php echo form_close(); ?>

    </div>

</body>

<?php include('footer.php'); ?>

</html>
