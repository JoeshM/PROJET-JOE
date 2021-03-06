<?php

    require_once("././connexion/bd.php");
    $codeMaison=$_GET['codeMaison'];
   $requete = $pdo->prepare("SELECT * FROM tmaison WHERE codeMaison = :codeMaison");
   $requete->bindValue(':codeMaison', $codeMaison, PDO::PARAM_STR);
   $requete->execute();

   ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 12:01:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Utilisateur</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership" style="background: url(../../assets/media/image/image1.jpg)">
<!-- Preloader -->
<div class="preloader">
    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->


<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
    </div>
    <!-- ./ logo -->

    
    <h5>Modifier les Informations</h5>

    <!-- form -->
    <?php
    while ($donnees = $requete->fetch())
    {
     ?>
    <form method="post" action="metier/modifInfo.php">
    <div class="form-group">
            <input type="text" name="codeM" hidden="true" value="<?php echo $donnees['codeMaison'];?>" class="form-control" placeholder="codeAdmin" required autofocus>
        </div>
        <div class="form-group">
            <input type="number" name="numM" value="<?php echo $donnees['NumeroMaison'];?>" class="form-control" placeholder="Num House" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" name="RespM" value="<?php echo $donnees['ResponsableMaison'];?>"  class="form-control" placeholder="Responsible House" required>
        </div>
        <div class="form-group">
            <input type="text" name="Acces" value="<?php echo $donnees['AccesCourant'];?>" class="form-control" placeholder="Acces to Current" required>
        </div>
        <div class="form-group">
            <input type="number" name="NombreDeFAcces" value="<?php echo $donnees['NombreDeFoisAcces'];?>" class="form-control" placeholder="How much time per Month" required autofocus>
        </div>
        
        <!-- <div class="form-group">
                                            <label >Fonction</label>
                                            <select class="form-control" required="true">
                                                <option value="">Admin</option>
                                                <option value="">Collector</option>
                                                <option  value="" selected>Staf</option>
                                            </select>
                                        </div> -->
        
        <button type="submit" class="btn btn-primary btn-block">Modify
  </button>  

    </form>
    <!-- ./ form -->
 <?php
    }

  $requete->closeCursor(); // Termine le traitement de la requête
    
  ?>

</div>

<!-- Plugin scripts -->
<script src="../../vendors/bundle.js"></script>

<!-- App scripts -->
<script src="../../assets/js/app.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 12:01:05 GMT -->
</html>
