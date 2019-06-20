<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Courses Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('course/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Points</th>
						<th>UserId</th>
						<th>Timestamp</th>
						<th>Title</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($courses as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['points']; ?></td>
						<td><?php echo $c['userId']; ?></td>
						<td><?php echo $c['timestamp']; ?></td>
						<td><?php echo $c['title']; ?></td>
						<td><?php echo $c['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('course/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('course/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
