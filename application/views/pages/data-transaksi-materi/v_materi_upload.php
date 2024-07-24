<?php if (isset($error)){
    echo '<div class="alert alert-success">'.$error.'</div>';
} ?>
<?= form_open_multipart('materi/formUpload/'.$dataMateri->id_materi) ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Upload Attachment Data Materi</div>

        <!-- <?= $this->session->flashdata('pesan'); ?> -->
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">

                <div class="form-group">
                    <label for="judul_materi">Judul Materi</label>
                    <input type="text" class="form-control" name="judul_materi" id="judul_materi"
                        value="<?= $dataMateri->judul_materi; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="file">Attachment</label>
                    <input type="file" class="form-control" name="file" id="file">
                </div>

            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-success" name="upload" value="Upload">
        <a href="<?= site_url('materi')?>" class="btn btn-danger">Cancel</a>
    </div>
</div>
<?= form_close() ?>