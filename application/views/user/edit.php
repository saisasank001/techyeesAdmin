<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $user['phone']); ?>" class="form-control" id="phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="passedYear" class="control-label">PassedYear</label>
						<div class="form-group">
							<input type="text" name="passedYear" value="<?php echo ($this->input->post('passedYear') ? $this->input->post('passedYear') : $user['passedYear']); ?>" class="form-control" id="passedYear" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="wallet" class="control-label">Wallet</label>
						<div class="form-group">
							<input type="text" name="wallet" value="<?php echo ($this->input->post('wallet') ? $this->input->post('wallet') : $user['wallet']); ?>" class="form-control" id="wallet" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $user['timestamp']); ?>" class="has-datetimepicker form-control" id="timestamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="firstName" class="control-label">FirstName</label>
						<div class="form-group">
							<textarea name="firstName" class="form-control" id="firstName"><?php echo ($this->input->post('firstName') ? $this->input->post('firstName') : $user['firstName']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastName" class="control-label">LastName</label>
						<div class="form-group">
							<textarea name="lastName" class="form-control" id="lastName"><?php echo ($this->input->post('lastName') ? $this->input->post('lastName') : $user['lastName']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<textarea name="city" class="form-control" id="city"><?php echo ($this->input->post('city') ? $this->input->post('city') : $user['city']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="collegeName" class="control-label">CollegeName</label>
						<div class="form-group">
							<textarea name="collegeName" class="form-control" id="collegeName"><?php echo ($this->input->post('collegeName') ? $this->input->post('collegeName') : $user['collegeName']); ?></textarea>
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