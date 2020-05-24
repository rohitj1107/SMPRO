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

<!-- <body> -->
<?php include('header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
            <p class="font-weight-bold">Enquiry</p>
        </div>
    </div>
</div>

<div class="enquiry-custom-div">
    <div class="container-fluid enquiry">
        <div class="row">
            <div class="col-md-6 pt-4">
                <input type="text" class="form-control" placeholder="Customer ID: 123213786" name="customerId">
            </div>
            <div class="col-md-12 pt-4">
                <input type="text" class="form-control" placeholder="Application" name="application">
            </div>
            <div class="col-md-12 pt-4">
                <textarea class="form-control" rows="3" placeholder="Machine Model / Specs"></textarea>
            </div>
            <div class="col-md-6 pt-4">
                <input type="text" class="form-control" placeholder="Machine Make" name="machineMake">
            </div>
            <div class="col-md-6 pt-4">
                <input type="text" class="form-control" placeholder="Required Qty" name="requiredQty">
            </div>
            <div class="col-md-12 pt-4">
                <textarea class="form-control" rows="4" placeholder="Required Description"></textarea>
            </div>
            <div class="col-md-6 pt-4">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Photo Of The Parts" name="requiredQty">
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info w-100">Browse</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-4">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Drawing Of The Parts" name="requiredQty">
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info w-100">Browse</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pt-4">
                <textarea class="form-control" rows="3" placeholder="Special Remarks"></textarea>
            </div>

            <div class="col-md-3 grid-captcha mt-4">
                <div class="form-check captcha-checkbox">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">I'm not a robot
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
                    <input type="checkbox" class="form-check-input" value="">I Agree To The <b>Terms And Conditions</b>
                </label>
            </div>

            <div class="col-md-6 mt-4">
                <button class="w-100 btn btn-danger">
                    SUBMIT
                </button>
            </div>

        </div>
    </div>
</div>

</body>

</html>
