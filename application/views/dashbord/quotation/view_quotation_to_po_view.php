<?php $this->load->view('dashbord/headAdmin');?>
<SCRIPT language="javascript">
      function addRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        for(var i=0; i<colCount; i++) {
          var newcell	= row.insertCell(i);
          newcell.innerHTML = table.rows[0].cells[i].innerHTML;
          //alert(newcell.childNodes);
          switch(newcell.childNodes[0].type) {
            case "text":
                newcell.childNodes[0].value = "";
                break;
            case "checkbox":
                newcell.childNodes[0].checked = false;
                break;
            case "select-one":
                newcell.childNodes[0].selectedIndex = 0;
                break;
          }
        }
      }

      function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for(var i=0; i<rowCount; i++) {
          var row = table.rows[i];
          var chkbox = row.cells[0].childNodes[0];
          if(null != chkbox && true == chkbox.checked) {
            if(rowCount <= 1) {
              alert("Cannot delete all the rows.");
              break;
            }
            table.deleteRow(i);
            rowCount--;
            i--;
          }
        }
        }catch(e) {
          alert(e);
        }
      }
    </SCRIPT>
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
                                  <h4> PO(SO) process </h4>

                                <?php if ($this->session->flashdata('so_seccess')) { ?>
                                    <div class="bg-success"><?php echo $this->session->flashdata('so_seccess'); ?></div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('so_failed')) { ?>
                                    <div class="bg-danger"><?php echo $this->session->flashdata('so_failed'); ?></div>
                                <?php } ?>
                                <?php echo form_open('insert_pos'); ?>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Customer ID</label>
                                          <p><?php echo $quatation->q_customer_ID; ?></p>
                                          <input type="hidden" name="customer_ID" value="<?php echo $quatation->q_customer_ID; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Enquiry ID</label>
                                          <p><?php echo $quatation->q_enquiry_ID; ?></p>
                                          <input type="hidden" name="enquiry_ID" value="<?php echo $quatation->q_enquiry_ID; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Quote Number</label>
                                          <p><?php echo $quatation->q_quote_number; ?></p>
                                          <input type="hidden" name="quote_number" value="<?php echo $quatation->q_quote_number; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>SO Number</label>
                                          <p><?php echo 'SO-'.time(); ?></p>
                                          <input type="hidden" name="so_number" value="<?php echo 'SO-'.time(); ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">

                                        <label for="">Market (DOM / Exp)</label>
                                        <select class="form-control" name="market">
                                            <option value="0">Select Market</option>
                                            <option value="DOM">DOM</option>
                                            <option value="EXP">EXP</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">SO DATE</label>
                                        <input type="text" class="form-control" name="so_date" id="so_date">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                      <label for="">Category</label>
                                      <select class="form-control" name="category">
                                          <option value="0">Select Category</option>
                                          <option value="Sales Equipment And Machinery">Sales Equipment And Machinery</option>
                                          <option value="Sales Parts">Sales Parts</option>
                                          <option value="Sales Service">Sales Service</option>
                                          <option value="Consulting Service Sales">Consulting Service Sales</option>
                                          <option value="FOC Service">FOC Service</option>
                                          <option value="FOC Parts">FOC Parts</option>
                                          <option value="Solution Sales">Solution Sales</option>
                                          <option value="Consumables">Consumables</option>
                                          <option value="Sales Trading Items">Sales Trading Items</option>
                                          <option value="Sales Commission">Sales Commission</option>
                                          <option value="Royalties">Royalties</option>
                                          <option value="Sales Others">Sales Others</option>
                                      </select>

                                    </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Customer PO Number</label>
                                        <input type="text" class="form-control" name="customer_po_number">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">PO Create Date</label>
                                        <input type="text" class="form-control" name="po_date" id="po_date">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Total Value</label>
                                        <input type="text" class="form-control" name="value">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Currency</label>
                                        <select class="form-control" name="currency">
                                            <option value="0">select currency</option>
                                            <option value="INR">INR</option>
                                            <option value="USD">USD</option>
                                            <option value="EURO">EURO</option>

                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Partial Shipment</label>
                                          <!-- <p><?php echo $quatation->q_market_segment; ?></p> -->
                                            <select class="form-control" name="">
                                                <option value="Select Partial Shipment">Select Partial Shipment</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                          <!-- <input type="hidden" name="market_segment" value="<?php echo $quatation->q_market_segment; ?>"> -->
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Delay Penalty</label>
                                          <input type="text" class="form-control" name="delay_penalty">
                                       </div>
                                    </div>
                                     <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Scope Text</label>
                                          <input type="text" class="form-control" name="scope_text" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label class="text-danger">LC applicable</label>
                                          <input type="text" class="form-control" name="lc_applicabl">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>INCO TERMS</label>
                                          <input type="text" name="into_terms" class="form-control" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Lead Time</label>
                                          <input type="text" class="form-control" name="load_time" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Payment Terms</label>
                                          <input type="text" name="payment" value="" class="form-control">
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label class="text-danger">EXPIRY DATE OF LC</label>
                                          <input type="text" name="expiry_date_of_lc" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Company</label>
                                          <input type="text" name="company" class="form-control" value="">
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Location</label>
                                          <select class="form-control" name="location">
                                            <option value="Not Select">Select Country</option>
                                            <?php foreach ($countries as $value) { ?>

                                              <option value="<?php echo $value->country_name ?>"><?php echo $value->country_name ?></option>

                                            <?php } ?>
                                          </select>
                                          <!-- <input type="text" name="location" class="form-control" value=""> -->
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Industry</label>
                                          <input type="text" name="industry" class="form-control" value="">
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>SO Status</label>
                                          <select class="form-control" name="so_status">
                                              <option value="">Select SO Status</option>
                                              <option value="Open">Open</option>
                                              <option value="Under Process (Procurement)">Under Process (Procurement)</option>
                                              <option value="Received at warehouse">Received at warehouse</option>
                                              <option value="Under Shipment clearance">Under Shipment clearance</option>
                                              <option value="Shipment Done">Shipment Done</option>
                                              <option value="Closed">Closed</option>
                                              <option value="Customer feedback Closed">Customer feedback Closed</option>
                                          </select>
                                          <!-- <input type="text" name="so_status" class="form-control" value=""> -->
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Stage Gate</label>
                                          <select class="form-control" name="stage_gate">
                                              <option value="">Select Stage Gate</option>
                                              <option value="Open">Open </option>
                                              <option value="Under Process">Under Process </option>
                                              <option value="Info awaited from Customer">Info awaited from Customer </option>
                                              <option value="Closed">Closed </option>
                                          </select>
                                          <!-- <input type="text" name="stage_gate" class="form-control" value=""> -->
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Sales Channel</label>
                                          <select class="form-control" name="sales_channel">
                                              <option value="">Select Sales Channel</option>
                                              <option value="S1">S1</option>
                                              <option value="S2">S2</option>
                                              <option value="S3">S3</option>
                                              <option value="S4">S4</option>
                                              <option value="S5">S5</option>
                                          </select>
                                          <!-- <input type="text" name="sales_channel" class="form-control" value=""> -->
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Sales Engineer</label>
                                          <select class="form-control" name="sales_engineer">
                                              <option value="">Select Sales Engineer</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-2">

                                    </div>

                                    <div class="col-md-10">
                                      <INPUT class="btn btn-success waves-effect waves-light mr-1" type="button" value="Add Item" onclick="addRow('dataTable')" />
                                    </div>
                                    <div class="col-md-2">
                                      <INPUT class="btn btn-danger waves-effect waves-light mr-1" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
                                    </div>
                                    <div class="col-md-2">
                                      <br>
                                    </div>
                                    <div class="col-md-12">
                                      <table class="table mb-0">
                                          <tbody>
                                            <thead>
                                            <tr>
                                                <th><label for="">SN</label></th>
                                                <th><label for="">Item Code</label></th>
                                                <th><label for="">Description</label></th>
                                                <th><label for="">Tech Specs</label></th>
                                                <th><label class="text-danger">QTY</label></th>
                                                <th><label for="">Delivery date</label></th>
                                            </tr>
                                          </thead>
                                        </tbody>
                                      </table>

                                      <TABLE id="dataTable" class="table mb-0">
                                      <tr>
                                        <TD><INPUT type="checkbox" name="chk"/></TD>
                                        <td>
                                          <input type="text" class="form-control" name="item_code[]" placeholder="Item Code" value="">
                                        </TD>
                                        <td>
                                          <textarea name="description[]" placeholder="Description" class="form-control" ></textarea></td>
                                        </td>
                                        <td><input type="text" class="form-control" name="tech_specs[]" placeholder="Tech Specs" value="">
                                        </TD>
                                        <td>
                                          <div class="form-group">
                                              <input type="number" name="qty[]" class="form-control" placeholder="QTY">
                                          </div>
                                        </td>
                                        <td><input type="date" class="form-control" name="delivery_date[]" placeholder="Day/Month/Year" value="">
                                        </TD>
                                      </tr>
                                    </TABLE>
                                  </div>
                                    <input type="hidden" name="emailId" value="<?php echo $this->session->userdata('emailId'); ?>">
                                    <div class="col-md-12">
                                      <?php //if ($po_number_row) { ?>

                                      <?php //if (date('m/d/yy') > $po_number_row->po_expiry_date_of_lc) { ?>
                                          <!-- <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Submit</button> -->
                                      <?php //} else { ?>
                                          <!-- <button class="btn btn-danger waves-effect waves-light mr-1" disabled type="submit">Submit</button> -->
                                      <?php //} ?>

                                  <?php //} else { ?>
                                      <!-- <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Submit</button> -->
                                  <?php //} ?>
                                  <br><br>
                                  <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Submit</button>

                                    </div>
                                  </div>
                                  <?php echo form_close(); ?>
                                </div>
                            </div><!-- end col -->
                            <!-- start col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->

                  </div>

                  <!-- <div class="container-fluid">

                      <div class="row">
                          <div class="col-md-12">
                            <div class="card-box task-detail">
                                <div class="row">
                                <div class="col-md-4">
                                    Pre Shipment
                                    <p>Payment Status</p>
                                    <p>Manufacturing Status</p>Started
                                    <p>Expected</p>
                                </div>
                                <div class="col-md-4">
                                    Shipment
                                    <p>Shipment date Expected</p>
                                    <p>Balance Payment status</p>
                                    <p>Expected</p>
                                </div>
                                <div class="col-md-4">
                                  <p>Display</p>
                                </div>
                              </div>

                            </div>
                            </div>
                          </div>
                      </div> -->
                </div> <!-- content -->

                <!-- Footer Start -->
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

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

        <!-- Toastr js -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/toastr/toastr.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/pages/toastr.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
        <script>
            $(document).ready(function(){
                var date_input=$('input[id="po_date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
        <script>
            $(document).ready(function(){
                var date_input=$('input[id="so_date"]'); //our date input has the name "date"
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
