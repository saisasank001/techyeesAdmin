<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">News Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('news/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
						<th>Description</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($news as $n){ ?>
                    <tr>
						<td><?php echo $n['id']; ?></td>
						<td><?php echo $n['user_id']; ?></td>
						<td><?php echo $n['status']; ?></td>
						<td><?php echo $n['timestamp']; ?></td>
						<td><?php echo $n['title']; ?></td>
						<td><?php echo $n['description']; ?></td>
						<td><?php echo $n['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('news/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('news/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
