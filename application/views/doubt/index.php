<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Doubts Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('doubt/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                    <?php foreach($doubts as $d){ ?>
                    <tr>
						<td><?php echo $d['id']; ?></td>
						<td><?php echo $d['user_id']; ?></td>
						<td><?php echo $d['status']; ?></td>
						<td><?php echo $d['title']; ?></td>
						<td><?php echo $d['idea']; ?></td>
						<td><?php echo $d['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('doubt/edit/'.$d['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('doubt/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
