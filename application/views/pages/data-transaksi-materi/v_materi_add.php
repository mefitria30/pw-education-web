<?= form_open('materi/addprocess') ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Form Add Data Materi</div>

        <?= $this->session->flashdata('pesan'); ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="judul_materi">Judul Materi</label>
                    <input type="text" class="form-control" name="judul_materi" id="judul_materi" value="">
                </div>

                <div class="form-group">
                    <label for="isi_materi">Isi Materi</label>
                    <textarea name="isi_materi" id="isi_materi" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-success" name="submit" value="Submit">
        <a href="<?= site_url('materi')?>" class="btn btn-danger">Cancel</a>
    </div>
</div>
<?= form_close() ?>