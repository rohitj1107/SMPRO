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
                            <li>
                                <a href="<?php echo base_url('user_history'); ?>">
                                    <i class="mdi mdi-invert-colors"></i>
                                    <span> User History </span>
                                </a>
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
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="enquiry-custom-div">
                                        <div class="container-fluid enquiry">
                                            <div class="row">
                                                <div class="col-md-12 pt-4">
                                                    <?php if ($this->session->flashdata('so_success')) { ?>
                                                      <div class="alert alert-success alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('so_success'); ?>
                                                    </div>
                                                    <?php } ?>
                                                    <?php if ($this->session->flashdata('so_faile')) { ?>
                                                      <div class="alert alert-danger alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('so_faile'); ?>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                  <?php echo form_open_multipart('so_create/'.base64_encode($po_select->po_po_number));?>
                                                    <label for="customerId">Supplier ID</label>
                                                    <select name="supplierID" class="form-control select2">
                                                            <option>Select Supplier ID</option>
                                                            <?php foreach($supplierID as $supplier){ ?>
                                                              <?php if ($supplier->s_contact_email_id == $this->session->userdata('emailId')): ?>
                                                              <?php else :?>
                                                                <option value="<?php echo $supplier->s_supplier_id; ?>"><?php echo $supplier->s_company_name.' '.$supplier->s_supplier_id.' '.$supplier->s_contact_email_id; ?></option>
                                                              <?php endif; ?>
                                                          <?php }?>
                                                    </select>
                                                    <!-- <input type="text" readonly class="form-control" value="<?php echo $user->u_customerId; ?>" name="customerId"> -->
                                                </div>
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->po_quote_number; ?>" name="quote_number">
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->po_enquiry_ID; ?>" name="enquiry_ID">
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->po_customer_ID; ?>" name="customer_ID">
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->po_po_number; ?>" name="po_number">
                                                <div class="col-md-4 pt-4">
                                                  <label for="">SO Number</label>
                                                  <p><?php echo 'SO-'.time(); ?></p>
                                                  <input type="hidden" class="form-control" value="<?php echo 'SO-'.time(); ?>" name="so_number">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">Class</label>
                                                    <select class="form-control" name="Class">
                                                        <option value="0">Select Class</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Category</label>
                                                  <select class="form-control" name="so_number">
                                                      <option value="0">Select Category</option>
                                                      <option value="Sales Parts">Sales Parts</option>
                                                      <option value="Sales Service">Sales Service</option>
                                                      <option value="FOC Parts">FOC Parts</option>
                                                      <option value="FOC Service">FOC Service</option>
                                                      <option value="Solu'on Sales">Solu'on Sales</option>
                                                      <option value="Trading">Trading</option>
                                                      <option value="Consumables">Consumables</option>
                                                  </select>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Market</label>
                                                  <input type="text" name="po_c_date" class="form-control" placeholder="Market">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">value</label>
                                                    <input type="text" class="form-control" placeholder="value" name="value">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">into term</label>
                                                    <input type="text" class="form-control" placeholder="into term" name="into_term">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">Delivery me</label>
                                                    <input type="text" class="form-control" placeholder="Delivery me" name="delivery_me">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for=""> Payment terms </label>
                                                    <input type="text" class="form-control" placeholder="Payment terms" name="payment_terms">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for=""> Status </label>
                                                    <input type="text" name="status" class="form-control" placeholder="Status">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">PO Anachment</label>
                                                    <input type="file" name="po_anachment[]" multiple>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Quote anachment</label>
                                                    <input type="file" name="quote_anachment[]" multiple>
                                                </div>
                                                <div class="col-md-4 pt-4">
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
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="enquiry-custom-div">
                                        <div class="container-fluid enquiry">
                                            <div class="row">
                                                <div class="col-md-4 pt-4">
                                                    <label for="customerId">PO Number</label>
                                                    <p><?php echo $po_select->po_po_number; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Customer ID</label>
                                                  <p><?php echo $po_select->po_customer_ID; ?></p>

                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Enquiry ID</label>
                                                  <p><?php echo $po_select->po_enquiry_ID; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Quote Number</label>
                                                  <p><?php echo $po_select->po_quote_number; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">PO Date</label>
                                                  <p><?php echo $po_select->po_date; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Market Segment</label>
                                                  <p><?php echo $po_select->po_market_segment; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Scope Text</label>
                                                  <p><?php echo $po_select->po_scope_text; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">LC Applicabl</label>
                                                  <p><?php echo $po_select->po_lc_applicabl; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Into Terms</label>
                                                  <p><?php echo $po_select->po_into_terms; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Load Time ID</label>
                                                  <p><?php echo $po_select->po_load_time; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Payment</label>
                                                  <p><?php echo $po_select->po_payment; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">expiry date of LC</label>
                                                  <p><?php echo $po_select->po_expiry_date_of_lc; ?></p>
                                                </div>
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
        <script>
            $(document).ready(function(){
                var date_input=$('input[id="select_date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
    </body>
</html>
<?php } else { ?>

  <?php $this->load->view('Home_view'); ?>

<?php } ?>
