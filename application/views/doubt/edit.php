<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Doubt Edit</h3>
            </div>
			<?php echo form_open('doubt/edit/'.$doubt['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $doubt['user_id']); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $doubt['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<textarea name="title" class="form-control" id="title"><?php echo ($this->input->post('title') ? $this->input->post('title') : $doubt['title']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idea" class="control-label">Idea</label>
						<div class="form-group">
							<textarea name="idea" class="form-control" id="idea"><?php echo ($this->input->post('idea') ? $this->input->post('idea') : $doubt['idea']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label">Image</label>
						<div class="form-group">
							<textarea name="image" class="form-control" id="image"><?php echo ($this->input->post('image') ? $this->input->post('image') : $doubt['image']); ?></textarea>
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