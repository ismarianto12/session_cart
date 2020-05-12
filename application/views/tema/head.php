<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $nama ?></title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">

    <!-- Font Awesome JS -->
    <script defer src="<?php echo base_url(); ?>assets/bs/js/solid.js"></script>
    <script defer src="<?php echo base_url(); ?>assets/bs/js/fontawesome.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header sticky-top">
                <a href="<?php echo base_url(); ?>admin">Penginapan Gunung GedePangrango</a>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Input</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo base_url(); ?>admin/tambah_kamar">Tambah Kamar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Laporan</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="<?php echo base_url(); ?>admin/kamar">Kamar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() . 'admin/daftarbooking'?>" onclick = "myFunction()">Data Booking</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/kontak">Kontak</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/tentang">Tentang</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="shadow-lg navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fas fa-align-justify"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url() .'admin'?>" onclick="myFunction()"><i class="fas fa-undo" data-toggle="tooltip" data-placement="top" title="Refresh Halaman"></i></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url(); ?>login/logout"><i class="fas fa-sign-out-alt" data-toggle="tooltip" data-placement="top" title="Logout"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>