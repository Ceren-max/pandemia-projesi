<!doctype html>
<html lang="tr">
    

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendors Min CSS -->
        <link rel="stylesheet" href="assets/css/vendors.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>Admin Panel</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Login Area -->
        <div class="login-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="login-form">

                        <h2>Admin Panel - Giriş</h2>

                        <form action="panel.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Eposta adresiniz">
                                <span class="label-title"><i class='bx bx-user'></i></span>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Şifreniz">
                                <span class="label-title"><i class='bx bx-lock'></i></span>
                            </div>

                            <div class="form-group">
                                <div class="remember-forgot">
                                    <label class="checkbox-box">Oturumu Açık Tut
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                    <a href="#" class="forgot-password">Şifremi Unuttum</a>
                                </div>
                            </div>

                            <button type="submit" class="login-btn">Güvenli Giriş</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Area -->
        

        <!-- Vendors Min JS -->
        <script src="assets/js/vendors.min.js"></script>

        <!-- ApexCharts JS -->
        <script src="assets/js/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/apexcharts/apexcharts-stock-prices.js"></script>
        <script src="assets/js/apexcharts/apexcharts-irregular-data-series.js"></script>
        <script src="assets/js/apexcharts/apex-custom-line-chart.js"></script>
        <script src="assets/js/apexcharts/apex-custom-pie-donut-chart.js"></script>
        <script src="assets/js/apexcharts/apex-custom-area-charts.js"></script>
        <script src="assets/js/apexcharts/apex-custom-column-chart.js"></script>
        <script src="assets/js/apexcharts/apex-custom-bar-charts.js"></script>
        <script src="assets/js/apexcharts/apex-custom-mixed-charts.js"></script>
        <script src="assets/js/apexcharts/apex-custom-radialbar-charts.js"></script>
        <script src="assets/js/apexcharts/apex-custom-radar-chart.js"></script>

        <!-- ChartJS -->
        <script src="assets/js/chartjs/chartjs.min.js"></script>
        <div class="chartjs-colors"> <!-- To use template colors with Javascript -->
            <div class="bg-primary"></div>
            <div class="bg-primary-light"></div>
            <div class="bg-secondary"></div>
            <div class="bg-info"></div>
            <div class="bg-success"></div>
            <div class="bg-success-light"></div>
            <div class="bg-danger"></div>
            <div class="bg-warning"></div>
            <div class="bg-purple"></div>
            <div class="bg-pink"></div>
        </div>
        
        <!-- jvectormap Min JS -->
        <script src="assets/js/jvectormap-1.2.2.min.js"></script>
        <!-- jvectormap World Mil JS -->
        <script src="assets/js/jvectormap-world-mill-en.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>


</html>