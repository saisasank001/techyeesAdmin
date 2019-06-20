<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Workshops Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('workshop/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                    <?php foreach($workshops as $w){ ?>
                    <tr>
						<td><?php echo $w['id']; ?></td>
						<td><?php echo $w['user_id']; ?></td>
						<td><?php echo $w['status']; ?></td>
						<td><?php echo $w['title']; ?></td>
						<td><?php echo $w['description']; ?></td>
						<td><?php echo $w['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('workshop/edit/'.$w['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('workshop/remove/'.$w['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
