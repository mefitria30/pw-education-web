					<?php 
                        foreach ($dataMateri as $key) { 
                    ?>
					<?= form_open('materi/approveProcess/'.$key->id_materi) ?>

					<div class="row">
					    <div class="col-md-7">
					        <div class="card">
					            <div class="card-header">
					                <div class="card-title">Form Approve Detail Materi</div>
					            </div>
					            <div class="card-body pb-0">


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
					                        <h6 class="fw-bold mb-1">Status</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <div class="form-group text-info fw-bold">
					                            <select class="form-control" name="status" id="status" required>
					                                <option value="approved" <?= $key->status == 'approved' ? 'selected' : '' ?>>
					                                    Approved
					                                </option>
					                                <option value="rejected" <?= $key->status == 'rejected' ? 'selected' : '' ?>>
					                                    Rejected
					                                </option>
					                                <option value="verification"
					                                    <?= $key->status == 'verification' ? 'selected' : '' ?>>Verification
					                                </option>
					                            </select>
					                        </div>

					                        <input type="hidden" class="form-control" name="approver" id="approver"
					                            value="<?= $this->session->userdata('id_user'); ?>">
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

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Approver</h6>
					                    </div>
					                    <div class="d-flex ml-auto align-items-center">
					                        <h3 class="text-info fw-bold">
					                            <?= $key->approver ?>
					                        </h3>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Judul Materi</h6>
					                        <small class="text-muted"><?= $key->judul_materi ?></small>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>

					                <div class="d-flex">
					                    <div class="flex-1 pt-1 ml-2">
					                        <h6 class="fw-bold mb-1">Isi Materi</h6>
					                        <small class="text-muted"><?= $key->isi_materi ?></small>
					                    </div>
					                </div>
					                <div class="separator-dashed"></div>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-5">
					        <div class="card">
					            <div class="card-body">
					                <div class="mapcontainer">
					                    <?php if(empty($key->file)) {?>
					                    <img src="<?= base_url('./uploads/no-image.jpg'); ?>" class="img-fluid" width="100%">
					                    <?php } else {?>
					                    <img src="<?= base_url('./uploads/'.$key->file); ?>" class="img-fluid" width="100%">
					                    <?php } ?>
					                </div>
					            </div>

					            <div class="card-action">

					                <a href="<?= site_url('member/uploadMateriView') ?>" class="btn btn-danger">Back</a>
					            </div>

					        </div>
					    </div>
					</div>
					<?= form_close() ?>
					<?php }?>