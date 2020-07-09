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
                                                                          <div class="col-lg-2">
                                                                              <h5 class="font-600 m-b-5">Customer ID</h5>
                                                                              <p> <?php print_r($po_select->s_customer_ID); ?></p>
                                                                          </div>

                                                                          <div class="col-lg-2">
                                                                              <h5 class="font-600 m-b-5">Enquiry ID</h5>
                                                                              <p> <?php print_r($po_select->s_enquiry_ID); ?></p>
                                                                          </div>

                                                                          <div class="col-lg-2">
                                                                              <h5 class="font-600 m-b-5">Quotation ID</h5>
                                                                              <p> <?php print_r($po_select->s_quote_number); ?></p>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                            <div class="form-group">
                                                                              <label for="">SO DATE</label>
                                                                              <input type="text" class="form-control" name="so_date" value="<?php print_r($po_select->s_so_date); ?>" id="so_date">
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                            <div class="form-group">

                                                                              <label for="">Market (DOM / Exp)</label>
                                                                              <select class="form-control" name="market">
                                                                                  <option value="<?php print_r($po_select->s_market); ?>">Selected <?php print_r($po_select->s_market); ?></option>
                                                                                  <option value="DOM">DOM</option>
                                                                                  <option value="EXP">EXP</option>
                                                                              </select>
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                              <label for="">Total Value</label>
                                                                              <input type="text" class="form-control" value="<?php print_r($po_select->s_value); ?>" name="value">
                                                                          </div>
                                                                      </div>

                                                                      <div class="row task-dates mb-0 mt-0">

                                                                          <div class="col-md-2">
                                                                              <label for="">Customer PO Number</label>
                                                                              <input type="text" class="form-control" value="<?php print_r($po_select->s_customer_po_number); ?>" name="customer_po_number">
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                              <label for="">PO Create Date</label>
                                                                              <input type="text" class="form-control" value="<?php print_r($po_select->s_po_date); ?>" name="po_date" id="po_date">
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                            <div class="form-group">
                                                                            <label for="">Category</label>
                                                                            <select class="form-control" name="category">
                                                                                <option value="<?php print_r($po_select->s_category); ?>">Selected <?php print_r($po_select->s_category); ?></option>
                                                                                <option value="Sales Equipment And Machinery">Sales Equipment And Machinery</option>
                                                                                <option value="Sales Parts">Sales Parts</option>
                                                                                <option value="Sales Service">Sales Service</option>
                                                                                <option value="Consulting Service Sales">Consulting Service Sales</option>
                                                                                <option value="FOC Service">FOC Service</option>
                                                                                <option value="FOC Parts">FOC Parts</option>
                                                                                <option value="Solution Sales">Solution Sales</option>
                                                                                <option value="Consumables">Consumables</option>
                                                                                <option value="Sales Trading Items">Sales Trading Items</option>
                                                                                <option value="Sales Commission">Sales Commission</option>
                                                                                <option value="Royalties">Royalties</option>
                                                                                <option value="Sales Others">Sales Others</option>
                                                                            </select>

                                                                          </div>
                                                                          </div>

                                                                          <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <label>Partial Shipment</label>
                                                                                <!-- <p><?php echo $quatation->q_market_segment; ?></p> -->
                                                                                  <select class="form-control" name="s_market_segment">
                                                                                      <option value="<?php print_r($po_select->s_market_segment); ?>">Selected <?php print_r($po_select->s_market_segment); ?></option>
                                                                                      <option value="Yes">Yes</option>
                                                                                      <option value="No">No</option>
                                                                                  </select>
                                                                                <!-- <input type="hidden" name="market_segment" value="<?php echo $quatation->q_market_segment; ?>"> -->
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-lg-2">
                                                                              <label for="">Delay Penalty</label>
                                                                              <input type="text" name="s_delay_penalty" class="form-control" value="<?php print_r($po_select->s_delay_penalty); ?>">
                                                                          </div>
                                                                          <div class="col-lg-2">
                                                                              <label for="">Scope Text</label>
                                                                              <input type="text" name="s_scope_text" class="form-control" value="<?php print_r($po_select->s_scope_text); ?>">
                                                                          </div>
                                                                      </div>
                                                                      <div class="row task-dates mb-0 mt-0">
                                                                        <div class="col-md-2">
                                                                          <div class="form-group">
                                                                              <label>INCO TERMS</label>
                                                                              <input type="text" name="into_terms" class="form-control" value="<?php print_r($po_select->s_into_terms); ?>">
                                                                          </div>
                                                                        </div>

                                                                          <div class="col-lg-2">
                                                                              <label for="">Load Time</label>
                                                                              <input type="text" name="s_load_time" class="form-control" value="<?php print_r($po_select->s_load_time); ?>">
                                                                      </div>
                                                                      <div class="col-md-2">
                                                                          <label for="">Currency</label>
                                                                          <select class="form-control" name="currency">
                                                                              <option value="<?php print_r($po_select->s_currency); ?>">selected <?php print_r($po_select->s_currency); ?></option>
                                                                              <option value="INR">INR</option>
                                                                              <option value="USD">USD</option>
                                                                              <option value="EURO">EURO</option>
                                                                          </select>
                                                                      </div>
                                                                      <div class="col-lg-2">
                                                                          <label for="">Payment Terms</label>
                                                                          <input type="text" name="payment" class="form-control" value="<?php print_r($po_select->s_payment); ?>">

                                                                      </div>
                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="text-danger">EXPIRY DATE OF LC</label>
                                                                            <input type="text" name="expiry_date_of_lc" class="form-control" value="<?php print_r($po_select->s_expiry_date_of_lc); ?>" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                                        </div>
                                                                      </div>
                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="text-danger">LC applicable</label>
                                                                            <input type="text" class="form-control" name="lc_applicabl" value="<?php print_r($po_select->s_lc_applicabl); ?>">
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Company</label>
                                                                            <input type="text" name="company" class="form-control" value="<?php print_r($po_select->s_company); ?>">
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Location</label>
                                                                            <select class="form-control" name="location">
                                                                              <option value="<?php print_r($po_select->s_location); ?>">Selected <?php print_r($po_select->s_location); ?></option>
                                                                              <?php foreach ($countries as $value) { ?>

                                                                                <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>

                                                                              <?php } ?>
                                                                            </select>
                                                                            <!-- <input type="text" name="location" class="form-control" value=""> -->
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Industry</label>
                                                                            <input type="text" name="industry" class="form-control" value="<?php print_r($po_select->s_industry); ?>">
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>SO Status</label>
                                                                            <select class="form-control" name="so_status">
                                                                                <option value="<?php print_r($po_select->s_so_status); ?>">Selected <?php print_r($po_select->s_so_status); ?></option>
                                                                                <option value="Open">Open</option>
                                                                                <option value="Under Process (Procurement)">Under Process (Procurement)</option>
                                                                                <option value="Received at warehouse">Received at warehouse</option>
                                                                                <option value="Under Shipment clearance">Under Shipment clearance</option>
                                                                                <option value="Shipment Done">Shipment Done</option>
                                                                                <option value="Closed">Closed</option>
                                                                                <option value="Customer feedback Closed">Customer feedback Closed</option>
                                                                            </select>
                                                                            <!-- <input type="text" name="so_status" class="form-control" value=""> -->
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Stage Gate</label>
                                                                            <select class="form-control" name="stage_gate">
                                                                                <option value="<?php print_r($po_select->s_stage_gate); ?>">Selected <?php print_r($po_select->s_stage_gate); ?></option>
                                                                                <option value="Open">Open </option>
                                                                                <option value="Under Process">Under Process </option>
                                                                                <option value="Info awaited from Customer">Info awaited from Customer </option>
                                                                                <option value="Closed">Closed </option>
                                                                            </select>
                                                                            <!-- <input type="text" name="stage_gate" class="form-control" value=""> -->
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Sales Channel</label>
                                                                            <select class="form-control" name="sales_channel">
                                                                                <option value="<?php print_r($po_select->s_sales_channel); ?>">Selected <?php print_r($po_select->s_sales_channel); ?></option>
                                                                                <option value="S1">S1</option>
                                                                                <option value="S2">S2</option>
                                                                                <option value="S3">S3</option>
                                                                                <option value="S4">S4</option>
                                                                                <option value="S5">S5</option>
                                                                            </select>
                                                                            <!-- <input type="text" name="sales_channel" class="form-control" value=""> -->
                                                                        </div>
                                                                      </div>

                                                                      <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Sales Engineer</label>
                                                                            <select class="form-control" name="sales_engineer">
                                                                                <option value="<?php print_r($po_select->s_sales_engineer); ?>">Selected <?php print_r($po_select->s_sales_engineer); ?></option>
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
                                                                    </div>

                                                                    <div class="row mb-0 mt-0">
                                                                    </div>
                                                                    <div class="row mb-0 mt-0">
                                                                    <div class="col-md-10">
                                                                    </div>
                                                                    <div class="col-md-2">
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
        <script>
            $(document).ready(function(){
                var date_input=$('input[id="po_date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
        <script>
            $(document).ready(function(){
                var date_input=$('input[id="so_date"]'); //our date input has the name "date"
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
