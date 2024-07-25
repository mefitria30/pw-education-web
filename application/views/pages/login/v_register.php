<?= form_open('auth/add_process') ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Edu Web UNSIA | REGISTER</div>
        <?= $this->session->flashdata('pesan') ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <!-- Nama User -->
                <div class="form-group">
                    <label for="nama_user">Name</label>
                    <input type="text" class="form-control" name="nama_user" id="nama_user" required>
                </div>

                <!-- Email User -->
                <div class="form-group">
                    <label for="email_user">Email</label>
                    <input type="email" class="form-control" name="email_user" id="email_user" required>
                </div>

                <!-- Password User -->
                <div class="form-group">
                    <label for="password_user">Password</label>
                    <input type="password" class="form-control" name="password_user" id="password_user" required>
                </div>

                <!-- Level User -->
                <div class="form-group">
                    <input type="hidden" class="form-control" name="level_user" id="level_user" value="user">
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-info btn-lg btn-block" name="submit" value="Register">
        <a href="<?= site_url('auth') ?>" class="btn btn-danger btn-lg btn-block">Cancel</a>
    </div>
</div>
<?= form_close() ?>