<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive admin dashboard and web application ui kit." />
    <meta name="keywords" content="dashboard, index, main" />

    <title> Helpdesk BSI</title>

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

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


    <style>
    #v_internal,
    #v_external {
        display: none;
    }
    </style>
</head>

<body>
    <!-- Topbar -->
    <header class="topbar topbar-expand-lg" id="topbar">
        <div class="container">
            <a href="<?= site_url('guest/dashboard')?>" class="topbar-left">
                <div class="m-1"><img src="<?= asset_path('/img/logo-hd-bsi.svg', '_theme_') ?>" alt="logo icon"
                        style="width: 32px;"></div>
                <span class="text1">Helpdesk BSI.</span>
            </a>

            <div class="topbar-right">
                <form action="/login">
                    <div type="submit" class="btn btn-sm btn-round btn-custom"
                        onclick="window.location.href='<?= site_url('guest/login'); ?>'"><i class="fa fa-sign-in"></i>
                        login</div>
                </form>
            </div>

        </div>
    </header>
    <!-- END Topbar -->

    <!-- Main container -->
    <main class="main-container">
        <div class="main-content container">
            <div class="row">
                <?= $template['body']; ?>
            </div>
        </div>

        <!-- Footer -->
        <footer class="site-footer container">
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

    <!-- chart akre prodi -->
    <script>
    $(document).ready(function() {
        new Chart($("#chart-line-4"), {
            type: 'line',

            // Data
            data: {
                labels: ["2020-1", "2020-2", "2021-1", "2022-2", "2023-1", "2023-2", "2024-1",
                    "2024-2",
                ],
                datasets: [{
                        label: "Diterima",
                        fill: false,
                        borderWidth: 3,
                        pointRadius: 4,
                        borderColor: "#36a2eb",
                        backgroundColor: "#36a2eb",
                        pointBackgroundColor: "#36a2eb",
                        pointBorderColor: "#36a2eb",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "#36a2eb",
                        data: [30, 25, 35, 23, 30, 25, 35, 23],
                        tension: 0.4 // Adjust this value for more or less curvature
                    },
                    {
                        label: "AK",
                        fill: false,
                        borderWidth: 3,
                        pointRadius: 4,
                        borderColor: "#926dde",
                        backgroundColor: "#926dde",
                        pointBackgroundColor: "#926dde",
                        pointBorderColor: "#926dde",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "#926dde",
                        data: [56, 27, 89, 12, 56, 27, 89, 12],
                        tension: 0.4 // Adjust this value for more or less curvature
                    },
                    {
                        label: "AL",
                        fill: false,
                        borderWidth: 3,
                        pointRadius: 4,
                        borderColor: "#15c377",
                        backgroundColor: "#15c377",
                        pointBackgroundColor: "#15c377",
                        pointBorderColor: "#15c377",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "#15c377",
                        data: [67, 34, 24, 70, 67, 34, 24, 70],
                        tension: 0.4 // Adjust this value for more or less curvature
                    },
                    {
                        label: "SK Terbit",
                        fill: false,
                        borderWidth: 3,
                        pointRadius: 4,
                        borderColor: "#faa64b",
                        backgroundColor: "#faa64b",
                        pointBackgroundColor: "#faa64b",
                        pointBorderColor: "#faa64b",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "#faa64b",
                        data: [23, 29, 30, 33, 23, 29, 30, 33],
                        tension: 0.4 // Adjust this value for more or less curvature
                    }
                ]
            },

            // Options
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
    </script>

    <!-- chart rerata akre -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        function initializeRadarChart() {
            var radarData = {
                labels: ['K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'K7', 'K8', 'K9'],
                datasets: [{
                        label: 'D3',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: '#4caf50',
                        pointBackgroundColor: '#4caf50',
                        pointBorderColor: '#4caf50',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#4caf50',
                        data: [2.80, 3.10, 3.25, 2.50, 3.65, 3.20, 2.90, 3.45, 2.75]
                    },
                    {
                        label: 'D4',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: '#ff9800',
                        pointBackgroundColor: '#ff9800',
                        pointBorderColor: '#ff9800',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#ff9800',
                        data: [3.50, 2.20, 3.80, 2.75, 3.10, 3.40, 2.95, 3.25, 3.00]
                    },
                    {
                        label: 'S1',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: '#f44336',
                        pointBackgroundColor: '#f44336',
                        pointBorderColor: '#f44336',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#f44336',
                        data: [2.00, 3.60, 2.85, 3.15, 2.45, 3.70, 3.05, 2.80, 3.25]
                    },
                    {
                        label: 'S2',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: '#9c27b0',
                        pointBackgroundColor: '#9c27b0',
                        pointBorderColor: '#9c27b0',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#9c27b0',
                        data: [3.10, 2.40, 3.25, 2.85, 3.60, 2.95, 3.40, 2.75, 3.15]
                    },
                    {
                        label: 'S2 Terapan',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: '#795548',
                        pointBackgroundColor: '#795548',
                        pointBorderColor: '#795548',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#795548',
                        data: [2.85, 3.20, 3.00, 2.70, 3.40, 3.10, 2.95, 3.30, 2.65]
                    },
                    {
                        label: 'APT',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: '#ffc107',
                        pointBackgroundColor: '#ffc107',
                        pointBorderColor: '#ffc107',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#ffc107',
                        data: [3.00, 2.65, 3.15, 2.95, 3.30, 2.70, 3.20, 2.85, 3.40]
                    },
                ]
            };

            var radarOptions = {
                scale: {
                    ticks: {
                        beginAtZero: true,
                        min: 0,
                        max: 4
                    }
                }
            };

            var ctx = document.getElementById('radarChart').getContext('2d');
            new Chart(ctx, {
                type: 'radar',
                data: radarData,
                options: radarOptions
            });
        }

        $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var target = $(e.target).attr("href");
            if (target === '#rerata-akre') {
                initializeRadarChart();
            }
        });
    });
    </script>

</body>

</html>