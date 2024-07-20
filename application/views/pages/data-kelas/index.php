<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        .table-container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
            padding: 15px;
            background-color: #fff;
        }
        .text-center {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container">
        <!-- <h2>Data Kelas</h2> -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kelasModal" onclick="tambahKelas()">
            Buat Kelas
        </button>
        <div class="table-container">
            <div class="table-responsive">
                <table id="kelasTable" class="display table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Deskripsi</th>
                            <th class="text-center">ID Pengajar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kelas as $kls) : ?>
                            <tr>
                                <td><?php echo $kls->nama_kelas; ?></td>
                                <td><?php echo $kls->deskripsi; ?></td>
                                <td class="text-center"><?php echo $kls->id_user; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#kelasModal" onclick="editKelas(<?php echo $kls->id_kelas; ?>)">Edit</button>
                                    <a href="<?php echo site_url('Kelas/hapus/' . $kls->id_kelas); ?>" class="btn btn-danger" onclick="return confirmHapus(event, '<?php echo $kls->nama_kelas; ?>')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
                        <div class="form-group">
                            <label for="id_user">ID Pengajar</label>
                            <input type="text" name="id_user" id="id_user" class="form-control" />
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

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                $('#id_user').val('');
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
                        $('#id_user').val(data.id_user);
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
    </div>
</body>

</html>