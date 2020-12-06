<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['codePere']) && !empty($_POST['nomPere']) &&
    !empty($_POST['dateNaissncePere']) && !empty($_POST['lieuNaissancePere']) &&
    !empty($_POST['professionPere']) && !empty($_POST['ResidencePere']) && 
    !empty($_POST['NationalitePere']) && !empty($_POST['codeMere']) && 
    !empty($_POST['nomMere']) && !empty($_POST['dateNaissnceMere']) && 
    !empty($_POST['lieuNaissanceMere']) && !empty($_POST['professionMere']) && !empty($_POST['ResidenceMere']) && 
    !empty($_POST['NationaliteMere']))
     {
      //pere
    $codePere=$_POST['codePere'];
    $dateNaissncePere=$_POST['dateNaissncePere'];
    $lieuNaissancePere=$_POST['lieuNaissancePere'];
    $professionPere=$_POST['professionPere'];
    $ResidencePere=$_POST['ResidencePere'];
    $NationalitePere=$_POST['NationalitePere'];
    //mere
    $codeMere=$_POST['codeMere'];
    $dateNaissnceMere=$_POST['dateNaissnceMere'];
    $lieuNaissanceMere=$_POST['lieuNaissanceMere'];
    $professionMere=$_POST['professionMere'];
    $ResidenceMere=$_POST['ResidenceMere'];
    $NationaliteMere=$_POST['NationaliteMere'];


      $stmt_Pere = $pdo->prepare("UPDATE `tpere` SET `DateNaissance`=:dateNaissncePere,
        `LieuNaissance`=:lieuNaissancePere,
        `Profession`=:professionPere,
        `Residence`=:ResidencePere,
        `Nationalite`=:NationalitePere WHERE `codePere`=:codePere");
     
      $stmt_Pere->bindParam("dateNaissncePere", $dateNaissncePere,PDO::PARAM_STR) ;
      $stmt_Pere->bindParam("lieuNaissancePere", $lieuNaissancePere,PDO::PARAM_STR) ;   
      $stmt_Pere->bindParam("professionPere", $professionPere,PDO::PARAM_STR) ;
      $stmt_Pere->bindParam("ResidencePere", $ResidencePere,PDO::PARAM_STR) ;
      $stmt_Pere->bindParam("NationalitePere", $NationalitePere,PDO::PARAM_STR) ;
      $stmt_Pere->bindParam("codePere", $codePere,PDO::PARAM_STR) ;
      $stmt_Pere->execute();
        //echo "".$_SESSION['id_add'];
      
      $stmt_Mere = $pdo->prepare("UPDATE `tmere` SET `DateNaissance`=:dateNaissnceMere,
        `LieuNaissance`=:lieuNaissanceMere,
        `Profession`=:professionMere,
        `Residence`=:ResidenceMere,
        `Nationalite`=:NationaliteMere WHERE `codeMere`=:codeMere");

      $stmt_Mere->bindParam("dateNaissnceMere", $dateNaissnceMere,PDO::PARAM_STR) ;
      $stmt_Mere->bindParam("lieuNaissanceMere", $lieuNaissanceMere,PDO::PARAM_STR) ;   
      $stmt_Mere->bindParam("professionMere", $professionMere,PDO::PARAM_STR) ;
      $stmt_Mere->bindParam("ResidenceMere", $ResidenceMere,PDO::PARAM_STR) ;
      $stmt_Mere->bindParam("NationaliteMere", $NationaliteMere,PDO::PARAM_STR) ;
      $stmt_Mere->bindParam("codeMere", $codeMere,PDO::PARAM_STR) ;
      $stmt_Mere->execute();
      //echo "".$codePere;
      header("location:./../info_enfant.php");
  } 


 else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>