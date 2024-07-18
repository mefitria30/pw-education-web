<div class="card">
    <div class="card-header">
        <div class="card-title">
            <a href="<?= site_url('materi/add')?>" class="btn btn-primary btn-border btn-round">Add Data</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Tanggal Dibuat</th>
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
                            <?= $key->status ?>
                        </td>
                        <td>
                            <?= $key->tanggal_dibuat ?>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>

</div>