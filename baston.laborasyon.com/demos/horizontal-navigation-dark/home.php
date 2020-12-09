<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>

        <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>
        <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../vendors/dataTable/datatables.min.css" type="text/css">
        <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <script src="tchart/highcharts.js"></script>
        <script src="tchart/exporting.js"></script>
        <script src="tchart/export-data.js"></script>
        <script src="tchart/accessibility.js"></script>
    </head>
    <body class="horizontal-navigation dark">
        <div class="preloader">
            <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
            <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="logo dark">
            <div class="preloader-icon"></div>
        </div>
        <div class="layout-wrapper">
            <div class="content-wrapper">
                <!-- Navigation -->
                <?php
                    require_once("navibar.php");   
                ?> 
                <div class="content-body">
                    <div class="content">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>E-commerce Dashboard</h3>
                            </div>   
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="card-title mb-3">Weekly Average New Sales</h6>
                                                    <h1>$1,720</h1>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="icon-block icon-block-floating bg-danger mr-2">
                                                        <i class="ti-arrow-up"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <small class="text-muted">Last 7 Days</small>
                                                        <div class="text-danger">+52,50%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <figure class="highcharts-figure">
                                                <div id="container"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="card-title mb-2">Monthly Sales</h6>
                                                <div>
                                                    <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                                        <i class="fa fa-refresh"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown"
                                                        class="btn btn-outline-light btn-sm btn-floating"
                                                        aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="small text-muted">Avarage total sales +25,5%</p>
                                            <div id="monthly-sales"></div>
                                            <ul class="list-inline text-center">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-circle mr-1 text-success"></i> Bank Card <br>
                                                    <small class="text-muted">25,45% over</small>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-circle mr-1 text-primary"></i> Credit Card <br>
                                                    <small class="text-muted">75,55% over</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- Footer -->
                    <footer class="content-footer">
                        <div>© 2020 Sheti Malikewa Joe <a href="http://laborasyon.com/" target="_blank"></a></div>    
                    </footer>
                    <!-- ./ Footer -->
                </div>
            </div>
        </div>
    </body>
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Weekly Average New Sales'
            },
            colors: ["#5C6BC0", "#89011d", "#2a5598"],
            credits: {
                enabled: false,
            },
            xAxis: {
                categories: ['Mon', 'Tues', 'wed', 'Thir', 'Fri', 'Sat', 'Sun'],
                labels: {
                    style: {
                    fontSize: "8px",
                    },
                },
            },
            yAxis: {
                min: 0,
                title: {
                    text: null,
                },
                stackLabels: {
                    enabled: false,
                    style: {
                    fornWeight: "bold",
                    color: "red",
                    },
                },
            },
            legend: {
                layout: "horizontal",
                backgroundColor: "#FFFFFF",
                floating: true,
                align: "left",
                x: 300,
                verticalAlign: "top",
                y: -10,
            },
            plotOptions: {
                series: {
                    stacking: "normal",
                },
            },
            series: [{
                name: 'Données Hebdomadaire',
                data: [5, 3, 4, 7, 2, 4, 6],
                borderColor: "#EBBA95",
                borderWidth: 0,
                pointWidth: 14,
                showInLegend: false,
            }]
        });
    </script>

    <script src="../../vendors/bundle.js"></script>
    <script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="../../vendors/charts/apex/apexcharts.min.js"></script>
    <script src="../../vendors/datepicker/daterangepicker.js"></script>
    <script src="../../vendors/dataTable/datatables.min.js"></script>
    <script src="../../assets/js/examples/pages/ecommerce-dashboard.js"></script>
    <script src="../../assets/js/app.min.js"></script>
</html>
