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
                              <div class="card-box">
                                <?php if($this->session->userdata('actionId') ==3 ){ ?>

                                  <h4 class="header-title mt-0 mb-3">User Edit </h4>


                                  <div class="row">
                                      <div class="col-md-12">
                                        <?php if ($this->session->flashdata('seccess')) { ?>
                                          <div class="text-white bg-success text-center">

                                            <?php echo $this->session->flashdata('seccess'); ?>

                                          </div>
                                        <?php } ?>

                                        <?php if ($this->session->flashdata('errors')) { ?>
                                          <div class="text-white bg-danger text-center">

                                            <?php echo $this->session->flashdata('errors'); ?>

                                          </div>
                                        <?php } ?>

                                        <?php echo form_open("User/create_user_insert"); ?>
                                      </div>
                                      <?php echo validation_errors(); ?>
                                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                      <div class="col-md-6 pt-4">
                                        <label for="">Company Name</label>
                                          <?php $name_data = [
                                            'name' => 'companyName',
                                            'value' => set_value('companyName'),
                                            'placeholder' => 'Company Name *',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Company Name" name="companyName"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Website Url</label>

                                          <?php $name_data = [
                                            'name' => 'websiteUrl',
                                            'value' => set_value('websiteUrl'),
                                            'placeholder' => 'Website URL',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Website URL" name="websiteUrl"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Country</label>

                                          <?php //$name_data = [
                                            // 'name' => 'country',
                                            // 'value' => set_value('country'),
                                            // 'placeholder' => 'Country',
                                            // 'class' => 'form-control'
                                          // ]; ?>

                                          <?php //echo form_input($name_data); ?>

                                          <select class="form-control" name="country">
                                            <option value="Not Select">Select Country</option>
                                            <?php foreach ($countries as $value) { ?>

                                              <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>

                                            <?php } ?>
                                          </select>

                                          <!-- <input type="text" class="form-control" id="email" placeholder="Country" name="country"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Postal Code</label>

                                          <?php $name_data = [
                                            'name' => 'postalCode',
                                            'value' => set_value('postalCode'),
                                            'placeholder' => 'Postal Code',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Postal Code" name="postalCode"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Company Type</label>

                                          <?php $name_data = [
                                            'name' => 'companyType',
                                            'value' => set_value('companyType'),
                                            'placeholder' => 'Company Type',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php //echo form_input($name_data); ?>
                                          <select class="form-control" name="companyType">
                                              <option value="0">Select Company Type</option>
                                              <option value="PVT LTD">PVT LTD</option>
                                              <option value="Prop">Prop</option>
                                              <option value="LLP">LLP</option>
                                              <option value="LTD">LTD</option>
                                          </select>

                                          <!-- <input type="text" class="form-control" id="email" placeholder="Company Type" name="companyType"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">EOU</label>

                                          <?php $name_data = [
                                            'name' => 'eou',
                                            'value' => set_value('eou'),
                                            'placeholder' => 'EOU / SEZ / General',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php //echo form_input($name_data); ?>
                                          <select class="form-control" name="eou">
                                              <option value="0">Select EOU</option>
                                              <option value="EOU">EOU</option>
                                              <option value="SEZ">SEZ</option>
                                              <option value="General">General</option>
                                          </select>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="EOU / SEZ / General" name="eou"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Email ID</label>

                                        <?php echo form_error('emailId'); ?>
                                          <?php $name_data = [
                                            'name' => 'emailId',
                                            // 'readonly' => 'true',
                                            'value' => set_value('emailId'),
                                            'placeholder' => 'Official Contact Email ID *',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Official Contact Email ID" name="emailId"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Contact Number</label>

                                          <?php $name_data = [
                                            'name' => 'contactNumber',
                                            'value' => set_value('contactNumber'),
                                            'placeholder' => 'Contact Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Contact Number</label>

                                          <?php $name_data = [
                                            'name' => 'contactNumber_one',
                                            'value' => set_value('contactNumber_one'),
                                            'placeholder' => 'Contact Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Contact Number" name="contactNumber"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Mobile Number</label>

                                          <?php $name_data = [
                                            'name' => 'mobileNumber',
                                            'value' => set_value('mobileNumber'),
                                            'placeholder' => '+1 Mobile Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="+1 Mobile Number" name="mobileNumber"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">

                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">GST</label>

                                          <?php $name_data = [
                                            'name' => 'gst',
                                            'value' => set_value('gst'),
                                            'placeholder' => 'Company GST / VAT Number',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Company GST / VAT Number" name="gst"> -->
                                      </div>

                                      <div class="col-md-6 pt-4">
                                        <label for="">Industry</label>

                                          <?php $name_data = [
                                            'name' => 'industry',
                                            'value' => set_value('industry'),
                                            'placeholder' => 'Industry',
                                            'class' => 'form-control'
                                          ]; ?>

                                          <?php echo form_input($name_data); ?>
                                          <!-- <input type="text" class="form-control" id="email" placeholder="Industry" name="industry"> -->
                                      </div>

                                      <div class="col-md-12 pt-4">
                                        <label for="">Remarks</label>

                                          <?php $name_data = [
                                            'name' => 'comment',
                                            'value' => set_value('comment'),
                                            'placeholder' => 'Remarks / Additional Info',
                                            'class' => 'form-control',
                                            'rows' => '3'
                                          ]; ?>

                                          <?php echo form_textarea($name_data); ?>
                                          <!-- <textarea class="form-control" rows="3" placeholder="Remarks / Additional Info" id="comment"></textarea> -->
                                      </div>

                                      <div class="col-md-6 mt-4">
                                        <?php echo form_submit(['name'=>'mysubmit','value'=>'SUBMIT','class'=>'w-100 btn btn-success']); ?>
                                        <?php echo form_close(); ?>
                                      </div>

                                  </div>


                              </div>
                            </div>

                                    <?php } else {?>

                                    <?php } ?>

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
