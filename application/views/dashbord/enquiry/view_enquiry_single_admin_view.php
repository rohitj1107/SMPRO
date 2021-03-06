<?php $this->load->view('dashbord/headAdmin');?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">


                  <div class="modal" id="myModalshow<?php echo $view_enquiry->e_enquiryId;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="row">
                          <div class="col-md-12">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title"><?php echo $view_enquiry->e_enquiryId; ?></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form method="post" action="<?php echo base_url('follow_up'); ?>">
                            <!-- Modal body -->
                            <div class="col-md-12 scrollbar scrollbar-primary" style="height: 420px; overflow-y: scroll;">
                                <div class="card-box task-detail">
                                  <div class="row">
                                    <?php if ($select_e_follow_up) { ?>
                                    <?php foreach($select_e_follow_up as $follow_up_ob):
                                      if ($view_enquiry->e_enquiryId == $follow_up_ob->e_enquiryId) { ?>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Status</label>
                                          <p><?php echo $follow_up_ob->e_status; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Comment</label>
                                          <p><?php echo $follow_up_ob->e_comment; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Follow Up Date</label>
                                          <?php if (date('m/d/yy') > $follow_up_ob->e_select_date) { ?>
                                            <p class="text-danger"><?php echo $follow_up_ob->e_select_date; ?></p>

                                          <?php } else { ?>
                                            <p class="text-success"><?php echo $follow_up_ob->e_select_date; ?></p>

                                          <?php }?>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Created Date</label>
                                          <p><?php echo $follow_up_ob->e_select_date; ?></p>
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


                  <div class="modal" id="myModal<?php echo $view_enquiry->e_enquiryId;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="row">
                          <div class="col-md-12">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title"><?php echo $view_enquiry->e_enquiryId; ?></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form method="post" action="<?php echo base_url('enquiry_follow_up'); ?>">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              <input type="hidden" name="enquiryId" value="<?php echo $view_enquiry->e_enquiryId; ?>">
                              <input type="hidden" name="customerId" value="<?php echo $view_enquiry->e_customerID; ?>">
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
                                    <h4>Application</h4>
                                    <p class="text-muted">
                                        <?php print_r($view_enquiry->e_appliction); ?>
                                    </p>
                                    <div class="row task-dates mb-0 mt-2">
                                        <div class="col-lg-3">
                                            <h5 class="font-600 m-b-5">Customer ID</h5>
                                            <p> <?php print_r($view_enquiry->e_customerID); ?></p>
                                        </div>

                                        <div class="col-lg-3">
                                            <h5 class="font-600 m-b-5">Enquiry ID</h5>
                                            <p> <?php print_r($view_enquiry->e_enquiryId); ?></p>
                                        </div>

                                        <div class="col-lg-3">
                                            <h5 class="font-600 m-b-5">Company Name</h5>
                                            <p> <?php print_r($view_enquiry->e_companyname); ?></p>
                                        </div>

                                        <div class="col-lg-3">
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
                                            <h5 class="font-600 m-b-5">Location</h5>
                                            <p> <?php print_r($view_enquiry->e_location); ?></p>
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
                                        <div class="col-md-2">
                                              <label>Enquiry Status</label>
                                              <p><?php //echo $q_value->q_order_status; ?>
                                                <a href="#" class="text-success" data-toggle="modal" data-target="#myModal<?php echo $view_enquiry->e_enquiryId;?>">
                                                  <i class="mdi mdi-comment"> </i> </a>
                                                <a href="#" class="text-info" data-toggle="modal" data-target="#myModalshow<?php echo $view_enquiry->e_enquiryId;?>"> <i class="mdi mdi-check-circle"> </i> </a>
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
