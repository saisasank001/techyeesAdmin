<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Add</h3>
            </div>
            <?php echo form_open('course/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="points" class="control-label">Points</label>
						<div class="form-group">
							<input type="text" name="points" value="<?php echo $this->input->post('points'); ?>" class="form-control" id="points" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userId" class="control-label">UserId</label>
						<div class="form-group">
							<input type="text" name="userId" value="<?php echo $this->input->post('userId'); ?>" class="form-control" id="userId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo $this->input->post('timestamp'); ?>" class="form-control" id="timestamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<textarea name="title" class="form-control" id="title"><?php echo $this->input->post('title'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label">Image</label>
						<div class="form-group">
							<textarea name="image" class="form-control" id="image"><?php echo $this->input->post('image'); ?></textarea>
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