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
                                        <h4>User Ditals</h4>
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
                                                <h5> Country </h5>
                                                <p> <?php print_r($user_view->u_country); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Postal Code</h5>
                                                <p> <?php print_r($user_view->u_postalCode); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Company Type</h5>
                                              <p><?php print_r($user_view->u_companyType); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>EOU</h5>
                                              <p><?php print_r($user_view->u_eou); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Email Id</h5>
                                              <p><?php print_r($user_view->u_emailId); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Contact Number</h5>
                                              <p><?php print_r($user_view->u_contactNumber); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Contact Number one</h5>
                                              <p><?php print_r($user_view->u_contactNumber_one); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Mobile Number</h5>
                                              <p><?php print_r($user_view->u_mobileNumber); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Gst</h5>
                                              <p><?php print_r($user_view->u_gst); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Industry</h5>
                                              <p><?php print_r($user_view->u_industry); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Comment</h5>
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
