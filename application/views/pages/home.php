<!-- <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Cras justo odio
        <span class="badge badge-primary badge-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Dapibus ac facilisis in
        <span class="badge badge-primary badge-pill">2</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Morbi leo risus
        <span class="badge badge-primary badge-pill">1</span>
    </li>
</ul> -->

<div class="row">
    <div class="col-md-6">
        <div class="card full-height">
            <div class="card-body">
                <div class="card-title">Data Master</div>
                <div class="row py-3">
                    <div class="col-md-4 d-flex flex-column justify-content-around">
                        <div>
                            <h6 class="fw-bold text-uppercase text-success op-8">Data Pelajaran</h6>
                            <?php foreach ($jmlPelajaran as $key) { ?>
                            <h3 class="fw-bold"><?= $key->jml_pelajaran ?></h3>
                            <?php }?>
                        </div>

                    </div>

                    <div class="col-md-4 d-flex flex-column justify-content-around">
                        <div>
                            <h6 class="fw-bold text-uppercase text-danger op-8">Data User</h6>
                            <?php foreach ($jmlUser as $key) { ?>
                            <h3 class="fw-bold"><?= $key->jml_user ?></h3>
                            <?php }?>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex flex-column justify-content-around">
                        <div>
                            <h6 class="fw-bold text-uppercase text-info op-8">Data Kelas</h6>
                            <?php foreach ($jmlKelas as $key) { ?>
                            <h3 class="fw-bold"><?= $key->jml_kelas ?></h3>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="card-title">Data Transaksi</div>
                <div class="row py-3">
                    <div class="col-md-4 d-flex flex-column justify-content-around">
                        <div>
                            <h6 class="fw-bold text-uppercase text-success op-8">Approved</h6>
                            <?php foreach ($jmlApproved as $key) { ?>
                            <h3 class="fw-bold"><?= $key->cntApproved ?></h3>
                            <?php }?>
                        </div>

                    </div>

                    <div class="col-md-4 d-flex flex-column justify-content-around">
                        <div>
                            <h6 class="fw-bold text-uppercase text-danger op-8">Rejected</h6>
                            <?php foreach ($jmlRejected as $key) { ?>
                            <h3 class="fw-bold"><?= $key->cntRejected ?></h3>
                            <?php }?>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex flex-column justify-content-around">
                        <div>
                            <h6 class="fw-bold text-uppercase text-info op-8">Verification</h6>
                            <?php foreach ($jmlVerification as $key) { ?>
                            <h3 class="fw-bold"><?= $key->cntVerification ?></h3>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card full-height">
            <div class="card-header">
                <div class="card-title">Member of Group:</div>
            </div>
            <div class="card-body">
                <ol class="activity-feed">
                    <li class="feed-item feed-item-secondary">
                        <time class="date" datetime="9-25">220401010002</time>
                        <span class="text">AZMI</span>
                    </li>
                    <li class="feed-item feed-item-success">
                        <time class="date" datetime="9-24">230401020051</time>
                        <span class="text">FITRIA MELLIYANNI</span>
                    </li>
                    <li class="feed-item feed-item-info">
                        <time class="date" datetime="9-23">220401010004</time>
                        <span class="text">SITI NURLIA KILMAS</span>
                    </li>
                    <li class="feed-item feed-item-warning">
                        <time class="date" datetime="9-21">220401010239</time>
                        <span class="text">YAFI IRSYAD RAMADHAN</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>