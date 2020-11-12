<?php echo require 'headAdmin.php';?>

              <!-- ============================================================== -->
              <!-- Start Page Content here -->
              <!-- ============================================================== -->

              <div class="content-page">
                  <div class="content">

                      <!-- Start Content-->
                      <div class="container-fluid">

                        <?php if($user->u_action ==3 ){ ?>
                          <div class="row">
                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="font-weight-normal text-primary" data-plugin="counterup"><?php echo $users_count; ?></h2>
                                          <h5>Users</h5>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="font-weight-normal text-pink" data-plugin="counterup">
                                            <?php if ($enquiry_count) {
                                                    echo $enquiry_count;
                                                } else {
                                                    echo '0';
                                                } ?></h2>
                                          <h5>Enquiry</h5>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="font-weight-normal text-warning" data-plugin="counterup">
                                            <?php if ($quatation_count) {
                                                    echo $quatation_count;
                                                } else {
                                                    echo '0';
                                                } ?></h2>
                                          </h2>
                                          <h5>Quatation</h5>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="font-weight-normal text-info" data-plugin="counterup">
                                            <?php if ($po_count) {
                                                    echo $po_count;
                                                } else {
                                                    echo '0';
                                                } ?>
                                          </h2>
                                          <h5>PO</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">

                          </div>
                        <?php } else {

                        } ?>
                          <!-- end row -->

                          <div class="row">
                              <div class="col-xl-12">
                                  <div class="card-box">
                                    <?php if($user->u_action ==3 ){ ?>

                                      <h4 class="header-title mt-0 mb-3">Latest User</h4>
                                      <?php if ($this->session->flashdata('approval')) { ?>
                                        <div class="text-white bg-success text-center">

                                          <?php echo $this->session->flashdata('approval'); ?>

                                        </div>
                                      <?php } ?>

                                      <?php if ($this->session->flashdata('not_approval')) { ?>
                                        <div class="text-white bg-danger text-center">

                                          <?php echo $this->session->flashdata('not_approval'); ?>

                                        </div>
                                      <?php } ?>

                                      <div class="table-responsive">
                                          <table class="table table-hover mb-0">
                                              <thead>
                                              <tr>
                                                  <th>id</th>
                                                  <th>Company Name</th>
                                                  <th>Email</th>
                                                  <th>Contact</th>
                                                  <!-- <th>Eou</th> -->
                                                  <th>Status</th>
                                                  <th></th>
                                                  <th></th>
                                                  <th>Action</th>

                                              </tr>
                                              </thead>
                                              <tbody>
                                                      <?php foreach($data as $value){?>
                                                        <?php if ($this->session->userdata('emailId') != $value->u_emailId) { ?>
                                                    <tr>

                                                      <th scope="row"><?php echo $value->u_Id; ?></th>
                                                      <td><?php echo $value->u_companyName; ?></td>
                                                      <td><?php echo $value->u_emailId; ?></td>
                                                      <td><?php echo $value->u_contactNumber; ?></td>
                                                      <!-- <td><?php //echo $value->u_eou; ?></td> -->
                                                      <td><?php echo $value->u_action; ?></td>
                                                      <td>
                                                        <?php echo form_open("admin_approval/$value->u_Id"); ?>
                                                          <select class="form-control" name="type">
                                                            <option value="0">Desabel</option>
                                                            <?php foreach($type as $type_d){ ?>
                                                                <option value="<?php echo $type_d->t_id; ?>"><?php echo $type_d->t_name; ?></option>
                                                            <?php } ?>
                                                          </select>
                                                      </td>
                                                      <td>
                                                          <button type="submit" class="btn btn-success" name="button">Action</button>
                                                          <?php echo form_close(); ?>
                                                      </td>

                                                      <td><a href="#"><button type="button" class="btn btn-danger" name="button">Delete</button></a></td>

                                                    </tr>
                                                  <?php } else {} ?>
                                                    <?php } ?>

                                              </tbody>
                                          </table>
                                      </div>
                                    <?php } elseif($user->u_action == 1) { ?>
                                      <!-- <div class="container-fluid"> -->
                                          <!-- <div class="row"> -->
                                              <div class="col-md-12 d-flex justify-content-center align-items-center coverpic-headline">
                                                  <p class="font-weight-bold">My Account</p>
                                              </div>
                                          <!-- </div> -->
                                      <!-- </div> -->

                                      <div class="enquiry-custom-div">
                                          <div class="container-fluid enquiry">
                                            <?php if ($this->session->flashdata('account_success')) { ?>
                                              <div class="text-white bg-success text-center">

                                                <?php echo $this->session->flashdata('account_success'); ?>

                                              </div>
                                            <?php } ?>
                                            <?php if ($this->session->flashdata('account_faile')) { ?>
                                              <div class="text-white bg-danger text-center">

                                                <?php echo $this->session->flashdata('account_faile'); ?>

                                              </div>
                                            <?php } ?>
                                            <form action="<?php echo base_url('my_account_update'); ?>" method="post">
                                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                                              <div class="row">
                                                  <!-- <div class="col-md-10"> -->
                                                      <!-- <button type="button" class="btn btn-danger" name="button">Edit Profile</button> -->
                                                  <!-- </div> -->
                                                  <!-- <div class="col-md-2"> -->
                                                      <!-- <a href="<?php //echo base_url('edit_profile_user'); ?>" class="btn btn-danger">Edit Profile</a> -->
                                                  <!-- </div> -->
                                              </div>
                                              <div class="row">
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Company Name</label>
                                                  <input type="text" name="Company Name" value="<?php echo $user->u_companyName;?>" class="form-control">
                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Industry</label>
                                                  <input type="text" placeholder="Industry" name="industry" value="<?php echo $user->u_industry;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Company Type</label>
                                                  <select class="form-control" name="companyType">
                                                    <option value="<?php echo $user->u_companyName;?>"><?php echo $user->u_companyName;?></option>
                                                  </select>
                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Company Category</label>
                                                  <select class="form-control" name="company_category">
                                                    <option value="<?php echo $user->u_company_category;?>"><?php echo $user->u_company_category;?></option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Website URL</label>
                                                  <input type="text" placeholder="Website URL" name="websiteUrl" value="<?php echo $user->u_websiteUrl;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Country</label>
                                                  <select class="form-control" name="country">
                                                    <option value="<?php echo $user->u_country;?>"><?php echo $user->u_country;?></option>
                                                    <?php
                                                    for ($i=0; $i < count($countries); $i++) {
                                                        echo "<option value=".$countries[$i]->country_name.">".$countries[$i]->country_name."</option>";
                                                     } ?>

                                                  </select>
                                                  <!-- <input type="text" placeholder="Country" name="u_country" value="<?php echo $user->u_country;?>" class="form-control"> -->

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Location</label>
                                                  <input type="text" placeholder="Location" name="location" value="<?php echo $user->u_location;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Postal Code</label>
                                                  <input type="text" placeholder="Postal Code" name="postalCode" value="<?php echo $user->u_postalCode;?>" class="form-control">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Contact Person Name</label>
                                                  <input type="text" placeholder="Contact Person Name" name="contact_person_name" value="<?php echo $user->u_contact_person_name;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Designation</label>
                                                  <input type="text" placeholder="Designation" name="designation" value="<?php echo $user->u_designation;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Company identity</label>
                                                  <input type="text" placeholder="Company identity" name="company_identity" value="<?php echo $user->u_company_identity;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">&nbsp</label>
                                                  <input type="text" placeholder="GST" name="gst" value="<?php echo $user->u_gst;?>" class="form-control">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Email ID</label>
                                                  <input type="text" readonly placeholder="Email ID" name="emailId" value="<?php echo $user->u_emailId;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Contact Number</label>
                                                  <input type="text" placeholder="Contact Number" name="contactNumber" value="<?php echo $user->u_contactNumber;?>" class="form-control">

                                                </div>
                                                <div class="col-md-3 pt-4">
                                                  <label for="">Mobile Number</label>
                                                  <input type="text" placeholder="Mobile Number" name="mobileNumber" value="<?php echo $user->u_mobileNumber;?>" class="form-control">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-12 pt-4">
                                                  <label for="">Remarks</label>
                                                  <textarea name="remark" placeholder="Remarks" class="form-control"><?php echo $user->u_remark;?></textarea>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-3 pt-4">
                                                  <input type="submit" class="form-control btn btn-danger" name="submit" value="Submit">
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                      </div>
                                    <?php } elseif ($user->u_action == 0) { ?>

                                      <div class="enquiry-custom-div">
                                          <div class="container-fluid enquiry">
                                              <div class="row">
                                                  <div class="col-md-12">
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
                                                  <div class="container mt-1 registration">
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          <?php echo form_open('Dashbord/register_create');?>
                                                        </div>

                                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                                                          <div class="col-md-12">
                                                            <p>REGISTER FORM</p>
                                                            <?php if ($this->session->flashdata('errors')) { ?>
                                                              <div class="text-white bg-danger text-center">

                                                                <?php echo $this->session->flashdata('errors'); ?>

                                                              </div>
                                                            <?php } ?>
                                                          </div>
                                                          <?php echo validation_errors(); ?>
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
                                                              <!-- <select class="selectpicker countrypicker form-control" name="country" data-flag="true" ></select> -->

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
                                                              <select class="form-control" name="companyType">
                                                                  <option value="0">Select Company Type</option>
                                                                  <option value="PVT LTD">PVT LTD</option>
                                                                  <option value="Prop">Prop</option>
                                                                  <option value="LLP">LLP</option>
                                                                  <option value="LTD">LTD</option>
                                                              </select>
                                                              <?php //echo form_input($name_data); ?>
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

                                                              <select class="form-control" name="eou">
                                                                  <option value="0">Select EOU</option>
                                                                  <option value="EOU">EOU</option>
                                                                  <option value="SEZ">SEZ</option>
                                                                  <option value="General">General</option>
                                                              </select>
                                                              <?php //echo form_input($name_data); ?>
                                                              <!-- <input type="text" class="form-control" id="email" placeholder="EOU / SEZ / General" name="eou"> -->
                                                          </div>

                                                          <div class="col-md-6 pt-4">
                                                            <label for="">Email ID</label>

                                                            <?php echo form_error('emailId'); ?>
                                                              <?php $name_data = [
                                                                'name' => 'emailId',
                                                                'readonly' => true,
                                                                'value' => $this->session->userdata('emailId'),
                                                                'placeholder' => 'Official Contact Email ID *',
                                                                'class' => 'form-control'
                                                              ]; ?>

                                                              <?php echo form_input($name_data); ?>
                                                              <!-- <input type="text" class="form-control" id="email" placeholder="Official Contact Email ID" name="emailId"> -->
                                                          </div>

                                                          <div class="col-md-6 pt-4">
                                                            <label for="">Password</label>

                                                            <?php echo form_error('password'); ?>
                                                              <?php $name_data = [
                                                                'name' => 'password',
                                                                'type' => 'password',
                                                                'value' => set_value('password'),
                                                                'placeholder' => 'Type Password *',
                                                                'class' => 'form-control'
                                                              ]; ?>

                                                              <?php echo form_input($name_data); ?>
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

                                                          <!-- <div class="col-md-3 grid-captcha mt-4">
                                                              <div class="form-check captcha-checkbox">
                                                                  <label class="form-check-label">
                                                                  <input type="checkbox" class="form-check-input" value="">
                                                                  I'm not a robot
                                                                  </label>
                                                              </div>
                                                              <div class="logo">
                                                                  <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/" width="30" />
                                                                  <p>reCAPTCHA</p>
                                                                  <small>Privacy - Terms</small>
                                                              </div>
                                                          </div> -->

                                                          <div class="col-md-12 mt-4 termsConditions">
                                                              <label class="form-check-label">
                                                                  <input type="checkbox" name="termsConditions" class="form-check-input" value="1">I Agree To The <b>Terms And Conditions</b>
                                                              </label>
                                                          </div>

                                                          <div class="col-md-6 mt-4">
                                                            <?php echo form_submit(['name'=>'mysubmit','value'=>'SUBMIT','class'=>'w-100 btn btn-success']); ?>
                                                            <?php echo form_close(); ?>
                                                          </div>

                                                      </div>
                                                  </div>
                                                  <?php //echo "</form>"?>

                                              </div>
                                          </div>
                                      </div>
                                    <?php }  ?>
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

          <!-- knob plugin -->
          <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-knob/jquery.knob.min.js"></script>

          <!--Morris Chart-->
          <script src="<?php echo base_url(); ?>assets/admin/libs/morris-js/morris.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/admin/libs/raphael/raphael.min.js"></script>

          <!-- Dashboard init js-->
          <script src="<?php echo base_url(); ?>assets/admin/js/pages/dashboard.init.js"></script>

          <!-- App js -->
          <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>

      </body>
  </html>
  <?php //echo require 'footerAdmin.php';?>
