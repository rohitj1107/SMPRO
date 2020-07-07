<?php $this->load->view('dashbord/headAdmin');?>

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
                                                <h4> Quotation </h4>

                                              <?php if ($this->session->flashdata('quotation_seccess')) { ?>
                                                  <div class="bg-success"><?php echo $this->session->flashdata('quotation_seccess'); ?></div>
                                              <?php } ?>
                                              <?php if ($this->session->flashdata('quotation_failed')) { ?>
                                                  <div class="bg-danger"><?php echo $this->session->flashdata('quotation_failed'); ?></div>
                                              <?php } ?>
                                              <?php echo form_open('update_quotation/'.base64_encode($q_select->q_quote_number)); ?>
                                                <div class="row">
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Quote Status</label>
                                                        <select class="form-control select" name="enquiry_status">
                                                            <option value="<?php echo $q_select->q_enquiry_status; ?>">Selected <?php echo $q_select->q_enquiry_status; ?></option>
                                                            <option value="Open">Open</option>
                                                            <option value="Under Process">Under Process</option>
                                                            <option value="Further InformaGon required">Further InformaGon required</option>
                                                            <option value="Closed">Closed</option>
                                                            <option value="Cancelled">Cancelled</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label>Stage Gate</label>
                                                      <select class="form-control select" name="registration">
                                                          <option value="<?php echo $q_select->q_registration; ?>">Selected <?php echo $q_select->q_registration; ?></option>
                                                          <option value="Open">Open</option>
                                                          <option value="Under Process">Under Process</option>
                                                          <option value="Info awaited from Customer">Info awaited from Customer</option>
                                                          <option value="Closed">Closed</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <!-- <label>Under process</label>
                                                      <select class="form-control select" name="under_process">
                                                        <option value="<?php echo $q_select->q_under_process; ?>">Selected <?php echo $q_select->q_under_process; ?></option>
                                                          <option value="evaluation">Evaluation</option>
                                                          <option value="further_info_required">Further info required</option>
                                                          <option value="quotation_submitted">Quotation submitted</option>
                                                      </select> -->
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Order Status</label>
                                                        <p>
                                                          <select class="form-control select" name="order_status">
                                                              <option value="<?php echo $q_select->q_order_status; ?>">Selected <?php echo $q_select->q_order_status; ?></option>
                                                              <option value="open">Open</option>
                                                              <option value="received">Received</option>
                                                              <option value="cancelled">cancelled</option>
                                                              <option value="Quote expired">Quote expired</option>
                                                          </select>
                                                        </p>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Customer ID</label>
                                                        <p><?php echo $q_select->q_customer_ID; ?></p>
                                                        <input type="hidden" name="customer_ID" value="<?php echo $q_select->q_customer_ID; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Enquiry ID</label>
                                                        <p><?php echo $q_select->q_enquiry_ID; ?></p>
                                                        <input type="hidden" name="enquiry_ID" value="<?php echo $q_select->q_enquiry_ID; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Market Segment</label>
                                                        <input type="text" class="form-control" name="market_segment" value="<?php echo $q_select->q_market_segment; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <p><?php echo $q_select->q_date; ?></p>
                                                        <input type="hidden" name="date" value="<?php echo $q_select->q_date; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Quote Number</label>
                                                        <p><?php echo $q_select->q_quote_number; ?></p>
                                                        <input type="hidden" name="quote_number" value="<?php echo $q_select->q_quote_number; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Quoted Value</label>
                                                        <input type="text" class="form-control" name="quoted_value" value="<?php echo $q_select->q_quoted_value; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Scope Text</label>
                                                        <input type="text" class="form-control" name="scope_text" value="<?php echo $q_select->q_scope_text; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>INCO TERMS</label>
                                                        <input type="text" class="form-control" name="into_terms" value="<?php echo $q_select->q_into_terms; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Lead Time</label>
                                                        <input id="demo3_22" type="text" placeholder="load_time" value="<?php echo $q_select->q_load_time; ?>" class="form-group" name="demo3_22">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Payment terms</label>
                                                        <select class="form-control select" name="payment_terms">
                                                            <option value="<?php echo $q_select->q_payment_terms; ?>">Selected <?php echo $q_select->q_payment_terms; ?></option>
                                                            <option value="online">Online</option>
                                                            <option value="off_line">Off Line</option>
                                                        </select>
                                                    </div>
                                                  </div>

                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Special Terms / Remarks</label>
                                                        <input type="text" class="form-control" name="general_terms_gic_provided" value="<?php echo $q_select->q_general_terms_gic_provided; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Order expected by</label>
                                                        <input type="text" name="order_expected_by" class="form-control" value="<?php echo $q_select->q_order_expected_by; ?>" placeholder="mm/dd/yyyy" id="datepicker">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date entry by</label>
                                                        <input type="text" name="date_entry_by" class="form-control" value="<?php echo $q_select->q_date_entry_by; ?>" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                    </div>
                                                  </div>
                                                  <input type="hidden" name="emailId" value="<?php echo $this->session->userdata('emailId'); ?>">
                                                  <div class="col-md-6">
                                                      <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Update</button>
                                                  </div>

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
