<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Course Slots Dates Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('course_slots_date/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Course Id</th>
						<th>Date</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($course_slots_dates as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['course_id']; ?></td>
						<td><?php echo $c['date']; ?></td>
						<td><?php echo $c['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('course_slots_date/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('course_slots_date/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
