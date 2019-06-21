<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Points Assignment Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="user_id" class="control-label">User ID</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="username" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="wallet" class="control-label">Wallet</label>
						<div class="form-group">
							<input type="text" name="wallet" value="<?php echo $this->input->post('wallet'); ?>" class="form-control" id="wallet" />
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