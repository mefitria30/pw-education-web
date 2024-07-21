<div class="card">
    <div class="card-header">
        <div class="card-title">
            <a href="<?= site_url('pelajaran/add')?>" class="btn btn-primary btn-border btn-round">Add Data</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Pelajaran</th>
                        <th>Nama Pelajaran</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Pengajar</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                                $no = 1;
                                foreach ($pelajaran as $pelaajaran) { 
                    ?>
                    <tr>
                        <td>
                            <?= $no++; ?>
                        </td>
                        <td>
                            <?= $pelaajaran->kode_pelajaran; ?>
                        </td>
                        <td>
                            <?= $pelaajaran->nama_pelajaran; ?>
                        </td>
                        <td>
                            <?= $pelaajaran->deskripsi; ?>
                        </td>
                        <td>
                            <?= $pelaajaran->kategori; ?>
                        </td>
                        <td>
                            <?= $pelaajaran->pengajar; ?>
                        </td>
                        <td>                            
                            <a href="<?= site_url('pelajaran/edit/'.$pelaajaran->id_pelajaran) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('pelajaran/delete/'.$pelaajaran->id_pelajaran) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                        </td>

                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>

</div>