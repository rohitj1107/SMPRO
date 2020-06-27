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
                                      <span> Show Forms </span>
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
                                <div class="col-md-12">
                                    <div class="card-box task-detail">
                                        <h4>User Ditals</h4>
                                        <div class="row mb-0 mt-2">
                                          <div class="col-lg-4">
                                              <h5>Customer Id</h5>
                                              <p><?php print_r($supplier->s_supplier_id); ?></p>
                                          </div>
                                            <div class="col-lg-4">
                                                <h5 class="font-600 m-b-5">Company Name</h5>
                                                <p> <?php print_r($supplier->s_company_name); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Website Url</h5>
                                                <p> <?php print_r($supplier->s_website); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                                <h5> Country </h5>
                                                <p> <?php print_r($supplier->s_country); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Country Code</h5>
                                                <p> <?php print_r($supplier->s_country_code); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Company Category</h5>
                                              <p><?php print_r($supplier->s_company_category); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Infrastructure Details</h5>
                                              <p><?php print_r($supplier->s_infrastructure_details); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Machines Plant Capacity</h5>
                                              <p><?php print_r($supplier->s_machines_plant_capacity); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Contact Person name</h5>
                                              <p><?php print_r($supplier->s_contact_person_name); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Contact Number</h5>
                                              <p><?php print_r($supplier->s_contact_number_1); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Support Infrastructure</h5>
                                              <p><?php print_r($supplier->s_support_infrastructure); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>QMS Applicable</h5>
                                              <p><?php print_r($supplier->s_qms_applicable); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Contact Information</h5>
                                              <p><?php print_r($supplier->s_contact_information); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Created Date</h5>
                                              <p><?php print_r($supplier->s_c_date); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Email ID</h5>
                                              <p><?php print_r($supplier->s_contact_email_id); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">

                                        </div>
                                        <div class="assign-team mt-2">

                                        </div>
                                        <div class="assign-team mt-2">

                                        </div>
                                    </div>
                                </div><!-- end col -->

                          </div>
                          <!-- end row -->

                      </div> <!-- container -->

                  </div> <!-- content -->

                  <!-- Footer Start -->
              </div>

              <!-- ============================================================== -->
              <!-- End Page content -->
              <!-- ============================================================== -->


          </div>
          <!-- END wrapper -->
          <!-- /Right-bar -->

          <!-- Right bar overlay-->
          <div class="rightbar-overlay"></div>

          <!-- Vendor js -->
          <script src="<?php echo base_url(); ?>assets/admin/js/vendor.min.js"></script>

          <!-- third party js -->
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/jquery.dataTables.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/dataTables.bootstrap4.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/dataTables.responsive.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/responsive.bootstrap4.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/dataTables.buttons.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/buttons.bootstrap4.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/buttons.html5.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/buttons.flash.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/buttons.print.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/dataTables.keyTable.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/datatables/dataTables.select.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/pdfmake.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/vfs_fonts.js"></script>
          <!-- third party js ends -->

          <!-- Datatables init -->
          <script src="<?php echo base_url(); ?>assets/admin/js/pages/datatables.init.js"></script>

          <!-- App js -->
          <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>

      </body>
  </html>


<?php } else { ?>

  <?php $this->load->view('Home_view'); ?>

<?php } ?>
