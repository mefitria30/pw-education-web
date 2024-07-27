					<div class="row">
					    <div class="col-md-7">
					        <div class="card">
					            <div class="card-header">
					                <div class="card-title">Form Approve Detail Materi</div>
					            </div>
					            <div class="card-body pb-0">
					                <?php 
                                        $no = 1;
                                        foreach ($dataMateri as $key) { 
                                    ?>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Nama Kelas</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold"><?= $key->nama_kelas ?></h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Nama Pelajaran</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold"><?= $key->nama_pelajaran ?></h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Pengaju</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold"><?= $key->pengaju ?></h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Judul Materi</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold"><?= $key->judul_materi ?></h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Judul Materi</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold"><?= $key->isi_materi ?></h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Status</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold">
					                            <?php 
                                                    if($key->status == 'approved'){
                                                        echo 'Approved';
                                                    }else if ($key->status == 'rejected'){
                                                        echo 'Rejected';
                                                    } else if ($key->status == 'verification') {
                                                        echo 'Verification';
                                                    } 
                                                ?>
					                        </h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Tanggal Dibuat</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold">
					                            <?php
                                                    $dtDate =  $key->tanggal_dibuat;
                                                    echo date("d M Y", strtotime($dtDate)); 
                                                ?>
					                        </h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <?php }?>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-5">
					        <div class="card">
					            <div class="card-body">
					                <div class="mapcontainer">
					                    <?php if(empty($dataMateri->file)) {?>
					                    <img src="<?= base_url('./uploads/no-image.jpg'); ?>" class="img-fluid" width="100%">
					                    <?php } else {?>
					                    <img src="<?= base_url('./uploads/'.$dataMateri->file); ?>" class="img-fluid" width="100%">
					                    <?php } ?>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>