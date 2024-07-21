<?= form_open('pelajaran/editprocess/' . $pelajaran->id_pelajaran) ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Form Edit Pelajaran</div>
        <?= $this->session->flashdata('pesan'); ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <!-- kode pelajaran -->
                <div class="form-group">
                    <label for="judul_materi">Kode Pelajaran</label>
                    <input type="text" class="form-control" name="kode_pelajaran" id="kd_pelajaran" value="<?php echo $pelajaran->kode_pelajaran; ?>" required>
                </div>

                <!-- nama pelajaran -->
                <div class="form-group">
                    <label for="nama_pelajaran">Nama Pelajaran</label>
                    <input type="text" class="form-control" name="nama_pelajaran" id="nm_pelajaran" value="<?php echo $pelajaran->nama_pelajaran; ?>" required>
                </div>

                <!-- deskripsi -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"><?php echo $pelajaran->deskripsi; ?></textarea>
                </div>

                <!-- kategori -->
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori" required>
                        <option value="Ilmu Komputer" <?= $pelajaran->kategori == 'Ilmu Komputer' ? 'selected' : '' ?>>Ilmu Komputer</option>
                        <option value="Ekonomi" <?= $pelajaran->kategori == 'Ekonomi' ? 'selected' : '' ?>>Ekonomi</option>
                        <option value="Bahasa" <?= $pelajaran->kategori == 'Bahasa' ? 'selected' : '' ?>>Bahasa</option>
                    </select>
                </div>

                <!-- pengajar -->
                <div class="form-group">
                    <label for="pengajar">Pengajar</label>
                    <input type="text" class="form-control" name="pengajar" id="pengajar" value="<?php echo $pelajaran->pengajar; ?>" required>
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <input type="submit" class="btn btn-success" name="submit" value="Submit">
        <a href="<?= site_url('pelajaran')?>" class="btn btn-danger">Cancel</a>
    </div>
</div>
<?= form_close() ?>
