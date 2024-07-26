				<div class="card">
				    <div class="page-inner py-5">
				        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

				            <div class="ml-md-auto py-2 py-md-0">
				                <a href="<?= site_url('member')?>" class="btn btn-info btn-round">List Kelas</a>
				            </div>
				        </div>
				    </div>
				    <div class="card-body">
				        <div class="ml-md-auto py-2 py-md-0">

				        </div>

				        <div class="chart-container" style="min-height: 375px">
				            <table id="example" style="width:100%">
				                <thead>
				                    <tr>
				                        <th>List Data Materi</th>
				                    </tr>
				                </thead>
				                <tbody>
				                    <?php foreach ($materiKelas as $row) : ?>
				                    <tr>
				                        <td>
				                            <div class="card card-profile">
				                                <div class="card-header">
				                                    <div class="profile-picture">
				                                        <div class="avatar avatar-xl">
				                                            <img src="<?= base_url('./uploads/logo-unsia.jpg'); ?>" alt="..."
				                                                class="avatar-img rounded-circle">
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="card-body">
				                                    <div class="user-profile text-center">
				                                        <div class="name"><?= $row->judul_materi?></div>
				                                        <div class="job"><?= $row->nama_kelas?></div>
				                                        <div class="desc"><?= $row->nama_pelajaran?></div>
				                                        <div class="view-profile">
				                                            <a href="<?= site_url('member/detailMateri/'.$row->id_materi) ?>"
				                                                class="btn btn-info btn-block">Detail Materi</a>
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="card-footer">
				                                    <div class="row user-stats text-center">
				                                        <div class="col">
				                                            <div class="number">Created At</div>
				                                            <div class="title">
				                                                <?php 
                                                    $dtDate =  $row->tanggal_dibuat;
                                                    echo date("d M Y", strtotime($dtDate));
                                                ?>
				                                            </div>
				                                        </div>
				                                        <div class="col">
				                                            <div class="number">Created By</div>
				                                            <div class="title"><b><?= $row->nama_user?></b></div>
				                                        </div>
				                                    </div>
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