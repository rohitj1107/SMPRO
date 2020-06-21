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

    <link href="<?php echo base_url(); ?>assets/admin/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo base_url(); ?>assets/admin/libs/multiselect/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet"> -->
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
                            <?php if($this->session->userdata('actionId') ==3 ){ ?>
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
                                      <span> SO </span>
                                  </a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="<?php echo base_url('po_show'); ?>"> PO List </a></li>
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
                                                        <?php } else {?>
                            <li>
                                <a href="<?php echo base_url('Dashbord'); ?>">
                                    <i class="mdi mdi-texture"></i>
                                    <!-- <span class="badge badge-warning float-right">7</span> -->
                                    <span> Enquiry Forms </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('enquiry_show'); ?>">
                                    <i class="mdi mdi-texture"></i>
                                    <!-- <span class="badge badge-warning float-right">7</span> -->
                                     Show Forms
                                </a>
                            </li>
                          <?php  } ?>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box task-detail">
                                    <h4>Application</h4>
                                    <p class="text-muted">
                                        <?php print_r($view_enquiry->e_appliction); ?>
                                    </p>
                                    <div class="row task-dates mb-0 mt-2">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Customer ID</h5>
                                            <p> <?php print_r($view_enquiry->e_customerID); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Enquiry ID</h5>
                                            <p> <?php print_r($view_enquiry->e_enquiryId); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Date</h5>
                                            <p> <?php print_r($view_enquiry->e_date_time); ?></p>
                                        </div>
                                    </div>

                                    <div class="row task-dates mb-0 mt-0">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Machine Model</h5>
                                            <p> <?php print_r($view_enquiry->e_machine_model); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Required Qty</h5>
                                            <p> <?php print_r($view_enquiry->e_required_qty); ?></p>
                                        </div>
                                    </div>

                                    <div class="assign-team mt-2">
                                        <h5>Required Description</h5>
                                        <p><?php print_r($view_enquiry->e_required_description); ?></p>
                                    </div>

                                    <div class="assign-team mt-2">
                                        <h5>Machine Make</h5>
                                        <p><?php print_r($view_enquiry->e_machine_make); ?></p>
                                    </div>

                                    <div class="assign-team mt-2">
                                        <h5>Special Remarks</h5>
                                        <p><?php print_r($view_enquiry->e_special_remarks); ?></p>
                                    </div>

                                    <div class="row task-dates mb-0 mt-2">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Photo Of The Parts</h5>
                                            <?php if ($view_enquiry->e_photo_of_the_parts_name): ?>
                                              <?php
                                                  $name1 = (explode(' | ',$view_enquiry->e_photo_of_the_parts_name));
                                                  for ($i=0; $i < count($name1); $i++) { ?>
                                                    <a href="<?php echo base_url('uploads/').$name1[$i]; ?>" download><img src="<?php echo base_url('uploads/').$name1[$i]; ?> " alt="W3Schools" width="20" height="20">Download File</a><br>
                                                  <?php } ?>

                                            <?php else: ?>
                                              <p>File Not Upload</p>
                                            <?php endif;?>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Drawing Of The Parts</h5>
                                            <?php if ($view_enquiry->e_drawing_of_the_parts_name): ?>
                                              <?php
                                                  $name = (explode(' | ',$view_enquiry->e_drawing_of_the_parts_name));
                                                  for ($i=0; $i < count($name); $i++) { ?>
                                                    <a href="<?php echo base_url('uploads/').$name[$i]; ?>" download><img src="<?php echo base_url('uploads/').$name[$i]; ?>" alt="W3Schools" width="20" height="20">Download File</a><br>
                                                  <?php } ?>

                                            <?php else: ?>
                                              <p>File Not Upload</p>
                                            <?php endif;?>
                                        </div>
                                    </div>


                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="card-box task-detail">
                                  <h4> Quotation </h4>

                                <?php if ($this->session->flashdata('quotation_seccess')) { ?>
                                    <div class="bg-success"><?php echo $this->session->flashdata('quotation_seccess'); ?></div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('quotation_failed')) { ?>
                                    <div class="bg-danger"><?php echo $this->session->flashdata('quotation_failed'); ?></div>
                                <?php } ?>
                                <?php echo form_open('insert_quotation'); ?>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Enquiry Status</label>
                                          <select class="form-control select" name="enquiry_status">
                                              <option value="">Select</option>
                                              <option value="info">Info</option>
                                              <option value="success">success</option>
                                              <option value="danger">danger</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Registration</label>
                                          <input type="text" class="form-control" name="registration" >
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Under process</label>
                                          <select class="form-control select" name="under_process">
                                              <option value="">Select</option>
                                              <option value="evaluation">Evaluation</option>
                                              <option value="further_info_required">Further info required</option>
                                              <option value="quotation_submitted">Quotation submitted</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Order Statu</label>
                                          <p>
                                            <select class="form-control select" name="order_status">
                                                <option value="">Select</option>
                                                <option value="open">Open</option>
                                                <option value="received">Received</option>
                                            </select>
                                          </p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Customer ID</label>
                                          <p><?php echo $view_enquiry->e_customerID; ?></p>
                                          <input type="hidden" name="customer_ID" value="<?php echo $view_enquiry->e_customerID; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Enquiry ID</label>
                                          <p><?php echo $view_enquiry->e_enquiryId; ?></p>
                                          <input type="hidden" name="enquiry_ID" value="<?php echo $view_enquiry->e_enquiryId; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Market Segment</label>
                                          <input type="text" class="form-control" name="market_segment" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Date</label>
                                          <p><?php echo $view_enquiry->e_date_time; ?></p>
                                          <input type="hidden" name="date" value="<?php echo $view_enquiry->e_date_time; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Quote Number</label>
                                          <p><?php echo 'QU-'.time(); ?></p>
                                          <input type="hidden" class="form-control" name="quote_number" value="<?php echo 'QU-'.time(); ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Quoted Value</label>
                                          <input type="text" class="form-control" name="quoted_value" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Scope Text</label>
                                          <input type="text" class="form-control" name="scope_text" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Into terms</label>
                                          <input type="text" class="form-control" name="into_terms" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Load time</label>
                                          <input id="demo3_22" type="text" placeholder="load_time" class="form-group" name="demo3_22">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Payment terms</label>
                                          <select class="form-control select" name="payment_terms">
                                              <option value="">Select Metho</option>
                                              <option value="online">Online</option>
                                              <option value="off_line">Off Line</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>General terms GIC provided</label>
                                          <input type="text" class="form-control" name="general_terms_gic_provided" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Order expected by</label>
                                          <input type="text" name="order_expected_by" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Date entry by</label>
                                          <input type="text" name="date_entry_by" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                      </div>
                                    </div>
                                    <input type="hidden" name="emailId" value="<?php echo $this->session->userdata('emailId'); ?>">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Submit</button>
                                    </div>

                                  </div>
                                  <?php echo form_close(); ?>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->

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
        <!-- <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/multiselect/jquery.multi-select.js"></script>
        <!-- <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-quicksearch/jquery.quicksearch.min.js"></script> -->

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

        <!-- Toastr js -->
        <!-- <script src="<?php echo base_url(); ?>assets/admin/libs/toastr/toastr.min.js"></script> -->

        <script src="<?php echo base_url(); ?>assets/admin/js/pages/toastr.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>

        <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->

<script>
    $(document).ready(function(){
        var date_input=$('input[name="select_date"]'); //our date input has the name "date"
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

  <?php return redirect(); ?>

<?php } ?>
