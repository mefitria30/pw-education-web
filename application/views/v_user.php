<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Education Web UNSIA</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url();?>/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url();?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/fonts.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/demo.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap4.css">
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js">
    </script>
</head>

<body>
    <div class="wrapper overlay-sidebar">
        <div class="main-header">
            <?php require_once(APPPATH.'/views/pages-components-member/main-header.php'); ?>
        </div>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold"><?= $title?></h2>
                                <h5 class="text-white op-7 mb-2"><?= $this->session->userdata('nama_user'); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-inner mt--5">
                    <div class="row row-card-no-pd mt--2">
                        <div class="col-md-12">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <?php require_once(APPPATH.'/views/pages-components-member/footer.php'); ?>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url();?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url();?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url();?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url();?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url();?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="<?= base_url();?>/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url();?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url();?>/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <!-- <script src="<?= base_url();?>/assets/js/plugin/datatables/datatables.min.js"></script> -->

    <!-- Data Table -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap4.js"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= base_url();?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url();?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url();?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url();?>/assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <!-- <script src="<?= base_url();?>/assets/js/setting-demo.js"></script>
    <script src="<?= base_url();?>/assets/js/demo.js"></script> -->

    <script>
    new DataTable('#example');
    </script>

    <script>
    ClassicEditor
        .create(document.querySelector('#isi_materi'))
        .catch(error => {
            console.error(error);
        });
    </script>

    <script>
    $('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#177dff',
        fillColor: 'rgba(23, 125, 255, 0.14)'
    });

    $('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#f3545d',
        fillColor: 'rgba(243, 84, 93, .14)'
    });

    $('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
    </script>
</body>

</html>