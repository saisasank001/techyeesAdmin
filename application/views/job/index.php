<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jobs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('job/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Status</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($jobs as $j){ ?>
                    <tr>
						<td><?php echo $j['id']; ?></td>
						<td><?php echo $j['user_id']; ?></td>
						<td><?php echo $j['status']; ?></td>
						<td><?php echo $j['title']; ?></td>
						<td><?php echo $j['description']; ?></td>
						<td><?php echo $j['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('job/edit/'.$j['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('job/remove/'.$j['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
