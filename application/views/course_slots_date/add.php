<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Slots Date Add</h3>
            </div>
            <?php echo form_open('course_slots_date/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="course_id" class="control-label">Course Id</label>
						<div class="form-group">
					<select name="course_id" value="<?php echo $this->input->post('course_id'); ?>" class="form-control" id="course_id" >
							<?php for($i=0; $i<count($data); $i++){?>
							<option value="<?php echo $data[$i]['id'];?>">
							<?php echo $data[$i]['title'];?></option>
							<?php } ?>
					</select>
						</div>
						
						
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />
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