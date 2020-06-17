<div class="col-md-4 scrollbar scrollbar-primary" style="height: 420px; overflow-y: scroll;">
    <div class="card-box task-detail">
      <div class="row">
        <!-- <div class="col-md-6">
          <div class="form-group">
              <label>Customer ID</label>
              <p><?php //echo $quatation->q_customer_ID; ?></p>
              <input type="hidden" name="customer_ID" value="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Enquiry ID</label>
              <p><?php //echo $quatation->q_enquiry_ID; ?></p>
              <input type="hidden" name="enquiry_ID" value="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Quote Number</label>
              <p><?php //echo $quatation->q_quote_number; ?></p>
              <input type="hidden" name="quote_number" value="<?php //echo $quatation->q_quote_number; ?>">
          </div>
        </div> -->
        <?php if ($po_number_result) { ?>
        <?php foreach($po_number_result as $opnumber): ?>
        <div class="col-md-6">
          <div class="form-group">
              <label>PO Number</label>
              <p><?php echo $opnumber->po_po_number; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Date</label>
              <p><?php echo $opnumber->po_date; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Market Segment</label>
              <p><?php echo $opnumber->po_market_segment; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Delay Penalty</label>
              <p><?php echo $opnumber->po_delay_penalty; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Scope Text</label>
              <p><?php echo $opnumber->po_scope_text; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label class="text-danger">LC applicabl</label>
              <p><?php echo $opnumber->po_lc_applicabl; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Into terms</label>
              <p><?php echo $opnumber->po_into_terms; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Load time</label>
              <p><?php echo $opnumber->po_load_time; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label>Payment</label>
              <p><?php echo $opnumber->po_payment; ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label class="text-danger">EXPIRY DATE OF LC</label>
              <?php if (date('m/d/yy') > $opnumber->po_expiry_date_of_lc) { ?>
                <p class="text-danger"><?php echo $opnumber->po_expiry_date_of_lc; ?></p>
              <?php } else { ?>
                <p class="text-success"><?php echo $opnumber->po_expiry_date_of_lc; ?></p>
              <?php } ?>
          </div>
        </div>
        <div class="bg-primary col-12">
            <hr>
        </div>
      <?php endforeach; ?>
    <?php } else { ?>
        <p class="text-warning">PO Is Not Add</p>
    <?php } ?>
      </div>
    </div>
</div><!-- end col -->
