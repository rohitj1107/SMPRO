
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPRO</title>
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
