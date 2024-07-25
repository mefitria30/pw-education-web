            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue2">
                <a href="<?= site_url() ?>" class="logo">
                    <i class="Flaticon-multimedia navbar-brand" style="color:white; font-weight:bold">Edu Web</i>
                </a>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="<?= site_url('member') ?>"
                                aria-expanded="false">
                                <i class="fas fa-layer-group"></i> Data Materi
                            </a>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?= base_url();?>/assets/img/user.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?= base_url();?>/assets/img/user.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?= $this->session->userdata('nama_user'); ?></h4>
                                                <p class="text-muted"><?= $this->session->userdata('email_user'); ?></p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->