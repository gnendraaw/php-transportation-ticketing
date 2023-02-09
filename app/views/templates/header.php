<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ticketing | <?= $data['title'] ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= BASE_URL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= BASE_URL ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= BASE_URL ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ticketing</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if(!isset($_SESSION['user'])): ?>
            <?php elseif($_SESSION['user']['level']=='admin'): ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $data['heading']=='dashboard' && $data['subHeading']=='dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= BASE_URL ?>/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= $data['heading']=='admin' && $data['subHeading']=='petugas' ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminPetugasCollapse"
                    aria-expanded="true" aria-controls="adminPetugasCollapse">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Petugas</span>
                </a>
                <div id="adminPetugasCollapse" class="collapse <?= $data['heading']=='admin' && $data['subHeading']=='petugas' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?=$data['subHeading']=='petugas' && $data['options']=='daftarPetugas' ? 'active' : ''?>" href="<?= BASE_URL ?>/admin/daftarPetugas">Daftar Petugas</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Tiket</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Daftar Tiket</a>
                        <a class="collapse-item" href="#-border.html">Tambah Tiket</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item <?=$data['heading']=='admin' && $data['subHeading']=='transportasi' ? 'active' : ''?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransportasi"
                    aria-expanded="true" aria-controls="collapseTransportasi">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Transportasi</span>
                </a>
                <div id="collapseTransportasi" class="collapse <?=$data['heading']=='admin' && $data['subHeading']=='transportasi' ? 'show' : ''?>" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?=$data['subHeading']=='transportasi' && $data['options']=='daftarTransportasi' ? 'active' : ''?>" href="<?=BASE_URL?>/admin/daftarTransportasi">Daftar Transportasi</a>
                        <a class="collapse-item" href="#">Tipe Transportasi</a>
                    </div>
                </div>
            </li>
            <?php endif ?>

            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'Login' ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?=BASE_URL?>/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php if(!isset($_SESSION['user'])): ?>
                                    <a class="dropdown-item" href="<?=BASE_URL?>/login">
                                        <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Login
                                    </a>
                                <?php else: ?>
                                    <a class="dropdown-item" href="<?=BASE_URL?>/<?=$_SESSION['user']['level']?>/profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                <?php endif ?>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->