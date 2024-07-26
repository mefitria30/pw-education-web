<div class="card">
    <div class="card-body">
        <div class="chart-container" style="min-height: 375px">
            <table id="example" style="width:100%">
                <thead>
                    <tr>
                        <th>List Data Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kelas as $kls) : ?>
                    <tr>
                        <td>
                            <div class="card card-post card-round">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="avatar">
                                            <img src="<?= base_url('./uploads/logo-unsia.jpg'); ?>" alt="..."
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="separator-solid"></div>
                                    <h1 class="card-title">
                                        <a href="#">
                                            <?php echo $kls->nama_kelas; ?>
                                        </a>
                                    </h1>
                                    <p class="card-text"><?php echo $kls->deskripsi; ?></p>

                                    <a href="<?= site_url('member/detailMateriKelas/'.$kls->id_kelas) ?>"
                                        class="btn btn-primary btn-rounded btn-sm">
                                        Detail Materi
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>