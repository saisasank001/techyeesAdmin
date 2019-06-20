<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Password</th>
						<th>Username</th>
						<th>Phone</th>
						<th>PassedYear</th>
						<th>Wallet</th>
						<th>Timestamp</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>City</th>
						<th>CollegeName</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td><?php echo $u['username']; ?></td>
						<td><?php echo $u['phone']; ?></td>
						<td><?php echo $u['passedYear']; ?></td>
						<td><?php echo $u['wallet']; ?></td>
						<td><?php echo $u['timestamp']; ?></td>
						<td><?php echo $u['firstName']; ?></td>
						<td><?php echo $u['lastName']; ?></td>
						<td><?php echo $u['city']; ?></td>
						<td><?php echo $u['collegeName']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
