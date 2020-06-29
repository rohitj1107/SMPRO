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
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="enquiry-custom-div">
                                        <div class="container-fluid enquiry">
                                            <div class="row">
                                                <div class="col-md-12 pt-4">
                                                    <?php if ($this->session->flashdata('po_success')) { ?>
                                                      <div class="alert alert-success alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('po_success'); ?>
                                                    </div>
                                                    <?php } ?>
                                                    <?php if ($this->session->flashdata('po_faile')) { ?>
                                                      <div class="alert alert-danger alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                      <?php echo $this->session->flashdata('po_faile'); ?>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-12 pt-4">
                                                  <?php echo form_open_multipart('po_create/'.base64_encode($po_select->s_so_number));?>
                                                    <label for="customerId">Supplier ID</label>
                                                    <select name="supplierID" class="form-control select2">
                                                            <option>Select Supplier ID</option>
                                                            <?php foreach($supplierID as $supplier){ ?>
                                                              <?php if ($supplier->s_contact_email_id == $this->session->userdata('emailId')): ?>

                                                              <?php else :?>
                                                                <option value="<?php echo $supplier->s_supplier_id; ?>"><?php echo $supplier->s_company_name.' '.$supplier->s_supplier_id.' '.$supplier->s_contact_email_id; ?></option>
                                                              <?php endif; ?>
                                                          <?php }?>
                                                    </select>
                                                    <!-- <input type="text" readonly class="form-control" value="<?php //echo $user->u_customerId; ?>" name="customerId"> -->
                                                </div>
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->s_quote_number; ?>" name="quote_number">
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->s_enquiry_ID; ?>" name="enquiry_ID">
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->s_customer_ID; ?>" name="customer_ID">
                                                  <input type="hidden" class="form-control" value="<?php echo $po_select->s_so_number; ?>" name="so_number">
                                                <div class="col-md-4 pt-4">
                                                  <label for="">SO Number</label>

                                                  <p><?php echo $po_select->s_so_number; ?></p>
                                                  <input type="hidden" class="form-control" value="<?php echo 'PO-'.time(); ?>" name="po_number">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <!-- <label for="">PO Number</label> -->

                                                  <!-- <p><?php echo 'POS-SO-'.time().'-2'; ?></p> -->
                                                  <!-- <input type="hidden" class="form-control" value="<?php echo 'PO-'.time(); ?>" name="po_number"> -->
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">Class</label>
                                                    <select class="form-control" name="Class">
                                                        <option value="0">Select Class</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Category</label>
                                                  <select class="form-control" name="s_category">
                                                      <option value="0">Select Category</option>
                                                      <option value="Sales Parts">Sales Parts</option>
                                                      <option value="Sales Service">Sales Service</option>
                                                      <option value="FOC Parts">FOC Parts</option>
                                                      <option value="FOC Service">FOC Service</option>
                                                      <option value="Solu'on Sales">Solu'on Sales</option>
                                                      <option value="Trading">Trading</option>
                                                      <option value="Consumables">Consumables</option>
                                                  </select>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Market (DOM / Exp)</label>
                                                  <select class="form-control" name="market">
                                                      <option value="0">Select Market</option>
                                                      <option value="DOM">DOM</option>
                                                      <option value="EXP">EXP</option>
                                                  </select>
                                                  <!-- <label for="">Market</label> -->
                                                  <!-- <input type="text" name="po_c_date" class="form-control" placeholder="Market"> -->
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">value</label>
                                                    <input type="text" class="form-control" placeholder="value" name="value">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">into term</label>
                                                    <input type="text" class="form-control" placeholder="into term" name="into_term">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="">Delivery me</label>
                                                    <input type="text" class="form-control" placeholder="Delivery me" name="delivery_me">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for=""> Payment terms </label>
                                                    <input type="text" class="form-control" placeholder="Payment terms" name="payment_terms">
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for=""> Status </label>
                                                    <input type="text" name="status" class="form-control" placeholder="Status">
                                                </div>
                                                <div class="col-md-12 pt-4">

                                                </div>

                                                <div class="col-md-6 pt-4">
                                                    <label for="">PO Anachment</label>
                                                    <input type="file" name="po_anachment[]" multiple>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label for="">Quote anachment</label>
                                                    <input type="file" name="quote_anachment[]" multiple>
                                                </div>
                                                <div class="col-md-12 pt-4">

                                                </div>

                                                <!-- <div class="col-md-8">
                                                  <INPUT class="btn btn-success waves-effect waves-light mr-1" type="button" value="Add Item" onclick="addRow('dataTable')" />
                                                </div>
                                                <div class="col-md-2">
                                                  <INPUT class="btn btn-danger waves-effect waves-light mr-1" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
                                                </div> -->
                                                <br><br>
                                                <div class="col-md-12">
                                                  <table id="dataTable" class="table mb-0">
                                                    <tbody>
                                                      <tr>
                                                        <td>Select</td>
                                                        <td>Item Code</td>
                                                        <td>Pending QTY</td>
                                                        <td>Original QTY</td>

                                                      </tr>
                                                    </tbody>

                                                    <tbody>
                                                      <!-- <tr>
                                                              <td><INPUT type="checkbox" name="chk[]"/>
                                                              <td>
                                                                  <input type="text" class="form-control" name="sn[]" placeholder="SN" value="">
                                                              </td>
                                                              <td>
                                                                  <textarea name="description[]" placeholder="Description" class="form-control" ></textarea>
                                                              </td>
                                                              <td>
                                                                  <input type="text" name="qty[]" class="form-control" placeholder="QTY" value="">
                                                              </td>
                                                      </tr> -->
                                                      <!-- <label for="chkPassport"> -->

                                                      <!-- </label> -->
                                                      <hr />
                                                      <!-- <div id="dvPassport" style="display: none">
                                                          <input type="text" placeholder="QTY" id="txtPassportNumber" />
                                                      </div> -->
                                                      <?php
                                                              $aa = null;
                                                              if (isset($min_item->s_o_m_qty)) {
                                                              $aa = $min_item->s_o_m_qty;

                                                              // echo '<pre>';
                                                              //   print_r($min_item->s_qty);
                                                              //   print_r($min_item->s_item_code);
                                                              //
                                                              // echo '</pre>';

                                                            }

                                                      ?>
                                                      <?php for($i = 0; $i < count(explode(' | ',$po_select->s_sn)); $i++) {
                                                        $sn = (explode(' | ',$po_select->s_sn));
                                                        $ic = (explode(' | ',$po_select->s_item_code));
                                                        $ts = (explode(' | ',$po_select->s_tech_specs));
                                                        $dd = (explode(' | ',$po_select->s_delivery_date));
                                                        $de = (explode(' | ',$po_select->s_description));
                                                        $qty = (explode(' | ',$po_select->s_qty));
                                                        ?>
                                                      <tr>
                                                              <td>
                                                              <INPUT type="checkbox" name="chk[<?php echo $i; ?>]" value="<?php echo $i; ?>"/>
                                                                  <input type="hidden" readonly class="form-control" name="sn[]" placeholder="SN" value="<?php echo 'POS-'.$po_select->s_so_number.'.'.$sn[$i]; ?>">
                                                              </td>
                                                              <td>
                                                                  <input type="text" readonly class="form-control" name="ic[]" placeholder="SN" value="<?php echo $ic[$i]; ?>">
                                                              </td>
                                                              <td>
                                                                  <!-- <textarea name="description[]" readonly placeholder="Description" class="form-control" ><?php echo $de[$i]; ?></textarea> -->
                                                                  <input type="hidden" readonly class="form-control" name="description[]" placeholder="SN" value="<?php echo $de[$i]; ?>">
                                                                  <input type="hidden" readonly class="form-control" name="ts[]" placeholder="SN" value="<?php echo $ts[$i]; ?>">

                                                                  <?php
                                                                        if ($update_select_item) {
                                                                            $up_qty = (explode(' | ',$update_select_item->up_qty)); ?>

                                                                            <div class="text-danger">
                                                                                  Pending QTY : <?php echo $up_qty[$i]; ?>
                                                                            </div>


                                                                        <?php } ?>
                                                              </td>
                                                              <td>
                                                                  <div class="text-success"> <?php echo 'Original QTY : '.$qty[$i]; ?> </div>
                                                                  <br>
                                                                  <input type="text" name="qty[]" class="form-control" placeholder="QTY" value="">
                                                              </td>
                                                              <td>
                                                                  <input type="hidden" readonly class="form-control" name="dd[]" placeholder="SN" value="<?php echo $dd[$i]; ?>">
                                                              </td>
                                                      </tr>
                                                    <?php } ?>
                                                        <?php
                                                        $m = array_sum($qty)-($aa);
                                                        switch ($aa) {
                                                          case (null):
                                                              echo "<input type='hidden' name='o_qty' value='$m'>";
                                                            break;

                                                          case "0":
                                                              echo "<input type='hidden' name='o_qty' value='$aa'>";
                                                            break;

                                                          case ($aa < "0"):
                                                              echo "<input type='hidden' name='o_qty' value='$aa'>";
                                                            break;

                                                          case (($aa) > "0"):
                                                              echo "<input type='hidden' name='o_qty' value='$aa'>";
                                                            break;

                                                          default:
                                                              echo "<input type='hidden' name='o_qty' value='$aa'>";
                                                            break;
                                                        }

                                                        ?>

                                                    </tbody>
                                                  </table>
                                                </div>
                                                <script type="text/javascript">
                                                  $(document).ready(function() {
                                                    $('input[type="checkbox"]').click(function() {
                                                      var inputValue = $(this).attr("value");
                                                      $("." + inputValue).toggle();
                                                    });
                                                  });
                                                </script>
                                                <div class="col-md-4 pt-4">
                                                  <?php
                                                  // var_dump($aa);
                                                      switch ($aa) {
                                                        case "0":
                                                            echo "<button disabled class='w-100 btn btn-danger'>";
                                                            echo "SUBMIT";
                                                            echo "</button>";
                                                          break;

                                                        case ($aa < "0"):
                                                            echo "<button disabled class='w-100 btn btn-danger'>";
                                                            echo "SUBMIT";
                                                            echo "</button>";
                                                          break;
                                                        default:
                                                            echo "<button class='w-100 btn btn-success'>";
                                                            echo "SUBMIT";
                                                            echo "</button>";
                                                          break;
                                                      }

                                                    ?>
                                                </div>
                                                <?php echo "</form>"?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="enquiry-custom-div">
                                        <div class="container-fluid enquiry">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <label for="customerId">PO(SO)</label>
                                              </div>
                                                <div class="col-md-4 pt-4">
                                                    <label for="customerId">SO Number</label>
                                                    <p><?php echo $po_select->s_so_number; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Customer ID</label>
                                                  <p><?php echo $po_select->s_customer_ID; ?></p>

                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Enquiry ID</label>
                                                  <p><?php echo $po_select->s_enquiry_ID; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Quote Number</label>
                                                  <p><?php echo $po_select->s_quote_number; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">SO Date</label>
                                                  <p><?php echo $po_select->s_so_date; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Category</label>
                                                  <p><?php echo $po_select->s_category; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Customer PO Number</label>
                                                  <p><?php echo $po_select->s_customer_po_number; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">PO date</label>
                                                  <p><?php echo $po_select->s_po_date; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Value</label>
                                                  <p><?php echo $po_select->s_value; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Currency</label>
                                                  <p><?php echo $po_select->s_currency; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Market Segment</label>
                                                  <p><?php echo $po_select->s_market_segment; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Delay Penalty</label>
                                                  <p><?php echo $po_select->s_delay_penalty; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Scope TEXT</label>
                                                  <p><?php echo $po_select->s_scope_text; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">LC Applicabl</label>
                                                  <p><?php echo $po_select->s_lc_applicabl; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Load Time</label>
                                                  <p><?php echo $po_select->s_load_time; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Payment</label>
                                                  <p><?php echo $po_select->s_payment; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">Expiry Date of LC</label>
                                                  <p><?php echo $po_select->s_expiry_date_of_lc; ?></p>
                                                </div>
                                                <div class="col-md-4 pt-4">
                                                  <label for="">SO Create date</label>
                                                  <p><?php echo $po_select->s_c_date; ?></p>
                                                </div>
                                                  <div class="col-md-12">
                                                  <table class="table" border="1">
                                                      <thead>
                                                        <tr>
                                                          <th>SN</th>
                                                          <th>Item Code</th>
                                                          <th>Description</th>
                                                          <th>Tech Specs</th>
                                                          <th>QTY</th>
                                                          <th>Delivery Date</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <?php for($i = 0; $i < count(explode(' | ',$po_select->s_sn)); $i++) {
                                                            $sn = (explode(' | ',$po_select->s_sn));
                                                            $ic = (explode(' | ',$po_select->s_item_code));
                                                            $ts = (explode(' | ',$po_select->s_tech_specs));
                                                            $dd = (explode(' | ',$po_select->s_delivery_date));
                                                            $de = (explode(' | ',$po_select->s_description));
                                                            $qty = (explode(' | ',$po_select->s_qty));
                                                          ?>
                                                        <tr>
                                                                <td>
                                                                    <?php echo $sn[$i]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $ic[$i]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $de[$i]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $ts[$i]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $qty[$i]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $dd[$i]; ?>
                                                                </td>
                                                        </tr>
                                                        <?php } ?>
                                                      </tbody>
                                                  </table>
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
        <script>
            $(document).ready(function(){
                var date_input=$('input[id="select_date"]'); //our date input has the name "date"
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
