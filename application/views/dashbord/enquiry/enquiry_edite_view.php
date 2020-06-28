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
                                            <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                                                <p class="font-weight-bold">Enquiry</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="enquiry-custom-div">
                                        <div class="container-fluid enquiry">
                                            <div class="row">
                                                <div class="col-md-12 pt-4">
                                                    <?php if ($this->session->flashdata('enquiry_success')) { ?>
                                                      <div class="alert alert-success alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('enquiry_success'); ?>
                                                    </div>
                                                    <?php } ?>

                                                    <?php if ($this->session->flashdata('enquiry_faile')) { ?>
                                                      <div class="alert alert-danger alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('enquiry_faile'); ?>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <?php echo form_open_multipart('do_upload_edite/'.$editenquiry->e_customerID.'/'.$editenquiry->e_enquiryId);?>
                                                    <label for="customerId">CUSTOMER ID</label>
                                                    <p class="text-danger"> <?php echo $editenquiry->e_customerID; ?></p>
                                                    <!-- <select name="customerId" class="form-control select2"> -->
                                                            <!-- <option value="<?php //echo $editenquiry->e_customerID; ?>">Selected Customer ID : <?php //echo $editenquiry->e_customerID; ?></option> -->

                                                    <input type="hidden" readonly class="form-control" value="<?php echo $editenquiry->e_customerID; ?>" name="customerId">
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                  <label for="">Application</label>
                                                    <input type="text" value="<?php echo $editenquiry->e_appliction; ?>" class="form-control" placeholder="Application" name="application">
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                  <label for="">Machine Model</label>
                                                    <textarea class="form-control" rows="3" name="machine_model" placeholder="Machine Model / Specs"><?php echo $editenquiry->e_machine_model; ?></textarea>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Machine Make</label>
                                                    <input type="text" class="form-control" value="<?php echo $editenquiry->e_machine_make; ?>" name="machine_make" placeholder="Machine Make">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Required QTY</label>
                                                    <input type="text" class="form-control" value="<?php echo $editenquiry->e_required_qty; ?>" name="required_qty" placeholder="Required Qty">
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                  <label for="">Description</label>
                                                    <textarea class="form-control" rows="4" name="required_description" placeholder="Required Description"><?php echo $editenquiry->e_required_description; ?></textarea>
                                                </div>
                                                <!-- <div class="col-md-6 pt-4">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control" multiple name="Photo_Of_The_Parts[]">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="btn btn-info w-100">Browse</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control" multiple name="Drawing_Of_The_Parts[]">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="btn btn-info w-100">Browse</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12 pt-4">
                                                  <label for="">Special Remarks</label>
                                                    <textarea class="form-control" rows="3" name="special_remarks" placeholder="Special Remarks"><?php echo $editenquiry->e_special_remarks; ?></textarea>
                                                </div>

                                                <div class="col-md-6 mt-4">
                                                    <button class="w-100 btn btn-success">
                                                        SUBMIT
                                                    </button>
                                                </div>
                                                <?php echo "</form>"?>

                                            </div>
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
