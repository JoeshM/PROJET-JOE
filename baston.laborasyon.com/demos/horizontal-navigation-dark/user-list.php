<?php
    require_once("././connexion/bd.php");
   $req=" SELECT * from Admin";
   $pre=$pdo->prepare($req);
   $pre->execute();



   ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 12:01:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>

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
<div class="content-wrapper">
<!-- Sidebar group -->
            <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>

<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div  class="layout-wrapper">
    <!-- Header -->
   
    <!-- ./ Header -->

    <!-- Content wrapper -->
 

 
        <div  class="card-body">

        
        <div  class="table-responsive">

    <div class="row">
        <div class="col-md-12">
           

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-0">User List</h6>
                        <a href="register.php" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Add User">
                                    <i class="ti-pencil"></i>
                                </a>
                    </div>
                </div>
                <div class="card">
        <div class="card-body">

       
        <div class="table-responsive">
            <table id="recent-orders" class="table table-lg">
                        <thead>
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                    <label class="custom-control-label" for="user-list-select-all"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>User Name</th>
                            
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody> 
                        <?php foreach($pre->fetchAll() as $us) { ?>
                        <tr>
                        <td></td>
                        <td><?php echo $us['codeAdmin']; ?></td>
                            <td><?php echo $us['NomAdmin']; ?></td>
                                                    <td><?php echo $us['PostnomUser']; ?></td>
                                                    <td><?php echo $us['Email']; ?></td>
                                                    <td><?php echo $us['UserNameAdmin']; ?></td>
                                                    

                            <td class="text-right">
                                <a href="mofierUser.php?codeAdmin=<?php echo  trim($us['codeAdmin'])?>" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                
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
        </div>
    </div>

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
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

    <!-- Datatable -->
    <script src="../../vendors/dataTable/datatables.min.js"></script>

    <script src="../../assets/js/examples/pages/user-list.js"></script>

<!-- App scripts -->
<script src="../../assets/js/app.min.js"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 12:01:05 GMT -->
</html>
