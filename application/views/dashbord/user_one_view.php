<?php echo require 'headAdmin.php';?>

              <!-- ============================================================== -->
              <!-- Start Page Content here -->
              <!-- ============================================================== -->

              <div class="content-page">
                  <div class="content">


                    <div class="modal" id="myModalshow<?php echo $user_view->u_customerId;?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="row">
                            <div class="col-md-12">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title"><?php echo $user_view->u_customerId; ?></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <form method="post" action="<?php echo base_url('follow_up'); ?>">
                              <!-- Modal body -->
                              <div class="col-md-12 scrollbar scrollbar-primary" style="height: 420px; overflow-y: scroll;">
                                  <div class="card-box task-detail">
                                    <div class="row">
                                      <?php if ($select_c_follow_up) { ?>
                                      <?php foreach($select_c_follow_up as $follow_up_ob):
                                        if ($user_view->u_customerId == $follow_up_ob->c_customerId) { ?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <p><?php echo $follow_up_ob->c_status; ?></p>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <p><?php echo $follow_up_ob->c_comment; ?></p>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Follow Up Date</label>
                                            <?php if (date('m/d/yy') > $follow_up_ob->c_select_date) { ?>
                                              <p class="text-danger"><?php echo $follow_up_ob->c_select_date; ?></p>

                                            <?php } else { ?>
                                              <p class="text-success"><?php echo $follow_up_ob->c_select_date; ?></p>

                                            <?php }?>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Created Date</label>
                                            <p><?php echo $follow_up_ob->c_select_date; ?></p>
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



                    <div class="modal" id="myModal<?php echo $user_view->u_customerId;?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="row">
                            <div class="col-md-12">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title"><?php echo $user_view->u_customerId; ?></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <form method="post" action="<?php echo base_url('customer_follow_up'); ?>">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                <input type="hidden" name="u_id" value="<?php echo $this->uri->segment(2); ?>">
                                <input type="hidden" name="customerId" value="<?php echo $user_view->u_customerId; ?>">
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
                                    <div class="card-box task-detail">
                                        <h4>Customer Details</h4>
                                        <div class="row mb-0 mt-2">
                                          <div class="col-lg-4">
                                              <h5>Customer Id</h5>
                                              <p><?php print_r($user_view->u_customerId); ?></p>
                                          </div>
                                            <div class="col-lg-4">
                                                <h5 class="font-600 m-b-5">Company Name</h5>
                                                <p> <?php print_r($user_view->u_companyName); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Website Url</h5>
                                                <p> <?php print_r($user_view->u_websiteUrl); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                                <h5>Country </h5>
                                                <p> <?php print_r($user_view->u_country); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Location</h5>
                                                <p> <?php print_r($user_view->u_postalCode); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Company Type</h5>
                                              <p><?php print_r($user_view->u_companyType); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Company Category</h5>
                                              <p><?php print_r($user_view->u_eou); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Official Email ID</h5>
                                              <p><?php print_r($user_view->u_emailId); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Contact Number</h5>
                                              <p><?php print_r($user_view->u_contactNumber); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Contact Person Name</h5>
                                              <p><?php print_r($user_view->u_contactNumber_one); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Mobile Number</h5>
                                              <p><?php print_r($user_view->u_mobileNumber); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Company Identity</h5>
                                              <p><?php print_r($user_view->u_gst); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Your Industry</h5>
                                              <p><?php print_r($user_view->u_industry); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Addi0onal Info / Remarks</h5>
                                              <p><?php print_r($user_view->u_comment); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>User Join Date</h5>
                                              <p><?php print_r($user_view->u_c_date); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Role</h5>
                                              <p><?php
                                              foreach ($type as $value) {
                                                  if ($user_view->u_action == $value->t_id) {
                                                      print_r( $value->t_name);
                                                  }
                                              } ?>
                                              </p>
                                            </div>
                                            <div class="col-md-2">
                                                  <label>Customer Status</label>
                                                  <p><?php //echo $q_value->q_order_status; ?>
                                                    <a href="#" class="text-success" data-toggle="modal" data-target="#myModal<?php echo $user_view->u_customerId;?>">
                                                      <i class="mdi mdi-comment"> </i> </a>
                                                    <a href="#" class="text-info" data-toggle="modal" data-target="#myModalshow<?php echo $user_view->u_customerId;?>"> <i class="mdi mdi-check-circle"> </i> </a>
                                                  </p>
                                            </div>
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

          <!-- App js -->
          <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
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
