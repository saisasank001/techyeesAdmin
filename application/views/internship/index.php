<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Internships Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('internship/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                    <?php foreach($internships as $i){ ?>
                    <tr>
						<td><?php echo $i['id']; ?></td>
						<td><?php echo $i['user_id']; ?></td>
						<td><?php echo $i['status']; ?></td>
						<td><?php echo $i['title']; ?></td>
						<td><?php echo $i['description']; ?></td>
						<td><?php echo $i['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('internship/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('internship/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
