
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

<!-- <body> -->
<?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">CUSTOMER REGISTRATION</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 registration">
        <div class="row">
            <div class="col-md-12">

              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="p-3 mb-2 bg-danger text-dark">
                  <?php echo $this->session->flashdata('errors'); ?>
                </div>
              <?php } ?>

              <?php echo form_open('Home/register_create'); ?>
                <p class="font-weight-bold m-0">Lorem Ipsum</p>
            </div>
            <?php echo validation_errors(); ?>

            <div class="col-md-6 pt-4">

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
                <?php //$name_data = [
                  // 'name' => 'country',
                  // 'value' => set_value('country'),
                  // 'placeholder' => 'Country',
                  // 'class' => 'form-control'
                // ]; ?>

                <?php //echo form_input($name_data); ?>

                <select class="form-control" name="country">
                  <option value="">Select Country</option>

                  <?php foreach ($countries as $value) { ?>

                    <option value=""><?php echo $value->country_name ?></option>

                  <?php } ?>
                </select>

                <!-- <input type="text" class="form-control" id="email" placeholder="Country" name="country"> -->
            </div>

            <div class="col-md-6 pt-4">
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
                <?php $name_data = [
                  'name' => 'companyType',
                  'value' => set_value('companyType'),
                  'placeholder' => 'Company Type',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="Company Type" name="companyType"> -->
            </div>

            <div class="col-md-6 pt-4">
                <?php $name_data = [
                  'name' => 'eou',
                  'value' => set_value('eou'),
                  'placeholder' => 'EOU / SEZ / General',
                  'class' => 'form-control'
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <input type="text" class="form-control" id="email" placeholder="EOU / SEZ / General" name="eou"> -->
            </div>

            <div class="col-md-6 pt-4">
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

            </div>

            <div class="col-md-6 pt-4">
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

            <div class="col-md-3 grid-captcha mt-4">
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

</html>
