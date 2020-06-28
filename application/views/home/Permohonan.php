<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">


                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Permohonan
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('') ?>TugasAkhir/Permohonan">Pengajuan Permohonan</a>
                                        <a class="dropdown-item" href="<?= base_url('') ?>TugasAkhir/DataPermohonan">Data Pengajuan Permohonan</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Kontak Kami</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="<?= base_url('') ?>">PPID Kota banjar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <br><br><br><br><br><br>


    <div class="card-body">

        <form action="<?= base_url('') ?>querylazismu/tambah_pegawai" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIK Pemohon</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Nama Pemohon</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon Pemohon</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Email Pemohon</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Kategori Pemohon</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Informasi Yang Dibutuhkan</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Tujuan Penggunaan Informasi</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Dinas / Tujuan Permohonan Informasi</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Cara Memperoleh Informasi</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Cara Mendapatkan Salinan Informasi</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap Pemohon</label>
                        <textarea type="text" rows="4" name="ket" id="ket" class="form-control" placeholder=""></textarea>
                    </div>
                </div>
            </div>

            <div class="input-grup mb-3"></div>
            <div class="input-grup">
                <button type="submit" class="btn btn-primary btn-block">Ajukan Permohonan</button>
                <!-- /.col -->
            </div>

        </form>
    </div>

    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?= base_url() ?>assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?>assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?>assets/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?>assets/js/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>