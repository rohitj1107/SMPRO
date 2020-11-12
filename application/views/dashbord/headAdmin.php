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

          <!--Morris Chart-->
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/libs/morris-js/morris.css" />

          <!-- App css -->
          <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" />

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
                              <a href="<?php echo base_url('my_account'); ?>" class="dropdown-item notify-item">
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
                      <a href="<?php echo base_url('Dashbord'); ?>" class="logo text-center">
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
                          <h4 class="page-title-main">Dashboard <?php //echo $user->u_action ;?></h4>
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
                              <?php if($user->u_action == 3 ){ ?>
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
                                  </ul>
                              </li>

                              <li>
                                  <a href="javascript: void(0);">
                                      <i class="mdi mdi-texture"></i>
                                      <span> SO </span>
                                  </a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="<?php echo base_url('po_show'); ?>"> SO List </a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript: void(0);">
                                      <i class="mdi mdi-texture"></i>
                                      <span> PO </span>
                                  </a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="<?php echo base_url('pof_show'); ?>"> PO List </a></li>
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
                            <?php } elseif($user->u_action == 1 ){ ?>
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
                                      <span> Show Forms </span>
                                  </a>
                              </li>
                            <?php  } elseif($user->u_action == 0 ) { ?>

                            <?php } else {
                              // code...
                            } ?>
                          </ul>

                      </div>
                      <!-- End Sidebar -->

                      <div class="clearfix"></div>

                  </div>
                  <!-- Sidebar -left -->

              </div>
              <!-- Left Sidebar End -->
            <?php } else { ?>

              <?php $this->load->view('Home_view'); ?>

            <?php } ?>
