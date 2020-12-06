<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['anneEnLettre']) && !empty($_POST['jourEnLettre'])&&
     !empty($_POST['moisEnLettre'])&& !empty($_POST['heure'])&& 
     !empty($_POST['langueUtil']))

 	
     {
     	$jourEnLettre=$_POST['jourEnLettre'];
     	$moisEnLettre=$_POST['moisEnLettre'];
     	$heure=$_POST['heure'];
     	$langueUtil=$_POST['langueUtil'];
        $anneEnLettre=$_POST['anneEnLettre'];

     $stmt_Enr = $pdo->prepare("INSERT INTO Tenregistrement(anneEnLettreEnr,jourEnLettreEnr,moisEnLettreEnr,HeureEnregistrement,langueUtil)
     	VALUES(:anneEnLettre,:jourEnLettre,:moisEnLettre,:heure,:langueUtil)");

            $stmt_Enr->bindParam("anneEnLettre", $anneEnLettre,PDO::PARAM_STR) ;
	 		$stmt_Enr->bindParam("jourEnLettre", $jourEnLettre,PDO::PARAM_STR) ;
			$stmt_Enr->bindParam("moisEnLettre", $moisEnLettre,PDO::PARAM_STR) ;		
			$stmt_Enr->bindParam("heure", $heure,PDO::PARAM_STR) ;
			$stmt_Enr->bindParam("langueUtil", $langueUtil,PDO::PARAM_STR) ;

			$stmt_Enr->execute();
			 $result['success']="1";
  $result['message']="success";
  echo json_encode($result);
    header("location:./../pere.php");

     } 
     else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>