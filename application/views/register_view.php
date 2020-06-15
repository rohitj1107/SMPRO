
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<!-- <head> -->
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Document</title> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/style.css"> -->

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<!-- </head> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheet/style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />

<script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>

<!-- <body> -->
<?php //include('header.php'); ?>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">CUSTOMER REGISTRATION</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 registration">
        <div class="row">
          <?php echo form_open('Home/register_create');
              // echo form_open('cap');
          ?>
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

            <div class="col-md-12">

              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('errors'); ?>

                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('email_error')) { ?>
                <div class="text-white bg-danger text-center">

                  <?php echo $this->session->flashdata('email_error'); ?>

                </div>
              <?php } ?>

                <p class="font-weight-bold m-0">Lorem Ipsum</p>
            </div>
            <?php echo validation_errors(); ?>
            <div class="col-md-6 pt-4">
              <label for="">Company Name</label>

                <?php $name_data = [
                  'name' => 'companyName',
                  'value' => set_value('companyName'),
                  'placeholder' => 'Company Name *',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Company Name" name="companyName"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Website Url</label>

                <?php $name_data = [
                  'name' => 'websiteUrl',
                  'value' => set_value('websiteUrl'),
                  'placeholder' => 'Website URL',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Website URL" name="websiteUrl"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Country</label>

                <?php //$name_data = [
                  // 'name' => 'country',
                  // 'value' => set_value('country'),
                  // 'placeholder' => 'Country',
                  // 'class' => 'form-control'
                // ]; ?>

                <?php //echo form_input($name_data); ?>
                <select class="selectpicker countrypicker form-control" name="country" data-flag="true" ></select>

                <!-- <select class="form-control" name="country">
                  <option value="Not Select">Select Country</option>

                  <?php foreach ($countries as $value) { ?>

                    <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>

                  <?php } ?>
                </select> -->

                <!-- <input type="text" class="form-control" id="email" placeholder="Country" name="country"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Postal Code</label>

                <?php $name_data = [
                  'name' => 'postalCode',
                  'value' => set_value('postalCode'),
                  'placeholder' => 'Postal Code',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Postal Code" name="postalCode"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Company Type</label>

                <?php $name_data = [
                  'name' => 'companyType',
                  'value' => set_value('companyType'),
                  'placeholder' => 'Company Type',
                  'class' => 'form-control'
                ]; ?>
                <select class="form-control" name="companyType">
                    <option value="0">Select Company Type</option>
                    <option value="PVT LTD">PVT LTD</option>
                    <option value="Prop">Prop</option>
                    <option value="LLP">LLP</option>
                    <option value="LTD">LTD</option>
                </select>
                <?php //echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Company Type" name="companyType"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">EOU</label>

                <?php $name_data = [
                  'name' => 'eou',
                  'value' => set_value('eou'),
                  'placeholder' => 'EOU / SEZ / General',
                  'class' => 'form-control'
                ]; ?>

                <select class="form-control" name="eou">
                    <option value="0">Select EOU</option>
                    <option value="EOU">EOU</option>
                    <option value="SEZ">SEZ</option>
                    <option value="General">General</option>
                </select>
                <?php //echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="EOU / SEZ / General" name="eou"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Email ID</label>

              <?php echo form_error('emailId'); ?>
                <?php $name_data = [
                  'name' => 'emailId',
                  'value' => set_value('emailId'),
                  'placeholder' => 'Official Contact Email ID *',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Official Contact Email ID" name="emailId"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Password</label>

              <?php echo form_error('password'); ?>
                <?php $name_data = [
                  'name' => 'password',
                  'type' => 'password',
                  'value' => set_value('password'),
                  'placeholder' => 'Type Password *',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Contact Number</label>

                <?php $name_data = [
                  'name' => 'contactNumber',
                  'value' => set_value('contactNumber'),
                  'placeholder' => 'Contact Number',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Contact Number</label>

                <?php $name_data = [
                  'name' => 'contactNumber_one',
                  'value' => set_value('contactNumber_one'),
                  'placeholder' => 'Contact Number',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Mobile Number</label>

                <?php $name_data = [
                  'name' => 'mobileNumber',
                  'value' => set_value('mobileNumber'),
                  'placeholder' => '+1 Mobile Number',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="+1 Mobile Number" name="mobileNumber"> -->
            </div>

            <div class="col-md-6 pt-4">

            </div>

            <div class="col-md-6 pt-4">
              <label for="">GST</label>

                <?php $name_data = [
                  'name' => 'gst',
                  'value' => set_value('gst'),
                  'placeholder' => 'Company GST / VAT Number',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Company GST / VAT Number" name="gst"> -->
            </div>

            <div class="col-md-6 pt-4">
              <label for="">Industry</label>

                <?php $name_data = [
                  'name' => 'industry',
                  'value' => set_value('industry'),
                  'placeholder' => 'Industry',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Industry" name="industry"> -->
            </div>

            <div class="col-md-12 pt-4">
              <label for="">Remarks</label>

                <?php $name_data = [
                  'name' => 'comment',
                  'value' => set_value('comment'),
                  'placeholder' => 'Remarks / Additional Info',
                  'class' => 'form-control',
                  'rows' => '3'
                ]; ?>

                <?php echo form_textarea($name_data); ?>
                <!-- <textarea class="form-control" rows="3" placeholder="Remarks / Additional Info" id="comment"></textarea> -->
            </div>

            <!-- <div class="col-md-3 grid-captcha mt-4">
                <div class="form-check captcha-checkbox">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">
                    I'm not a robot
                    </label>
                </div>
                <div class="logo">
                    <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/" width="30" />
                    <p>reCAPTCHA</p>
                    <small>Privacy - Terms</small>
                </div>
            </div> -->
            <div class="col-md-3 mt-4">
              <?php //echo $capcha['widget'];?>
              <?php //echo $capcha['script'];?>
              <script src='https://www.google.com/recaptcha/api.js'></script>
              <div class="g-recaptcha" data-sitekey="6Lf8J6MZAAAAAFHT5nnm8mO57laBx7nHxIGDBkj-"></div>
            </div>

            <div class="col-md-12 mt-4 termsConditions">
                <label class="form-check-label">
                    <input type="checkbox" name="termsConditions" class="form-check-input" value="1">I Agree To The <b>Terms And Conditions</b>
                </label>
            </div>

            <div class="col-md-6 mt-4">
              <?php echo form_submit(['name'=>'mysubmit','value'=>'SUBMIT','class'=>'w-100 btn btn-danger']); ?>
              <?php echo form_close(); ?>
            </div>

        </div>
    </div>

</body>
<?php include('footer.php'); ?>
<script>
    $('.countrypicker').countrypicker();
</script>
</html>
