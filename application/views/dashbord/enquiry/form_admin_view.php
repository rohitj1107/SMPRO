<?php if($this->session->userdata('logged_in')){ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SMPRO - Welcome <?php echo $user->u_companyName; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.ico">

        <!-- Plugins css -->
        <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url(); ?>assets/admin/libs/multiselect/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">



                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <!-- <img src="<?php //echo base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-image" class="rounded-circle"> -->
                          <span class="pro-user-name ml-1">
                              <?php echo $this->session->userdata('emailId'); ?> <i class="mdi mdi-chevron-down"></i>
                          </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="fe-user"></i>
                              <span>My Account</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a href="<?php echo base_url('logout'); ?>" class="dropdown-item notify-item">
                              <i class="fe-log-out"></i>
                              <?php
                                // echo form_open('Home/logout');
                                if ($this->session->userdata('logged_in')) {
                                //    echo $this->session->userdata('emailId');
                              //     echo $this->session->userdata('actionId');
                                }
                                // $data = array('class' => 'btn btn-primary','name'=>'submit','value'=>'logout' );
                                // echo form_submit($data);
                                // echo form_close(); ?>
                              <span>Logout</span>
                          </a>

                      </div>
                  </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main">Dashboard</h4>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="<?php echo base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                        <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"><?php echo $user->u_companyName;  ?></a>
                        </div>
                        <p class="text-muted"><?php //echo $this->session->userdata('companyName'); ?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="<?php echo base_url('Dashbord'); ?>">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('Dashbord'); ?>">
                                    <i class="mdi mdi-format-font"></i>
                                    <span> Employee </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('user_list'); ?>">
                                    <i class="mdi mdi-invert-colors"></i>
                                    <span> User List </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-texture"></i>
                                    <span> Enquiry </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('enquiry_show_admin'); ?>"> Enquiry List </a></li>
                                    <li><a href="<?php echo base_url('enquiry_form_admin'); ?>"> Enquiry Form </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-texture"></i>
                                    <span> Quotation </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('quotation_show'); ?>"> quotation List </a></li>
                                    <li><a href="<?php echo base_url('quotation_form'); ?>"> quotation Form </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-texture"></i>
                                    <span> PO </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('po_show'); ?>"> PO List </a></li>
                                    <li><a href="<?php echo base_url('po_form'); ?>"> PO Form </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-texture"></i>
                                    <span> Supplier </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('supplier_show_admin'); ?>"> Supplier List </a></li>
                                    <li><a href="<?php echo base_url('supplier_form_admin'); ?>"> Supplier Form </a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
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
                                                <div class="col-md-12 pt-4">
                                                    <?php if ($this->session->flashdata('enquiry_success')) { ?>
                                                      <div class="alert alert-success alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('enquiry_success'); ?>
                                                    </div>
                                                    <?php } ?>

                                                    <?php if ($this->session->flashdata('enquiry_faile')) { ?>
                                                      <div class="alert alert-danger alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('enquiry_faile'); ?>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <?php echo form_open_multipart('do_upload_admin');?>
                                                    <label for="customerId">CUSTOMER ID</label>
                                                    <select name="customerId" class="form-control select2">
                                                            <option>Select Customer ID</option>
                                                            <?php foreach($customerID as $customer){ ?>
                                                              <?php if ($customer->u_emailId == $this->session->userdata('emailId')): ?>
                                                              <?php else :?>
                                                                <option value="<?php echo $customer->u_customerId.' '.$customer->u_emailId; ?>"><?php echo $customer->u_customerId.' '.$customer->u_emailId; ?></option>
                                                              <?php endif; ?>
                                                          <?php }?>
                                                    </select>
                                                    <!-- <input type="text" readonly class="form-control" value="<?php echo $user->u_customerId; ?>" name="customerId"> -->
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                    <input type="text" class="form-control" placeholder="Application" name="application">
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                    <textarea class="form-control" rows="3" name="machine_model" placeholder="Machine Model / Specs"></textarea>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <input type="text" class="form-control" name="machine_make" placeholder="Machine Make">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <input type="text" class="form-control" name="required_qty" placeholder="Required Qty">
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                    <textarea class="form-control" rows="4" name="required_description" placeholder="Required Description"></textarea>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="file" class="form-control" multiple name="Photo_Of_The_Parts[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="file" class="form-control" multiple name="Drawing_Of_The_Parts[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                    <textarea class="form-control" rows="3" name="special_remarks" placeholder="Special Remarks"></textarea>
                                                </div>

                                                <div class="col-md-6 mt-4">
                                                    <button class="w-100 btn btn-danger">
                                                        SUBMIT
                                                    </button>
                                                </div>
                                                <?php echo "</form>"?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h4 class="m-0 text-white">Settings</h4>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="<?php echo base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>

                    <h5><a href="javascript: void(0);">Nowak Helme</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/vendor.min.js"></script>

        <!-- Plugins Js -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/multiselect/jquery.multi-select.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-quicksearch/jquery.quicksearch.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/libs/select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <!-- Init js-->
        <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-advanced.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>

    </body>
</html>
<?php } else { ?>

  <?php $this->load->view('Home_view'); ?>

<?php } ?>
