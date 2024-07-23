<?= form_open('materi/edit/'.$dataMateri->id_materi) ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Form Edit Data Materi</div>

        <!-- <?= $this->session->flashdata('pesan'); ?> -->
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="id_kelas">Kelas</label>
                    <select class="form-control" name="id_kelas" id="id_kelas" required>
                        <?php foreach($kelas as $row) {?>

                        <option value="<?php echo $row->id_kelas; ?>"
                            <?php if($row->id_kelas==$dataMateri->id_kelas) echo 'selected="selected"'; ?>>
                            <?php echo $row->nama_kelas; ?></option>

                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_pelajaran">Pelajaran</label>
                    <select class="form-control" name="id_pelajaran" id="id_pelajaran" required>
                        <?php foreach($pelajaran as $row) {?>

                        <option value="<?php echo $row->id_pelajaran; ?>"
                            <?php if($row->id_pelajaran==$dataMateri->id_pelajaran) echo 'selected="selected"'; ?>>
                            <?php echo $row->nama_pelajaran; ?></option>

                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="judul_materi">Judul Materi</label>
                    <input type="text" class="form-control" name="judul_materi" id="judul_materi"
                        value="<?= $dataMateri->judul_materi; ?>" required>
                </div>

                <div class="form-group">
                    <label for="isi_materi">Isi Materi</label>
                    <textarea name="isi_materi" id="isi_materi" class="form-control" cols="30" rows="10"
                        required><?= $dataMateri->isi_materi; ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-success" name="edit" value="Submit">
        <a href="<?= site_url('materi')?>" class="btn btn-danger">Cancel</a>
    </div>
</div>
<?= form_close() ?>