<?php echo require 'headAdmin.php';?>

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

                                    <div class="row task-dates mb-0 mt-2">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Machine Model</h5>
                                            <p> <?php print_r($view_enquiry->e_machine_model); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Required Qty</h5>
                                            <p> <?php print_r($view_enquiry->e_required_qty); ?></p>
                                        </div>
                                    </div>

                                    <div class="assign-team mt-4">
                                        <h5>Required Description</h5>
                                        <p><?php print_r($view_enquiry->e_required_description); ?></p>
                                    </div>

                                    <div class="assign-team mt-4">
                                        <h5>Machine Make</h5>
                                        <p><?php print_r($view_enquiry->e_machine_make); ?></p>
                                    </div>

                                    <div class="assign-team mt-4">
                                        <h5>Special Remarks</h5>
                                        <p><?php print_r($view_enquiry->e_special_remarks); ?></p>
                                    </div>

                                    <div class="row task-dates mb-0 mt-2">
                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Photo Of The Parts</h5>
                                            <p> <?php print_r($view_enquiry->e_photo_of_the_parts_path); ?></p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5 class="font-600 m-b-5">Drawing Of The Parts</h5>
                                            <p> <?php print_r($view_enquiry->e_drawing_of_the_parts_path); ?></p>
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

        <!-- plugin -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>

    </body>
</html>
