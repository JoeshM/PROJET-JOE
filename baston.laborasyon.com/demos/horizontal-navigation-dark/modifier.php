    
<?php
    require_once("././connexion/bd.php");
   $req=" SELECT e.codeMaison,e.ResponsableMaison,e.AccesCourant,
       e.NombreDeFoisAcces,p.codeAvenue as codeAvenue,p.designationAvenue As AVENUE,m.codeUser as codeUser,m.NomUser As USER FROM tmaison as e INNER JOIN avenue as
        p on e.codeAvenue=p.codeAvenue INNER JOIN Tuser as m on e.codeUser=m.codeUser;";
   $pre=$pdo->prepare($req);
   $pre->execute();

   ?>
    <!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Information</title>

       <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Datatable -->
    <link rel="stylesheet" href="../../vendors/dataTable/datatables.min.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="horizontal-navigation dark">
<!-- Preloader -->
<div class="preloader">
    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<?php
       require_once("navibar.php");   
        ?>
<!-- ./ Preloader -->

<!-- Sidebar group -->

<!-- ./ Sidebar group -->

<!-- Layout wrapper -->

        <!-- Navigation -->
       

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="card">
        <div class="card-body">

        <div class="col-lg-2 col-md-2">
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-lg">
                <thead>
                <tr>
                    <th>Responsable House</th>
                    <th>Acces to Current</th>
                    <th>Much time by Month</th>
                    <th>AVENUE</th>
                    <th>Collector</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($pre->fetchAll() as $us) { ?>
                <tr>
                    <td><?php echo $us['ResponsableMaison']; ?></td>
                    <td><?php echo $us['AccesCourant']; ?></td>
                    <td><?php echo $us['NombreDeFoisAcces']; ?></td>
                    <td>
                        <span span class="badge bg-success-bright text-success"><?php echo $us['AVENUE']; ?></span>
                    </td>
                    <td><?php echo $us['USER']; ?></td>
                    <td class="text-right">
                        <a href="modifyInformation.php?codeMaison=<?php echo  trim($us['codeMaison'])?>" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                 <?php
                                                 }
                                                 ?>     
           
              
                </tbody>
            </table>
        </div>
    </div>
    <footer class="content-footer">
                <div>© 2020 Sheti Malikewa Joe <a href="http://laborasyon.com/" target="_blank"></a></div>
                
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="../../vendors/bundle.js"></script>

<!-- Apex chart -->
<script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
<script src="../../vendors/charts/apex/apexcharts.min.js"></script>

<!-- Daterangepicker -->
<script src="../../vendors/datepicker/daterangepicker.js"></script>

<!-- DataTable -->
<script src="../../vendors/dataTable/datatables.min.js"></script>

<!-- Dashboard scripts -->
<script src="../../assets/js/examples/pages/ecommerce-dashboard.js"></script>

<!-- App scripts -->
<script src="../../assets/js/app.min.js"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:58:36 GMT -->
</html>
