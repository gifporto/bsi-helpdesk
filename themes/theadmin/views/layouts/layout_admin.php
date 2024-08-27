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
          <a class="menu-link menu-color" href="<?= site_url('admin/Dashboard'); ?>">
            <i class="bi bi-grid"></i>
            <span class="title">Dashboard</span>
          </a>
        </li>

        <li class="menu-item <?= $page_active == 'pelayanan' ? 'active open' : '' ?>">
          <a class="menu-link menu-color">
            <i class="bi bi-inboxes-fill"></i>
            <span class="title">Pelayanan</span>
            <span class="arrow"></span>
          </a>

          <ul class="menu-submenu">
            <li class="menu-item <?= $title == 'Pelayanan Buku Tamu Pending' ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('admin/pelayanan/index_pending'); ?>">
                <span class="dot"></span>
                <span class="title">Pending</span>
              </a>
            </li>

            <li class="menu-item <?= $title == 'Pelayanan Buku Tamu Selesai' ? 'active' : '' ?>">
              <a class="menu-link" href="<?= site_url('admin/pelayanan/index_selesai'); ?>">
                <span class="dot"></span>
                <span class="title">Selesai</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

    <div class="align-items-center">

      <div class="dropdown">
        <div class="p-2" data-toggle="dropdown">
          <div class="d-flex justify-content-between">
            <div class="d-flex">
              <div class="justify-content-center align-content-center pr-2">
                <img class="avatar-custom" src="<?= asset_path('/img/avatar/avatar.jpg', '_theme_') ?>" alt="...">
              </div>
              <div class="d-flex flex-column align-self-center" style="overflow: hidden;">
                <span class="fs-7 fw-700 color-dark"><?php echo $this->session->userdata('name'); ?></span>
                <span class="fs-6 color-dark">BSI Unit <?php echo $this->session->userdata('unit_bsi'); ?></sp>
              </div>
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
                  <span class="fs-7 fw-700 color-dark"><?php echo $this->session->userdata('name'); ?></span>
                  <span class="fs-6 color-dark"><span class="fw-500">Admin</span> BSI Unit <?php echo $this->session->userdata('unit_bsi'); ?></sp>
                </div>
              </div>
            </div>
          </a>
          <a class="dropdown-item" href="<?= site_url('/guest/login/logout') ?>"><i class="ti-power-off"></i> Logout</a>
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

  <!-- excel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

  <!-- filter  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#filterBtn').click(function() {
        var selectedUnit = $('#unitFilter').val().toLowerCase();
        var selectedJenis = $('#jenisKeperluanFilter').val().toLowerCase();

        $('#guestsTable tbody tr').each(function() {
          var unit = $(this).data('unit').toLowerCase();
          var jenis = $(this).data('jenis').toLowerCase();

          if ((selectedUnit === '' || unit.includes(selectedUnit)) && (selectedJenis === '' || jenis.includes(selectedJenis))) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      });
    });
  </script>

</body>

</html>