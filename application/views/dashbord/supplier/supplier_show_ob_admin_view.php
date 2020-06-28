<?php $this->load->view('dashbord/headAdmin');?>

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
                                              <p><?php print_r($supplier->s_supplier_id); ?></p>
                                          </div>
                                            <div class="col-lg-4">
                                                <h5 class="font-600 m-b-5">Company Name</h5>
                                                <p> <?php print_r($supplier->s_company_name); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Website Url</h5>
                                                <p> <?php print_r($supplier->s_website); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                                <h5> Country </h5>
                                                <p> <?php print_r($supplier->s_country); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Country Code</h5>
                                                <p> <?php print_r($supplier->s_country_code); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Company Category</h5>
                                              <p><?php print_r($supplier->s_company_category); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Infrastructure Details</h5>
                                              <p><?php print_r($supplier->s_infrastructure_details); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Machines Plant Capacity</h5>
                                              <p><?php print_r($supplier->s_machines_plant_capacity); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Contact Person name</h5>
                                              <p><?php print_r($supplier->s_contact_person_name); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Contact Number</h5>
                                              <p><?php print_r($supplier->s_contact_number_1); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Support Infrastructure</h5>
                                              <p><?php print_r($supplier->s_support_infrastructure); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>QMS Applicable</h5>
                                              <p><?php print_r($supplier->s_qms_applicable); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">
                                            <div class="col-lg-4">
                                              <h5>Contact Information</h5>
                                              <p><?php print_r($supplier->s_contact_information); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Created Date</h5>
                                              <p><?php print_r($supplier->s_c_date); ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                              <h5>Email ID</h5>
                                              <p><?php print_r($supplier->s_contact_email_id); ?></p>
                                            </div>
                                        </div>

                                        <div class="row task-dates mb-0 mt-0">

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
