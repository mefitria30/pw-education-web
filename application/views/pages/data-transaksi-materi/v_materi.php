<div class="card">
    <div class="card-header">
        <div class="card-title">
            <a href="<?= site_url('materi/add')?>" class="btn btn-primary btn-border btn-round">Add Data</a>
        </div>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan') ?>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Kelas</th>
                        <th>Pelajaran</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($dataMateri as $key) { 
                    ?>
                    <tr>
                        <td>
                            <?= $no++; ?>
                        </td>
                        <td>
                            <?= $key->judul_materi ?>
                        </td>
                        <td>
                            <?= $key->nama_kelas ?>
                        </td>
                        <td>
                            <?= $key->nama_pelajaran ?>
                        </td>
                        <td>
                            <?php 
                                if($key->status == 'approved'){
                                    echo 'Approved';
                                }else if ($key->status == 'rejected'){
                                    echo 'Rejected';
                                } else if ($key->status == 'verification') {
                                    echo 'Verification';
                                } 
                            ?>
                        </td>
                        <td>
                            <?php 
                                $dtDate =  $key->tanggal_dibuat;
                                echo date("Y-m-d", strtotime($dtDate));
                            ?>
                        </td>
                        <td>
                            <a href="<?= site_url('materi/formUpload/'.$key->id_materi) ?>" class="btn btn-success">
                                <i class="fa fa-camera"></i>
                            </a>

                            <a href="<?= site_url('materi/edit/'.$key->id_materi) ?>" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="<?= site_url('materi/delete/'.$key->id_materi) ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>

                            <a href="<?= site_url('materi/formApprove/'.$key->id_materi) ?>" class="btn btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>

</div>