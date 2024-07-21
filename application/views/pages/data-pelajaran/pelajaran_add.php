<?= form_open('pelajaran/addprocess') ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Form Add Pelajaran</div>

        <?= $this->session->flashdata('pesan'); ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                
                <!-- kode pelajaran -->
                <div class="form-group">
                    <label for="judul_materi">Kode Pelajaran</label>
                    <input type="text" class="form-control" name="kode_pelajaran" id="kd_pelajaran" value="" required>
                </div>

                <!-- nama pelajaran -->
                <div class="form-group">
                    <label for="nama_pelajaran">Nama Pelajaran</label>
                    <input type="text" class="form-control" name="nama_pelajaran" id="nm_pelajaran" value="" required>
                </div>

                <!-- nama pelajaran -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi"  cols="30" rows="10"></textarea>
                </div>

                <!-- Kategori -->
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori" required>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Bahasa">Bahasa</option>
                    </select>
                </div>

                <!-- Pengajar -->
                <div class="form-group">
                    <label for="pengajar">Pengajar</label>
                    <input type="text" class="form-control" name="pengajar" id="pengajar" value="" require>
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