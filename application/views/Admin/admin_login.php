<?php //include('header.php');
  // echo $this->data;
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/style.css">

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 </head>

 <body>

 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12 nav-grid">
             <div class="company-logo">
                 <img src="<?php echo base_url(); ?>assets/images/logo.png" width="150" class="img-fluid" alt="">
             </div>
             <div class="menu">
                 <a href="<?php echo base_url('Home'); ?>">Home</a>
                 <a href="<?php echo base_url('about'); ?>">About Us</a>
                 <a href="<?php echo base_url('products'); ?>">Product & Services</a>
                 <a href="#">Partners</a>
                 <a href="">Contact Us</a>
             </div>
             <div class="login">
                 <a href="<?php echo base_url('login'); ?>"> <button>LOGIN</button> </a>
                 <a href="<?php echo base_url('register'); ?>"> <button>REGISTER</button> </a>
             </div>
         </div>
     </div>
 </div>

 <!-- </body> -->

 <!-- </html> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">Admin LOGIN</p>
            </div>
        </div>
    </div>
<?php //echo md5('Admin'); ?>
    <?php echo form_open('admin_login','id="myform"') ?>

    <div class="container w-50 mt-5">
        <div class="row login-grid">
            <div class="col-md-12 mt-4">
              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('errors'); ?>

                </div>
              <?php } ?>

                <p class="m-0 font-weight-bold">Lorem ipsum</p>
            </div>

            <div class="col-md-12 mt-4">
              <?php echo form_error('name'); ?>
                <?php $name_data = [
                  'name' => 'name',
                  'value' => set_value('name'),
                  'placeholder' => 'Admin ID ',
                  'class'=>'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>

                <!-- <input type="text" class="form-control" id="email" placeholder="CUSTOMER ID / Registered Email" name="customerId"> -->
            </div>
            <div class="col-md-12 mt-4">

              <?php echo form_error('password'); ?>
                <?php $password_data = [
                  'name' => 'password',
                  'value' => '',
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
<?php //include('/footer.php'); ?>

</html>
