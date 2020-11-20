<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<!-- <head> -->
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Document</title> -->
    <!-- <link rel="stylesheet" href="stylesheet/style.css"> -->

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<!-- </head> -->
<?php include('header.php'); ?>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                <p class="font-weight-bold">CONTACT US</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row contact-row">
            <div class="col-md-6 p-5 contact-inputs">
                <p>Get In Touch With Us</p>
                <input type="text" class="form-control" placeholder="YOUR NAME*" name="name">

                <br>

                <input type="text" class="form-control" placeholder="YOUR EMAIL ADDRESS*" name="email">

                <br>

                <input type="text" class="form-control" placeholder="PHONE NUMBER" name="phone">

                <br>

                <textarea class="form-control" rows="4" placeholder="YOUR MESSAGE"></textarea>

                <br>

                <button class="btn btn-info pink w-100">SEND MESSAGE NOW</button>
            </div>
            <div class="col-md-6 text-center text-sm-center text-md-left text-lg-left text-xl-left p-5 contact-info">
                <p>Our Contact Info</p>
                <p><img src="<?php echo base_url() ?>assets/images/phoneBlack.png" width="15" alt=""> <span>Thane, Mumbai, India</span></p>

                <br>

                <p><img src="<?php echo base_url() ?>assets/images/phoneBlack.png" width="15" alt=""> <span>Support@yourdomain.com</span></p>

                <br>

                <p><img src="<?php echo base_url() ?>assets/images/phoneBlack.png" width="15" alt=""> <span>+(00) 852 852 9633</span></p>

                <br>

                <div>
                    <img src="<?php echo base_url() ?>assets/images/cellphone.png" width="40" class="pr-2" alt="">
                    <img src="<?php echo base_url() ?>assets/images/cellphone.png" width="40" class="pr-2" alt="">
                    <img src="<?php echo base_url() ?>assets/images/cellphone.png" width="40" class="pr-2" alt="">
                </div>
            </div>
        </div>
    </div>

</body>
<?php include('footer.php'); ?>

</html>
