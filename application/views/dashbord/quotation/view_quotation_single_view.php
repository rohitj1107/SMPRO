<?php $this->load->view('dashbord/headAdmin');?>

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
                                            <h5 class="font-600 m-b-5">Quote Status</h5>
                                            <p> <?php print_r($q_select->q_enquiry_status); ?></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Order Status</h5>
                                            <p> <?php print_r($q_select->q_order_status); ?></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Stage Gate</h5>
                                            <p> <?php print_r($q_select->q_registration); ?></p>
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
                                            <h5>INCO TERMS</h5>
                                            <p><?php print_r($q_select->q_into_terms); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Lead Time</h5>
                                            <p><?php print_r($q_select->q_load_time); ?></p>
                                    </div>
                                  </div>

                                  <div class="row mb-0 mt-0">
                                      <div class="col-lg-4">
                                          <h5 class="font-600 m-b-5">Special Terms / Remarks</h5>
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
