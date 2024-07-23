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
                        <th>Status</th>
                        <th>Tanggal Dibuat</th>
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
                            <?php 
                                if($key->status == 'approved'){
                                    echo 'Approved';
                                }else if ($key->status == 'rejected'){
                                    'Rejected';
                                } else if ($key->status == 'verification') {
                                    'Verification';
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
                            <a href="<?= site_url('materi/delete/'.$key->id_materi) ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>

</div>