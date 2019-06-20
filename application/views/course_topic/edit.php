<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Topic Edit</h3>
            </div>
			<?php echo form_open('course_topic/edit/'.$course_topic['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseId" class="control-label">CourseId</label>
						<div class="form-group">
							<input type="text" name="courseId" value="<?php echo ($this->input->post('courseId') ? $this->input->post('courseId') : $course_topic['courseId']); ?>" class="form-control" id="courseId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="points" class="control-label">Points</label>
						<div class="form-group">
							<input type="text" name="points" value="<?php echo ($this->input->post('points') ? $this->input->post('points') : $course_topic['points']); ?>" class="form-control" id="points" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<textarea name="title" class="form-control" id="title"><?php echo ($this->input->post('title') ? $this->input->post('title') : $course_topic['title']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $course_topic['description']); ?></textarea>
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