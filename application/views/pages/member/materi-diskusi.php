<div class="card">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div class="ml-md-auto py-2 py-md-0">
                <a href="<?= site_url('member/detailMateri/'.$dataMateri)?>" class="btn btn-info btn-round">Detail
                    Materi</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="card-title fw-mediumbold">Suggested People</div>
        <div class="card-list">
            <?php foreach ($materiDiskusi as $row) : ?>
            <div class="item-list">
                <div class="avatar">
                    <img src="<?= base_url('./uploads/logo-unsia.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info-user ml-3">
                    <div class="username"><b><?= $row->nama_user?></b> -
                        <?php 
                            $dtDate =  $row->created_at;
                            echo date("d M Y", strtotime($dtDate));
                        ?>
                    </div>
                    <div class="status"><?= $row->txt_diskusi?></div>
                </div>
                <a href="<?= site_url('member/delete_diskusi/'.$row->id_diskusi.'/'.$dataMateri) ?>"
                    class="btn btn-icon btn-primary btn-round btn-xs">
                    <i class="fa fa-trash"></i>
                </a>
            </div>
            <?php endforeach; ?>
            <?= form_open('member/add_diskusi') ?>

            <div class="form-group">
                <input type="textarea" class="form-control" name="txt_diskusi" id="txt_diskusi" required>
            </div>

            <input type="hidden" class="form-control" name="id_user" id="id_user"
                value="<?= $this->session->userdata('id_user'); ?>">

            <input type="hidden" class="form-control" name="id_materi" id="id_materi" value="<?= $dataMateri; ?>">

            <div class="form-group">
                <input type="submit" class="btn btn-info" name="submit" value="Kirim Diskusi">
            </div>

        </div>
        <?= form_close() ?>
    </div>
</div>
</div>