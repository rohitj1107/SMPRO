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

                  <div class="modal" id="myModalshow<?php echo $q_select->q_quote_number;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="row">
                          <div class="col-md-12">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title"><?php echo $q_select->q_quote_number; ?></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form method="post" action="<?php echo base_url('follow_up'); ?>">
                            <!-- Modal body -->
                            <div class="col-md-12 scrollbar scrollbar-primary" style="height: 420px; overflow-y: scroll;">
                                <div class="card-box task-detail">
                                  <div class="row">
                                    <?php if ($follow_up) { ?>
                                    <?php foreach($follow_up as $follow_up_ob):
                                      if ($q_select->q_quote_number == $follow_up_ob->f_quote_number) { ?>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Status</label>
                                          <p><?php echo $follow_up_ob->f_status; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Comment</label>
                                          <p><?php echo $follow_up_ob->f_comment; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Follow Up Date</label>
                                          <?php if (date('m/d/yy') > $follow_up_ob->f_select_date) { ?>
                                            <p class="text-danger"><?php echo $follow_up_ob->f_select_date; ?></p>

                                          <?php } else { ?>
                                            <p class="text-success"><?php echo $follow_up_ob->f_select_date; ?></p>

                                          <?php }?>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Created Date</label>
                                          <p><?php echo $follow_up_ob->f_c_date; ?></p>
                                      </div>
                                    </div>
                                    <div class="bg-primary col-12">
                                        <hr>
                                    </div>
                                  <?php
                                }
                                 endforeach; ?>
                                <?php } else { ?>
                                    <p class="text-warning">Comment Is Not Created</p>
                                <?php } ?>
                                  </div>
                                </div>
                            </div><!-- end col -->
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                      </div>
                    </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal" id="myModal<?php echo $q_select->q_quote_number;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="row">
                          <div class="col-md-12">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title"><?php echo $q_select->q_quote_number; ?></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form method="post" action="<?php echo base_url('follow_up'); ?>">
                              <input type="hidden" name="customerId" value="<?php echo $view_enquiry->e_customerID; ?>">
                              <input type="hidden" name="enquiry_ID" value="<?php echo $view_enquiry->e_enquiryId; ?>">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              <input type="hidden" name="quote_number" value="<?php echo $q_select->q_quote_number; ?>">
                            <!-- Modal body -->
                            <div class="modal-body">
                                <label for="">Select Status</label>
                                  <select class="form-control select1" name="status">
                                      <option value="select"> Select </option>
                                      <option value="open"> open </option>
                                      <option value="close"> close </option>
                                  </select>
                                  <p></p>
                                  <label for="">Type Commit</label>
                                  <textarea name="comment" class="form-control" rows="8" cols="80"></textarea>
                                  <p></p>
                                  <label for="">Select Date</label>
                                  <input class="form-control" id="date" name="select_date" placeholder="MM/DD/YYY" type="text"/>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success" id="btn_save" name="button">Submit</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                      </div>
                    </div>

                      </div>
                    </div>
                  </div>
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                              <?php
                              if ($this->session->flashdata('follow_up_success')) { ?>
                                <p class="bg-success text-white">  <?php echo $this->session->flashdata('follow_up_success'); ?> </p>
                              <?php } ?>
                              <?php
                              if ($this->session->flashdata('follow_up_faild')) { ?>
                                <p class="bg-danger text-white">  <?php echo $this->session->flashdata('follow_up_faild'); ?> </p>
                              <?php } ?>
                                <div class="card-box task-detail">
                                    <h4>Quotation</h4>
                                    <p class="text-muted">
                                        <?php print_r($q_select->q_enquiry_status); ?>
                                    </p>
                                    <div class="row task-dates mb-0 mt-2">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Customer ID</h5>
                                            <p> <?php print_r($q_select->q_customer_ID); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Enquiry ID</h5>
                                            <p> <?php print_r($q_select->q_enquiry_ID); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Quotation ID</h5>
                                            <p> <?php print_r($q_select->q_quote_number); ?></p>
                                        </div>
                                    </div>

                                    <div class="row task-dates mb-0 mt-0">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Order Status</h5>
                                            <p> <?php print_r($q_select->q_order_status); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Market segment</h5>
                                            <p> <?php print_r($q_select->q_market_segment); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Date</h5>
                                            <p> <?php print_r($q_select->q_c_date); ?></p>
                                        </div>
                                    </div>

                                    <div class="row task-dates mb-0 mt-0">
                                        <div class="col-lg-4">
                                            <h5>Quotad Value</h5>
                                            <p><?php print_r($q_select->q_quote_number); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Scope Text</h5>
                                            <p><?php print_r($q_select->q_scope_text); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Load Time</h5>
                                            <p><?php print_r($q_select->q_load_time); ?></p>
                                    </div>
                                  </div>

                                  <div class="row mb-0 mt-0">
                                      <div class="col-lg-4">
                                          <h5 class="font-600 m-b-5">General Terms Gic Provided</h5>
                                          <p> <?php print_r($q_select->q_general_terms_gic_provided); ?></p>
                                      </div>

                                      <div class="col-lg-4">
                                          <h5 class="font-600 text-danger m-b-5">Expected Date</h5>
                                          <p> <?php print_r($q_select->q_order_expected_by); ?></p>
                                      </div>

                                      <div class="col-lg-4">
                                          <h5 class="font-600 m-b-5">Entry Date</h5>
                                          <p> <?php print_r($q_select->q_date_entry_by); ?></p>
                                      </div>
                                  </div>
                                  <div class="row mb-0 mt-0">

                                  <div class="col-lg-4">
                                      <h5 class="font-600 m-b-5">Created Date</h5>

                                      <p><?php echo $q_select->q_c_date; ?></p>
                                  </div>
                                  <div class="col-md-2">
                                        <label>Order Status</label>
                                        <p><?php //echo $q_value->q_order_status; ?>
                                          <a href="#" class="text-success" data-toggle="modal" data-target="#myModal<?php echo $q_select->q_quote_number;?>">
                                            <i class="mdi mdi-comment"> </i> </a>
                                          <a href="#" class="text-info" data-toggle="modal" data-target="#myModalshow<?php echo $q_select->q_quote_number;?>"> <i class="mdi mdi-check-circle"> </i> </a>
                                        </p>
                                  </div>
                                  </div>
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
