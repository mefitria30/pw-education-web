<div class="card">
    <div class="card-header">
        <div class="card-title">
            <button type="button" class="btn btn-primary btn-border btn-round" data-toggle="modal"
                data-target="#kelasModal" onclick="tambahKelas()">
                Buat Kelas
            </button>
        </div>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan') ?>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kelas</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($kelas as $kls) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?php echo $kls->nama_kelas; ?></td>
                        <td><?php echo $kls->deskripsi; ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#kelasModal"
                                onclick="editKelas(<?php echo $kls->id_kelas; ?>)">Edit</button>
                            <a href="<?php echo site_url('Kelas/hapus/' . $kls->id_kelas); ?>" class="btn btn-danger"
                                onclick="return confirmHapus(event, '<?php echo $kls->nama_kelas; ?>')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="kelasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Buat Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open('', array('id' => 'kelasForm')); ?>
                <input type="hidden" name="id_kelas" id="id_kelas" />
                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="simpanKelas()">Simpan</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    $('#kelasTable').DataTable();
});

function tambahKelas() {
    $('#modalTitle').text('Buat Kelas');
    $('#kelasForm').attr('action', '<?php echo site_url('Kelas/buat'); ?>');
    $('#id_kelas').val('');
    $('#nama_kelas').val('');
    $('#deskripsi').val('');
}

function editKelas(id) {
    $('#modalTitle').text('Edit Kelas');
    $.ajax({
        url: '<?php echo site_url('Kelas/edit/'); ?>' + id,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#kelasForm').attr('action', '<?php echo site_url('Kelas/edit/'); ?>' + id);
            $('#id_kelas').val(data.id_kelas);
            $('#nama_kelas').val(data.nama_kelas);
            $('#deskripsi').val(data.deskripsi);
        }
    });
}

function simpanKelas() {
    $('#kelasForm').submit();
}

function confirmHapus(event, namaKelas) {
    event.preventDefault();
    var urlToRedirect = event.currentTarget.getAttribute('href');
    var result = confirm("Apakah Anda yakin ingin menghapus kelas " + namaKelas + "?");
    if (result) {
        window.location.href = urlToRedirect;
    }
}
</script>