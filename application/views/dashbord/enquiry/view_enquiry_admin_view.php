<?php $this->load->view('dashbord/headAdmin');?>

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
                                            <h5 class="font-600 m-b-5">Your Industry</h5>
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
                                        <h5>Requirement Category</h5>
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
                                          <label>Quote Status</label>
                                          <select class="form-control select" name="enquiry_status">
                                              <option value="">Select</option>
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
                                              <option value="">Select</option>
                                              <option value="Open">Open</option>
                                              <option value="Under Process">Under Process</option>
                                              <option value="Info awaited from Customer">Info awaited from Customer</option>
                                              <option value="Closed">Closed</option>
                                          </select>
                                          <!-- <input type="text" class="form-control" name="registration" > -->
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Company</label>
                                          <input type="text" name="company" class="form-control" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <label for="">Location</label>

                                        <?php //$name_data = [
                                          // 'name' => 'country',
                                          // 'value' => set_value('country'),
                                          // 'placeholder' => 'Country',
                                          // 'class' => 'form-control'
                                        // ]; ?>

                                        <?php //echo form_input($name_data); ?>

                                        <select class="form-control" name="location">
                                          <option value="Not Select">Select Country</option>
                                          <?php foreach ($countries as $value) { ?>
                                            <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>
                                          <?php } ?>
                                        </select>

                                        <!-- <input type="text" class="form-control" id="email" placeholder="Country" name="country"> -->
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Quote Categ</label>
                                          <p>
                                            <select class="form-control select" name="quote_categ">
                                                <option value="">Select</option>
                                                <option value="Machinery And Equipment">Machinery And Equipment</option>
                                                <option value="Engineering Parts">Engineering Parts</option>
                                                <option value="Software Solutions">Software Solutions</option>
                                                <option value="Automation solution">Automation solution</option>
                                                <option value="IOT Solution">IOT Solution</option>
                                                <option value="Project Services">Project Services</option>
                                                <option value="Consulting Services">Consulting Services</option>
                                                <option value="Training">Training</option>
                                                <option value="Commodity">Commodity</option>
                                                <option value="Consumables">Consumables</option>
                                                <option value="COMMISSION">COMMISSION</option>
                                                <option value="Others">Others</option>
                                            </select>
                                          </p>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Order Status</label>
                                          <p>
                                            <select class="form-control select" name="order_status">
                                                <option value="">Select</option>
                                                <option value="open">Open</option>
                                                <option value="received">Received</option>
                                                <option value="cancelled">cancelled</option>
                                                <option value="Quote expired">Quote expired</option>
                                            </select>
                                          </p>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Industry </label>
                                          <input type="text" name="industry" class="form-control" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Customer ID</label>
                                          <p><?php echo $view_enquiry->e_customerID; ?></p>
                                          <input type="hidden" name="customer_ID" value="<?php echo $view_enquiry->e_customerID; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Enquiry ID</label>
                                          <p><?php echo $view_enquiry->e_enquiryId; ?></p>
                                          <input type="hidden" name="enquiry_ID" value="<?php echo $view_enquiry->e_enquiryId; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Market Segment</label>
                                          <input type="text" class="form-control" name="market_segment" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Currency </label>
                                          <select class="form-control" name="currency">
                                              <option value="">Select Currency</option>
                                              <option value="INR">INR</option>
                                              <option value="USD">USD</option>
                                              <option value="EURO">EURO</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>  Quote Class </label>
                                          <select class="form-control" name="quote_class">
                                              <option value="">Select Currency</option>
                                              <option value="A">A</option>
                                              <option value="B">B</option>
                                              <option value="C">C</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>  Sales Channel </label>
                                          <select class="form-control" name="sales_channel">
                                              <option value="">Select Currency</option>
                                              <option value="s1">s1</option>
                                              <option value="s2">s2</option>
                                              <option value="s3">s3</option>
                                              <option value="s4">s4</option>
                                              <option value="s5">s5</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Sales Engineer </label>
                                          <select class="form-control" name="sales_engineer">
                                              <option value="">Sales Engineer</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>

                                          </select>
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
                                          <label>INCO TERMS</label>
                                          <input type="text" class="form-control" name="into_terms" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Lead Time</label>
                                          <input id="demo3_22" type="text" placeholder="load_time" class="form-group" name="demo3_22">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Payment terms</label>
                                          <input type="text" name="payment_terms" class="form-control" value="">
                                        
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Special Terms / Remarks</label>
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
