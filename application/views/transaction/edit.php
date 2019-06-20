<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Transaction Edit</h3>
            </div>
			<?php echo form_open('transaction/edit/'.$transaction['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userId" class="control-label">UserId</label>
						<div class="form-group">
							<input type="text" name="userId" value="<?php echo ($this->input->post('userId') ? $this->input->post('userId') : $transaction['userId']); ?>" class="form-control" id="userId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="amount" class="control-label">Amount</label>
						<div class="form-group">
							<input type="text" name="amount" value="<?php echo ($this->input->post('amount') ? $this->input->post('amount') : $transaction['amount']); ?>" class="form-control" id="amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $transaction['type']); ?>" class="form-control" id="type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $transaction['timestamp']); ?>" class="form-control" id="timestamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transactionMessage" class="control-label">TransactionMessage</label>
						<div class="form-group">
							<textarea name="transactionMessage" class="form-control" id="transactionMessage"><?php echo ($this->input->post('transactionMessage') ? $this->input->post('transactionMessage') : $transaction['transactionMessage']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>