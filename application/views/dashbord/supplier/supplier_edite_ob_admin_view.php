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
                                                <p class="font-weight-bold">Supplier</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="enquiry-custom-div">
                                        <div class="container-fluid enquiry">
                                            <div class="row">
                                                <div class="col-md-12 pt-4">
                                                    <?php if ($this->session->flashdata('supplier_success')) { ?>
                                                      <div class="alert alert-success alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('supplier_success'); ?>
                                                    </div>
                                                    <?php } ?>

                                                    <?php if ($this->session->flashdata('supplier_faile')) { ?>
                                                      <div class="alert alert-danger alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('supplier_faile'); ?>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <?php echo form_open("supplier_form_admin_update/".base64_encode($supplier->s_supplier_id)); ?>

                                                    <label for="">Supplier ID</label>
                                                    <input type="text" readonly class="form-control" value="<?php echo $supplier->s_supplier_id; ?>" name="s_supplier_id">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Company Name</label>
                                                    <input type="text" class="form-control" placeholder="Company Name" value="<?php echo $supplier->s_company_name; ?>" name="s_company_name">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Website</label>
                                                    <input type="text" class="form-control" placeholder="Website" value="<?php echo $supplier->s_website; ?>" name="s_website">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Company Category</label>
                                                    <select class="form-control" name="s_company_category">
                                                        <option value="<?php echo $supplier->s_company_category; ?>"><?php echo 'Selected Category : '.$supplier->s_company_category; ?></option>
                                                        <option value="pvt_ltd">Pvt Ltd</option>
                                                        <option value="prop">Prop</option>
                                                        <option value="llp">LLP</option>
                                                        <option value="ltd">LTD</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" placeholder="Company Category" value="<?php set_value('s_company_category'); ?>" name="s_company_category"> -->
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Country</label>
                                                  <select class="form-control" name="s_country">
                                                    <option value="<?php echo $supplier->s_country; ?>"><?php echo 'Selected Country : '.$supplier->s_country; ?></option>

                                                    <?php foreach ($countries as $value) { ?>

                                                      <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>

                                                    <?php } ?>
                                                  </select>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Contact Person Name</label>
                                                    <input type="text" class="form-control" placeholder="Contact Person Name" value="<?php echo $supplier->s_contact_person_name; ?>" name="s_contact_person_name">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Contact Information</label>
                                                  <input type="text" class="form-control" placeholder="Contact Information" value="<?php echo $supplier->s_contact_information; ?>" name="s_contact_information">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Contact Email Id</label>
                                                    <input type="text" class="form-control" placeholder="Contact Email Id" value="<?php echo $supplier->s_contact_email_id; ?>" name="s_contact_email_id">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Country Code</label>

                                                  <input type="text" class="form-control" placeholder="Country Code" value="<?php echo $supplier->s_country_code; ?>" name="s_country_code">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Contact Number</label>

                                                    <input type="text" class="form-control" placeholder="Contact Number 1" value="<?php echo $supplier->s_contact_number_1; ?>" name="s_contact_number_1">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Infrastructure Details</label>

                                                  <input type="text" class="form-control" placeholder="Infrastructure Details" value="<?php echo $supplier->s_infrastructure_details; ?>" name="s_infrastructure_details">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Machines Plant Capacity</label>

                                                    <input type="text" class="form-control" placeholder="Machines Plant Capacity" value="<?php echo $supplier->s_machines_plant_capacity; ?>" name="s_machines_plant_capacity">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Support Infrastructure</label>

                                                    <input type="text" class="form-control" placeholder="Support Infrastructure" value="<?php echo $supplier->s_support_infrastructure; ?>" name="s_support_infrastructure">
                                                </div>
                                                <!-- <div class="col-md-6 pt-4">
                                                  <label for="">Attachment Of Company Catalogue</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control" multiple name="s_attachment_of_company_catalogue[]">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="btn btn-info w-100">Browse</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-6 pt-4">
                                                  <label for="">Qms Applicable</label>

                                                    <input type="text" class="form-control" placeholder="Qms Applicable" value="<?php echo $supplier->s_qms_applicable; ?>" name="s_qms_applicable">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                </div>
                                                <div class="col-md-6 mt-4">
                                                    <input type="submit" name="" class="form-control btn btn-success" value="SUBMIT">
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                </div>
                                                <div class="col-md-6 pt-4">
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
