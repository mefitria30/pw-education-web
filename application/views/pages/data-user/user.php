<div class="card">
    <div class="card-header">
        <div class="card-title">
            <a href="<?= site_url('user/add')?>" class="btn btn-primary btn-border btn-round">Add User</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (!empty($dataUser)) {
                        $no = 1;
                        foreach ($dataUser as $user) { 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $user->nama_user; ?></td>
                        <td><?= $user->email_user; ?></td>
                        <td>
                            <?php 
                                if($user->level_user == 'admin'){
                                    echo 'Admin';
                                }else if ($user->level_user == 'user'){
                                    echo 'User';
                                }
                            ?>
                        </td>
                        <td>
                            <a href="<?= site_url('user/edit/'.$user->id_user) ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('user/delete/'.$user->id_user) ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    } else {
                        echo '<tr><td colspan="6" class="text-center">No data available</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>