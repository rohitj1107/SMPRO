<?php $this->load->view('dashbord/headAdmin');?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="mt-0 header-title">Show Form</h4>
                                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Enquiry Number</th>
                                            <th>Customer Number</th>
                                            <th>Quatation</th>
                                            <th>Required Qty</th>
                                            <th>Date Time</th>
                                            <th>Action</th>
                                            <th>Enquiry To Quotation</th>
                                            <!-- <th>Ed</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php if ($enquiry) { ?>
                                            <?php foreach($enquiry as $sw_enquiry){ ?>
                                            <tr>
                                                <td>
                                                  <?php
                                                        foreach ($companyname as $value) {
                                                            if ($value->u_customerId == $sw_enquiry->e_customerID) {
                                                                echo $value->u_companyName;
                                                            }
                                                        }
                                                   ?>
                                                </td>
                                                <td><?php echo $sw_enquiry->e_enquiryId; ?></td>
                                                <td><?php echo $sw_enquiry->e_customerID; ?></td>
                                                <td>
                                                    <?php
                                                    $count ="<p class='text-danger' > No Quatation Create </p>";
                                                    // print_r($qu_count);
                                                      foreach ($qu_count as $count_qu) {
                                                          foreach ($count_qu as $value) {
                                                              if ($value->q_enquiry_ID == $sw_enquiry->e_enquiryId) {
                                                                $count = $value->number;
                                                              }
                                                          }
                                                      } echo $count;
                                                       ?>
                                                </td>
                                                <td><?php echo $sw_enquiry->e_required_qty; ?></td>
                                                <td><?php echo $sw_enquiry->e_date_time; ?></td>
                                                <td>
                                                  <a href="<?php echo base_url("view_enquiry_single_admin/$sw_enquiry->e_customerID/$sw_enquiry->e_enquiryId"); ?>"><button type="button" class="btn btn-success mdi mdi-view-list" name="button"></button></a>
                                                  <a href="<?php echo base_url("enquiry_edite/$sw_enquiry->e_customerID/$sw_enquiry->e_enquiryId"); ?>"><button type="button" class="btn btn-warning mdi mdi-view-list" name="button"></button></a>
                                                  <!-- <a href="<?php //echo base_url('edite_enquiry'); ?>"><button type="button" class="bg-warning" name="button">Edit</button></a> -->
                                                  <a href="<?php echo base_url('delete_enquiry_admin'); ?>"><button type="button" class="btn btn-danger mdi mdi-delete-sweep-outline" name="button"></button></a>
                                                </td>
                                                <td>
                                                  <a href="<?php echo base_url("view_enquiry_admin/$sw_enquiry->e_customerID/$sw_enquiry->e_enquiryId"); ?>"><button type="button" class="btn btn-info mdi mdi-view-list" name="button"></button></a>

                                                </td>
                                                <!-- <td>Ac</td> -->
                                            </tr>
                                          <?php } ?>
                                        <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->
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
