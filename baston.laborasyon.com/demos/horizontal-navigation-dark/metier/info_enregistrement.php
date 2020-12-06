<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['dateEnregistrement'])&& !empty($_POST['heureEnregistremen'])&&
        !empty($_POST['jourEnregistremen'])&& !empty($_POST['anneeEnregistremen'])&&
         !empty($_POST['moisEnregistremen']) && !empty($_POST['joursNaissance'])
&& !empty($_POST['moisNaissance']) && !empty($_POST['anneeNaissnce'])
&& !empty($_POST['lieuNaissnce']) && !empty($_POST['langue']))

 	
     {
      $dateEnregistrement=$_POST['dateEnregistrement'];
$heureEnregistremen=$_POST['heureEnregistremen'];
    $jourEnregistremen=$_POST['jourEnregistremen'];
    $anneeEnregistremen=$_POST['anneeEnregistremen'];
    $moisEnregistremen=$_POST['moisEnregistremen'];
    $joursNaissance=$_POST['joursNaissance'];
    $moisNaissance=$_POST['moisNaissance'];
    $anneeNaissnce=$_POST['anneeNaissnce'];
    $lieuNaissnce=$_POST['lieuNaissnce'];
    $langue=$_POST['langue'];
    session_start();
    $id_ADDRESSE=$_SESSION['id_add'];

      $stmt_infEnr = $pdo->prepare("INSERT INTO Tenregistrement(DateEnregistrement,HeureEnregistrement,JourEnregistrement,anneEnLettreEnr,moisEnLettreEnr,langueUtil,jourNaissanceEenf,MoisNaissnceEnf,anneeNaissanceEnf,lieuNaissanceEnf,codeAdresse) VALUES(:dateEnregistrement,:heureEnregistremen,:jourEnregistremen,:anneeEnregistremen,:moisEnregistremen,:langue,:joursNaissance,:moisNaissance,:anneeNaissnce,:lieuNaissnce,:codeAdresse)");

      $stmt_infEnr->bindParam("dateEnregistrement", $dateEnregistrement,PDO::PARAM_STR) ;
      $stmt_infEnr->bindParam("heureEnregistremen", $heureEnregistremen,PDO::PARAM_STR) ;
      $stmt_infEnr->bindParam("jourEnregistremen", $jourEnregistremen,PDO::PARAM_STR) ;
      $stmt_infEnr->bindParam("anneeEnregistremen", $anneeEnregistremen,PDO::PARAM_STR) ;   
      $stmt_infEnr->bindParam("moisEnregistremen", $moisEnregistremen,PDO::PARAM_STR) ;
      $stmt_infEnr->bindParam("joursNaissance", $joursNaissance,PDO::PARAM_STR) ;
      $stmt_infEnr->bindParam("moisNaissance", $moisNaissance,PDO::PARAM_STR) ;
      $stmt_infEnr->bindParam("anneeNaissnce", $anneeNaissnce,PDO::PARAM_STR) ;   
      $stmt_infEnr->bindParam("lieuNaissnce", $lieuNaissnce,PDO::PARAM_STR) ;
        $stmt_infEnr->bindParam("langue", $langue,PDO::PARAM_STR) ;
         $stmt_infEnr->bindParam("codeAdresse", $id_ADDRESSE,PDO::PARAM_STR) ;
        $stmt_infEnr->execute();

    //       $stmt_infEnr="SELECT MAX(codeAdresse) as max_Add FROM Tadresse";
    // $spv_add=$pdo->prepare($req_add);
    // $spv_add->execute();
    //   if($us_madd=$spv_add->fetch()) {
    //     $id_add=$us_add['max_Add'];
    //     echo ($id_add);
    //   }

          $req_Enr="SELECT max(codeEnregistrement) as max_Enr FROM `Tenregistrement`";
          $spv_Enr=$pdo->prepare($req_Enr);
          $spv_Enr->execute();
      if($us_Enr=$spv_Enr->fetch()) {
        session_start();
        $_SESSION['id_Enr']=$us_Enr['max_Enr'];
        //echo "".$_SESSION['id_add'];
        }
  header("location:./../Parents.php?id=".$_SESSION['id_Enr']);

     } 
     else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>