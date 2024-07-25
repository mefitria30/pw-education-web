<?= form_open('auth/processLogin'); ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Edu Web UNSIA | LOGIN</div>
        <?= $this->session->flashdata('pesan') ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email_user">Email Address</label>
                    <input type="email" class="form-control" name="email_user" id="email_user"
                        placeholder="Enter Email">
                    <small id="emailHelp2" class="form-text text-muted">We'll never share
                        your email with anyone else.</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="password_user">Password</label>
                    <input type="password" class="form-control" id="password_user" placeholder="Enter Password"
                        name="password_user">
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Login">
        <a href="<?= site_url('auth/register') ?>" class="btn btn-secondary btn-lg btn-block">Register?</a>
    </div>
</div>
<?= form_close(); ?>