<?= form_open('user/edit_process/' . $user->id_user) ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Form Edit User</div>
        <?= $this->session->flashdata('pesan'); ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <!-- Nama User -->
                <div class="form-group">
                    <label for="nama_user">Name</label>
                    <input type="text" class="form-control" name="nama_user" id="nama_user"
                        value="<?= $user->nama_user ?>" required>
                </div>

                <!-- Email User -->
                <div class="form-group">
                    <label for="email_user">Email</label>
                    <input type="email" class="form-control" name="email_user" id="email_user"
                        value="<?= $user->email_user ?>" required>
                </div>

                <!-- Password User -->
                <div class="form-group">
                    <label for="password_user">Password</label>
                    <input type="password" class="form-control" name="password_user" id="password_user">
                    <small>Leave blank if not changing</small>
                </div>

                <!-- Level User -->
                <div class="form-group">
                    <label for="level_user">User Level</label>
                    <select class="form-control" name="level_user" id="level_user" required>
                        <option value="admin" <?= $user->level_user == 'admin' ? 'selected' : '' ?>>Admin</option>
                        <option value="user" <?= $user->level_user == 'user' ? 'selected' : '' ?>>User</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-success" name="submit" value="Submit">
        <a href="<?= site_url('user') ?>" class="btn btn-danger">Cancel</a>
    </div>
</div>
<?= form_close() ?>