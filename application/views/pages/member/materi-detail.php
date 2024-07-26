				<div class="card">
				    <div class="page-inner py-5">
				        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				            <div class="ml-md-auto py-2 py-md-0">
				                <a href="<?= site_url('member/detailMateriKelas/'.$dataMateri->id_kelas)?>"
				                    class="btn btn-info btn-round">List Materi</a>
				            </div>
				        </div>
				    </div>
				    <div class="card-body">
				        <div class="row">
				            <div class="col-md-8">
				                <div class="card card-primary bg-primary-gradient">
				                    <div class="card-body">
				                        <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold"><?= $dataMateri->judul_materi; ?></h4>
				                        <h1 class="mb-4 fw-bold"><?= $dataMateri->isi_materi; ?></h1>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4">
				                <div class="card">
				                    <div class="card-header">
				                        <div class="card-title">Attachment</div>
				                    </div>
				                    <div class="card-body pb-0">
				                        <div class="d-flex">
				                            <?php if(empty($dataMateri->file)) {?>
				                            <img src="<?= base_url('./uploads/no-image.jpg'); ?>" class="img-fluid" width="50%">
				                            <?php } else {?>
				                            <img src="<?= base_url('./uploads/'.$dataMateri->file); ?>" class="img-fluid"
				                                width="50%">
				                            <?php } ?>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>