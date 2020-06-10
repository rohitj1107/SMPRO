<div class="row">
    <div class="col-md-12">
      <div class="card-box task-detail">
        <td>
            <?php
            if ($this->session->flashdata('follow_up_success')) { ?>
              <p class="bg-success text-white">  <?php echo $this->session->flashdata('follow_up_success'); ?> </p>
            <?php } ?>
            <?php
            if ($this->session->flashdata('follow_up_faild')) { ?>
              <p class="bg-danger text-white">  <?php echo $this->session->flashdata('follow_up_faild'); ?> </p>
            <?php } ?>
            <?php
            if($quatation):
            foreach ($quatation as $q_value) { ?>
        </td>
        <!-- Row start -->
        <div class="row">
          <div class="col-md-2">
                <label>Quote Number</label>
                <a href="<?php echo base_url('quotation_to_po/'.$q_value->q_quote_number); ?>" class="text-success"><?php echo $q_value->q_quote_number; ?></a>
          </div>
        <div class="col-md-2">
              <label>Enquiry Status</label>
              <?php if($q_value->q_enquiry_status == 'info'): ?>
                <p><i class="mdi mdi-circle text-info"></i></p>
              <?php elseif($q_value->q_enquiry_status == 'success'):?>
                <p><i class="mdi mdi-circle text-success"></i></p>
              <?php elseif($q_value->q_enquiry_status == 'danger'):?>
                <p><i class="mdi mdi-circle text-danger"></i></p>
              <?php endif; ?>
        </div>

        <div class="col-md-2">
              <label>Under process</label>
              <p><?php echo $q_value->q_under_process; ?></p>
        </div>
        <div class="modal" id="myModal<?php echo $q_value->q_quote_number;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="row">
                <div class="col-md-12">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title"><?php echo $q_value->q_quote_number; ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <form method="post" action="<?php echo base_url('follow_up'); ?>">
                    <input type="hidden" name="customerId" value="<?php echo $view_enquiry->e_customerID; ?>">
                    <input type="hidden" name="enquiry_ID" value="<?php echo $view_enquiry->e_enquiryId; ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <input type="hidden" name="quote_number" value="<?php echo $q_value->q_quote_number; ?>">
                  <!-- Modal body -->
                  <div class="modal-body">
                      <label for="">Select Status</label>
                        <select class="form-control select1" name="status">
                            <option value="select"> Select </option>
                            <option value="open"> open </option>
                            <option value="close"> close </option>
                        </select>
                        <p></p>
                        <label for="">Type Commit</label>
                        <textarea name="comment" class="form-control" rows="8" cols="80"></textarea>
                        <p></p>
                        <label for="">Select Date</label>
                        <input class="form-control" id="date" name="select_date" placeholder="MM/DD/YYY" type="text"/>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btn_save" name="button">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
              </form>

            </div>
          </div>

            </div>
          </div>
        </div>

        <div class="modal" id="myModalshow<?php echo $q_value->q_quote_number;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="row">
                <div class="col-md-12">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title"><?php echo $q_value->q_quote_number; ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <form method="post" action="<?php echo base_url('follow_up'); ?>">
                  <!-- Modal body -->
                  <div class="col-md-12 scrollbar scrollbar-primary" style="height: 420px; overflow-y: scroll;">
                      <div class="card-box task-detail">
                        <div class="row">
                          <?php if ($follow_up) { ?>
                          <?php foreach($follow_up as $follow_up_ob):
                            if ($q_value->q_quote_number == $follow_up_ob->f_quote_number) { ?>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <p><?php echo $follow_up_ob->f_status; ?></p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Comment</label>
                                <p><?php echo $follow_up_ob->f_comment; ?></p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Follow Up Date</label>
                                <?php if (date('m/d/yy') > $follow_up_ob->f_select_date) { ?>
                                  <p class="text-danger"><?php echo $follow_up_ob->f_select_date; ?></p>

                                <?php } else { ?>
                                  <p class="text-success"><?php echo $follow_up_ob->f_select_date; ?></p>

                                <?php }?>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Created Date</label>
                                <p><?php echo $follow_up_ob->f_c_date; ?></p>
                            </div>
                          </div>
                          <div class="bg-primary col-12">
                              <hr>
                          </div>
                        <?php
                      }
                       endforeach; ?>
                      <?php } else { ?>
                          <p class="text-warning">Comment Is Not Created</p>
                      <?php } ?>
                        </div>
                      </div>
                  </div><!-- end col -->
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
              </form>

            </div>
          </div>

            </div>
          </div>
        </div>

        <div class="col-md-2">
              <label>Order Status</label>
              <p><?php //echo $q_value->q_order_status; ?>
                <a href="#" class="text-success" data-toggle="modal" data-target="#myModal<?php echo $q_value->q_quote_number;?>">
                  <i class="mdi mdi-comment"> </i> </a>
                <a href="#" class="text-info" data-toggle="modal" data-target="#myModalshow<?php echo $q_value->q_quote_number;?>"> <i class="mdi mdi-check-circle"> </i> </a>
              </p>
        </div>
        <div class="col-md-2">
              <label>Order expected by</label>
              <p><?php echo $q_value->q_order_expected_by; ?></p>
        </div>

        <div class="col-md-2">
              <label>Date entry by</label>
              <p><?php echo $q_value->q_date_entry_by; ?></p>
        </div>

      </div>
      <hr>
      <!-- Row end div -->

    <?php }
  else:
    echo 'Not Add Quotation';
  endif;
  ?>

      </div>
    </div>
</div>
