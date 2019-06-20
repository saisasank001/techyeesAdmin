<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Course Topics Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('course_topic/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>CourseId</th>
						<th>Points</th>
						<th>Timestamp</th>
						<th>Title</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($course_topics as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['courseId']; ?></td>
						<td><?php echo $c['points']; ?></td>
						<td><?php echo $c['timestamp']; ?></td>
						<td><?php echo $c['title']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('course_topic/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('course_topic/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
