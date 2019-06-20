<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Build Startup Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('build_startup/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Status</th>
						<th>Timestamp</th>
						<th>Title</th>
						<th>Idea</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($build_startup as $b){ ?>
                    <tr>
						<td><?php echo $b['id']; ?></td>
						<td><?php echo $b['user_id']; ?></td>
						<td><?php echo $b['status']; ?></td>
						<td><?php echo $b['timestamp']; ?></td>
						<td><?php echo $b['title']; ?></td>
						<td><?php echo $b['idea']; ?></td>
						<td><?php echo $b['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('build_startup/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('build_startup/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
