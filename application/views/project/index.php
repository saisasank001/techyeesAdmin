<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Project Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('project/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Status</th>
						<th>Title</th>
						<th>Idea</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($project as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['user_id']; ?></td>
						<td><?php echo $p['status']; ?></td>
						<td><?php echo $p['title']; ?></td>
						<td><?php echo $p['idea']; ?></td>
						<td><?php echo $p['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('project/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('project/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
