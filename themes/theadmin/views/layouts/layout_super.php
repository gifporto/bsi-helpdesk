<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive admin dashboard and web application ui kit." />
    <meta name="keywords" content="dashboard, index, main" />

    <title><?= $title; ?> | Helpdesk BSI</title>

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fustat:wght@200..800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="<?= asset_path('/css/core.min.css', '_theme_') ?>" rel="stylesheet" />
    <link href="<?= asset_path('/css/app.css', '_theme_') ?>" rel="stylesheet" />
    <link href="<?= asset_path('/css/style.css', '_theme_') ?>" rel="stylesheet" />
    <link href="<?= asset_path('/css/custom.css', '_theme_') ?>" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= asset_path('/img/logo-hd-bsi.svg', '_theme_') ?>" />
    <link rel="icon" href="<?= asset_path('/img/logo-hd-bsi.svg', '_theme_') ?>" />

</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar sidebar-light sidebar-expand-lg">
        <header class="sidebar-header justify-content-center align-items-center">
            <div class="m-1" href=""><img src="<?= asset_path('/img/logo-hd-bsi.svg', '_theme_') ?>" alt="logo icon" style="width: 32px;"></div>
            <a class="text1">Helpdesk BSI.</a>
        </header>

        <nav class="sidebar-navigation">
            <ul class="menu menu-sm menu-bordery">

                <li class="menu-item <?= $page_active == 'dashboard' ? 'active' : '' ?>">
                    <a class="menu-link menu-color" href="<?= site_url('super/superadmin'); ?>">
                        <i class="bi bi-grid"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item <?= $page_active == 'laporan' ? 'active' : '' ?>">
                    <a class="menu-link menu-color" href="<?= site_url('super/Pengajuan'); ?>">
                        <i class="bi bi-inboxes-fill"></i>
                        <span class="title">Rekapitulasi</span>
                    </a>
                </li>

                <li class="menu-item <?= $page_active == 'akun' ? 'active' : '' ?>">
                    <a class="menu-link menu-color" href="<?= site_url('super/akun'); ?>">
                        <i class="bi bi-person-gear"></i>
                        <span class="title">Manajemen Akun</span>
                    </a>
                </li>


                <!-- <li class="menu-item <?= $page_active == 'data' ? 'active open' : '' ?>">
          <a class="menu-link menu-color" href="#">
            <i class="bi bi-envelope-paper"></i>
            <span class="title">Data</span>
            <span class="arrow"></span>
          </a>

          <ul class="menu-submenu">
            <?php
            $activeTitles = ['Penawaran CSR', 'Detail'];
            ?>
            <li class="menu-item <?= in_array($title, $activeTitles) ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('staff/Data/penawarancsr'); ?>">
                <span class="dot"></span>
                <span class="title">Penawaran CSR</span>
              </a>
            </li>

            <?php
            $activeTitles = ['Kebutuan Dana CSR', 'Detail'];
            ?>
            <li class="menu-item <?= in_array($title, $activeTitles) ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('staff/Data/kebutuhandanacsr'); ?>">
                <span class="dot"></span>
                <span class="title">Kebutuan dana CSR</span>
              </a>
            </li>

          </ul>
        </li>

        <li class="menu-item <?= $page_active == 'rekapdata' ? 'active open' : '' ?>">
          <a class="menu-link menu-color active" href="#">
            <i class="bi bi-inboxes"></i>
            <span class="title">Rekap Data</span>
            <span class="arrow"></span>
          </a>
          <ul class="menu-submenu">
            <li class="menu-item <?= $title == 'Penawaran per Periode' ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('staff/RekapData/penawaranperperiode'); ?>">
                <span class="dot"></span>
                <span class="title">Penawaran per periode</span>
              </a>
            </li>
            <li class="menu-item <?= $title == 'Usulan Kebutuan Dana CSR per Periode' ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('staff/RekapData/usulandanaperperiode'); ?>">
                <span class="dot"></span>
                <span class="title">Usulan dana per periode</span>
              </a>
            </li>
            <li class="menu-item <?= $title == 'Realisasi' ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('staff/RekapData/realisasi'); ?>">
                <span class="dot"></span>
                <span class="title">Realisasi</span>
              </a>
            </li>
          </ul>
        </li> -->

            </ul>
        </nav>

        <div class="align-items-center">

            <div class="dropdown">
                <div class="card-custom p-2" data-toggle="dropdown">
                    <div class="d-flex">
                        <div class="justify-content-center align-content-center pr-2">
                            <img class="avatar-custom" src="<?= asset_path('/img/avatar/avatar.jpg', '_theme_') ?>" alt="...">
                        </div>
                        <div class="d-flex flex-column align-self-center" style="overflow: hidden;">
                            <span class="fs-7 fw-700 color-dark">Nama Lengkap Pengguna</span>
                            <span class="fs-6 color-dark">Biro Sistem Informasi</sp>
                        </div>
                        <div class="justify-content-center align-content-center m-2">
                            <span class="ti-angle-down dropdown-icon"></span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu open-top-right dropdown-menu-right w-full">
                    <a class="dropdown-item">
                        <div class="p-2">
                            <div class="d-flex">
                                <div class="justify-content-center align-content-center pr-2">
                                    <img class="avatar-custom" src="<?= asset_path('/img/avatar/avatar.jpg', '_theme_') ?>" alt="...">
                                </div>
                                <div class="w-full d-flex flex-column align-self-center">
                                    <span class="fs-7 fw-700 color-dark">Nama Lengkap Pengguna</span>
                                    <span class="fs-6 color-dark">Biro Sistem Informasi</sp>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../page-extra/user-login-3.html"><i class="ti-power-off"></i> Logout</a>
                </div>
            </div>

        </div>
    </aside>
    <!-- END Sidebar -->

    <!-- Topbar -->
    <header class="topbar" id="topbar">
        <div class="topbar-left">
            <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
            <h2 h2 class="fw-700 topbar-title"><?= $title; ?></h2>
        </div>
        <div class="topbar-right">
            <span class="topbar-btn has-new"><i class="bi bi-bell"></i></span>
        </div>
    </header>
    <!-- END Topbar -->

    <!-- Main container -->
    <main class="main-container">
        <div class="main-content">
            <div class="row">
                <?= $template['body']; ?>
            </div>
        </div>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-center text-md-left">
                        Copyright © 2024
                        <a>Helpdesk BSI</a>. All rights
                        reserved.
                    </p>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

    </main>
    <!-- END Main container -->

    <!-- Scripts -->
    <script src="<?= asset_path('/js/core.min.js', '_theme_') ?>"></script>
    <script src="<?= asset_path('/js/app.js', '_theme_') ?>"></script>
    <script src="<?= asset_path('/js/script.js', '_theme_') ?>"></script>
    <script src="<?= asset_path('/js/custom.js', '_theme_') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js"></script>



</body>

</html>