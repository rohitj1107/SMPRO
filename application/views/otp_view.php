
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
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">OTP</p>
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

              <?php echo form_open('Home/check_otp'); ?>
                <p class="font-weight-bold m-0">Type OTP</p>
            </div>
            <?php echo validation_errors(); ?>

            <div class="col-md-6 pt-4">
                <?php $name_data = [
                  'name' => 'otp',
                  'placeholder' => 'Type OTP',
                  'class' => 'form-control',
                ]; ?>

                <?php echo form_input($name_data); ?>
                <!-- <textarea class="form-control" rows="3" placeholder="Remarks / Additional Info" id="comment"></textarea> -->
            </div>

            <!-- <div class="col-md-6 pt-4"> -->
                <?php //echo $segment; ?>
                <?php echo form_hidden('emailId',$segment); ?>
                <!-- <textarea class="form-control" rows="3" placeholder="Remarks / Additional Info" id="comment"></textarea> -->
            <!-- </div> -->

            <div class="col-md-6 mt-4">
              <?php echo form_submit(['name'=>'mysubmit','value'=>'SUBMIT','class'=>'w-100 btn btn-danger']); ?>
              <?php echo form_close(); ?>
            </div>

        </div>
    </div>

</body>
<?php include('footer.php'); ?>

</html>
