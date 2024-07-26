        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url();?>/assets/img/user.jpg" alt="..."
                                class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a href="<?= site_url('home'); ?>">
                                <span>
                                    <?= $this->session->userdata('nama_user'); ?>
                                    <span class=" user-level">
                                        <?php 
                                            if ($this->session->userdata('level_user') == 'admin'){
                                                echo 'Admin';
                                            }else if ($this->session->userdata('level_user') == 'user'){
                                                echo 'User';
                                            }
                                        ?>
                                    </span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="<?= site_url('home') ?>">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Master Data</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?= site_url('user') ?>">
                                            <span class="sub-item">Data User</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('kelas') ?>">
                                            <span class="sub-item">Data Kelas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('pelajaran') ?>">
                                            <span class="sub-item">Data Pelajaran</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('materi') ?>">
                                <i class="fas fa-pen-square"></i>
                                <p>Data Transaksi Materi</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>