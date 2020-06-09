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
                                  <a href="<?php echo base_url('Dashbord/user_list'); ?>">
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
                              <div class="card-box">
                                <?php if($this->session->userdata('actionId') ==3 ){ ?>

                                  <h4 class="header-title mt-0 mb-3">User Edit </h4>


                                  <div class="row">
                                      <div class="col-md-12">
                                        Customer Numere : <span class="text-danger"> <?php echo $user_view->u_customerId;?></span>
                                        <?php if ($this->session->flashdata('seccess')) { ?>
                                          <div class="text-white bg-success text-center">

                                            <?php echo $this->session->flashdata('seccess'); ?>

                                          </div>
                                        <?php } ?>

                                        <?php if ($this->session->flashdata('failed')) { ?>
                                          <div class="text-white bg-danger text-center">

                                            <?php echo $this->session->flashdata('failed'); ?>

                                          </div>
                                        <?php } ?>

                                        <?php echo form_open("User/register_update/".base64_encode($user_view->u_Id)); ?>
                                      </div>
                                      <?php echo validation_errors(); ?>
                                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                      <div class="col-md-6 pt-4">

                                          <?php $name_data = [
                                            'name' => 'companyName',
                                            'value' => $user_view->u_companyName,
                                            'placeholder' => 'Company Name *',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Company Name" name="companyName"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'websiteUrl',
                                            'value' => $user_view->u_websiteUrl,
                                            'placeholder' => 'Website URL',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Website URL" name="websiteUrl"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php //$name_data = [
                                            // 'name' => 'country',
                                            // 'value' => set_value('country'),
                                            // 'placeholder' => 'Country',
                                            // 'class' => 'form-control'
                                          // ]; ?>

                                          <?php //echo form_input($name_data); ?>

                                          <select class="form-control" name="country">
                                            <option value="<?php echo $user_view->u_country;?>"><?php echo $user_view->u_country; ?></option>

                                            <?php foreach ($countries as $value) { ?>

                                              <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>

                                            <?php } ?>
                                          </select>

                                          <!-- <input type="text" class="form-control" id="email" placeholder="Country" name="country"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'postalCode',
                                            'value' => $user_view->u_postalCode,
                                            'placeholder' => 'Postal Code',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Postal Code" name="postalCode"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'companyType',
                                            'value' => $user_view->u_companyType,
                                            'placeholder' => 'Company Type',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Company Type" name="companyType"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'eou',
                                            'value' => $user_view->u_eou,
                                            'placeholder' => 'EOU / SEZ / General',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="EOU / SEZ / General" name="eou"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <?php echo form_error('emailId'); ?>
                                          <?php $name_data = [
                                            'name' => 'emailId',
                                            'readonly' => 'true',
                                            'value' => $user_view->u_emailId,
                                            'placeholder' => 'Official Contact Email ID *',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Official Contact Email ID" name="emailId"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'contactNumber',
                                            'value' => $user_view->u_contactNumber,
                                            'placeholder' => 'Contact Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->
                                      </div>
                                          <?php $name_data = [
                                            'name' => 'action',
                                            'value' => $user_view->u_action,
                                            'placeholder' => 'Action',
                                            'class' => 'form-control',
                                            'type' => 'hidden'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'contactNumber_one',
                                            'value' => $user_view->u_contactNumber_one,
                                            'placeholder' => 'Contact Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'mobileNumber',
                                            'value' => $user_view->u_mobileNumber,
                                            'placeholder' => '+1 Mobile Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="+1 Mobile Number" name="mobileNumber"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">

                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'gst',
                                            'value' => $user_view->u_gst,
                                            'placeholder' => 'Company GST / VAT Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Company GST / VAT Number" name="gst"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                          <?php $name_data = [
                                            'name' => 'industry',
                                            'value' => $user_view->u_industry,
                                            'placeholder' => 'Industry',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Industry" name="industry"> -->
                                      </div>

                                      <div class="col-md-12 pt-4">
                                          <?php $name_data = [
                                            'name' => 'comment',
                                            'value' => $user_view->u_comment,
                                            'placeholder' => 'Remarks / Additional Info',
                                            'class' => 'form-control',
                                            'rows' => '3'
                                          ]; ?>

                                          <?php echo form_textarea($name_data); ?>
                                          <!-- <textarea class="form-control" rows="3" placeholder="Remarks / Additional Info" id="comment"></textarea> -->
                                      </div>

                                      <div class="col-md-6 mt-4">
                                        <?php echo form_submit(['name'=>'mysubmit','value'=>'SUBMIT','class'=>'w-100 btn btn-success']); ?>
                                        <?php echo form_close(); ?>
                                      </div>

                                  </div>


                              </div>
                            </div>

                                    <?php } else {?>

                                    <?php } ?>

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
