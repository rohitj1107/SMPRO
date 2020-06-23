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

    <SCRIPT language="javascript">
      function addRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        for(var i=0; i<colCount; i++) {
          var newcell	= row.insertCell(i);
          newcell.innerHTML = table.rows[0].cells[i].innerHTML;
          //alert(newcell.childNodes);
          switch(newcell.childNodes[0].type) {
            case "text":
                newcell.childNodes[0].value = "";
                break;
            case "checkbox":
                newcell.childNodes[0].checked = false;
                break;
            case "select-one":
                newcell.childNodes[0].selectedIndex = 0;
                break;
          }
        }
      }

      function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for(var i=0; i<rowCount; i++) {
          var row = table.rows[i];
          var chkbox = row.cells[0].childNodes[0];
          if(null != chkbox && true == chkbox.checked) {
            if(rowCount <= 1) {
              alert("Cannot delete all the rows.");
              break;
            }
            table.deleteRow(i);
            rowCount--;
            i--;
          }
        }
        }catch(e) {
          alert(e);
        }
      }
    </SCRIPT>

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

                                          <div class="col-md-12">
                                              <div class="card-box task-detail">
                                                <h4> SO </h4>

                                              <?php if ($this->session->flashdata('po_seccess')) { ?>
                                                  <div class="bg-success"><?php echo $this->session->flashdata('po_seccess'); ?></div>
                                              <?php } ?>
                                              <?php if ($this->session->flashdata('po_failed')) { ?>
                                                  <div class="bg-danger"><?php echo $this->session->flashdata('po_failed'); ?></div>
                                              <?php } ?>
                                              <?php echo form_open('update_po'); ?>
                                                <!-- Start Content-->

                                                                      <p class="text-muted">
                                                                          <input type="hidden" name="po_po_number" readonly class="form-control" value="<?php print_r($po_select->s_so_number); ?>">
                                                                          <?php print_r($po_select->s_so_number); ?>
                                                                      </p>
                                                                      <div class="row task-dates mb-0 mt-2">
                                                                          <div class="col-lg-4">
                                                                              <h5 class="font-600 m-b-5">Customer ID</h5>
                                                                              <p> <?php print_r($po_select->s_customer_ID); ?></p>
                                                                          </div>

                                                                          <div class="col-lg-4">
                                                                              <h5 class="font-600 m-b-5">Enquiry ID</h5>
                                                                              <p> <?php print_r($po_select->s_enquiry_ID); ?></p>
                                                                          </div>

                                                                          <div class="col-lg-4">
                                                                              <h5 class="font-600 m-b-5">Quotation ID</h5>
                                                                              <p> <?php print_r($po_select->s_quote_number); ?></p>
                                                                          </div>
                                                                      </div>

                                                                      <div class="row task-dates mb-0 mt-0">
                                                                          <div class="col-lg-4">
                                                                              <h5 class="font-600 m-b-5">Date </h5>
                                                                              <p> <?php print_r($po_select->s_so_date); ?></p>
                                                                          </div>

                                                                          <div class="col-lg-4">
                                                                              <h5 class="font-600 m-b-5">Market segment</h5>
                                                                              <input type="text" name="s_market_segment" class="form-control" value="<?php print_r($po_select->s_market_segment); ?>">
                                                                          </div>

                                                                          <div class="col-lg-4">
                                                                              <h5 class="font-600 m-b-5">Delay Penalty</h5>
                                                                              <input type="text" name="s_delay_penalty" class="form-control" value="<?php print_r($po_select->s_delay_penalty); ?>">
                                                                          </div>
                                                                      </div>

                                                                      <div class="row task-dates mb-0 mt-0">
                                                                          <div class="col-lg-4">
                                                                              <h5>Scope Text</h5>
                                                                              <input type="text" name="s_scope_text" class="form-control" value="<?php print_r($po_select->s_scope_text); ?>">
                                                                          </div>

                                                                          <div class="col-lg-4">
                                                                              <h5>Load Time</h5>
                                                                              <input type="text" name="s_load_time" class="form-control" value="<?php print_r($po_select->s_load_time); ?>">

                                                                      </div>
                                                                    </div>

                                                                    <div class="row mb-0 mt-0">
                                                                        <div class="col-lg-4">
                                                                            <h5 class="font-600 m-b-5">payment</h5>
                                                                            <p> <?php print_r($po_select->s_payment); ?></p>
                                                                        </div>

                                                                        <div class="col-lg-4">
                                                                            <h5 class="font-600 text-danger m-b-5">Expected Date</h5>
                                                                            <p> <?php print_r($po_select->s_expiry_date_of_lc); ?></p>
                                                                        </div>

                                                                    <div class="col-lg-4">
                                                                        <h5 class="font-600 m-b-5">Created Date</h5>
                                                                        <p><?php echo $po_select->s_c_date; ?></p>
                                                                    </div>
                                                                    </div>
                                                                    <div class="row mb-0 mt-0">

                                                                    <div class="col-md-10">
                                                                      <INPUT class="btn btn-success waves-effect waves-light mr-1" type="button" value="Add Item" onclick="addRow('dataTable')" />
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                      <INPUT class="btn btn-danger waves-effect waves-light mr-1" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
                                                                    </div>
                                                                  </div>
                                                                  <br>
                                                                    <div class="col-md-12">
                                                                      <table id="dataTable" class="table mb-0">
                                                                        <tbody>
                                                                          <tr>
                                                                                  <td><INPUT type="checkbox" name="chk"/>
                                                                                  <td>
                                                                                      <input type="text" class="form-control" name="sn[]" placeholder="SN" value="">
                                                                                  </td>
                                                                                  <td>
                                                                                      <textarea name="description[]" placeholder="Description" class="form-control" ></textarea>
                                                                                  </td>
                                                                                  <td>
                                                                                      <input type="text" name="qty[]" class="form-control" placeholder="QTY" value="">
                                                                                  </td>
                                                                          </tr>
                                                                          <?php for($i = 0; $i < count(explode(' | ',$po_select->s_sn)); $i++) {
                                                                                    $sn = (explode(' | ',$po_select->s_sn));
                                                                                    $de = (explode(' | ',$po_select->s_description));
                                                                                    $qty = (explode(' | ',$po_select->s_qty));
                                                                            ?>
                                                                          <tr>
                                                                                  <td><INPUT type="checkbox" name="chk"/>
                                                                                  <td>
                                                                                      <input type="text" class="form-control" name="sn[]" placeholder="SN" value="<?php echo $sn[$i]; ?>">
                                                                                  </td>
                                                                                  <td>
                                                                                      <textarea name="description[]" placeholder="Description" class="form-control" ><?php echo $de[$i]; ?></textarea>
                                                                                  </td>
                                                                                  <td>
                                                                                      <input type="text" name="qty[]" class="form-control" placeholder="QTY" value="<?php echo $qty[$i]; ?>">
                                                                                  </td>
                                                                          </tr>
                                                                          <?php } ?>

                                                                        </tbody>
                                                                      </table>
                                                                    </div>
                                                  <input type="hidden" name="emailId" value="<?php echo $this->session->userdata('emailId'); ?>">
                                                  <div class="col-md-6">
                                                      <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Update</button>
                                                  </div>


                                                <?php echo form_close(); ?>
                                              </div>
                                          </div><!-- end col -->

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
