<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Slots Date Edit</h3>
            </div>
			<?php echo form_open('course_slots_date/edit/'.$course_slots_date['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="course_id" class="control-label">Course Id</label>
						<div class="form-group">
							<input type="text" name="course_id" value="<?php echo ($this->input->post('course_id') ? $this->input->post('course_id') : $course_slots_date['course_id']); ?>" class="form-control" id="course_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $course_slots_date['date']); ?>" class="form-control" id="date" />
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