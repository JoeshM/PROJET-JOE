<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['numM']) &&
    !empty($_POST['RespM']) && 
    !empty($_POST['Acces']) &&
    !empty($_POST['NombreDeFAcces']) && 
    !empty($_POST['codeMaison']))
     {
    
    
    $numM=$_POST['numM'];
    $RespM=$_POST['RespM'];
    $Acces=$_POST['Acces'];
    $NombreDeFAcces=$_POST['NombreDeFAcces'];
    $codeM=$_POST['codeM'];

      $stmt_enfant = $pdo->prepare(" UPDATE `tmaison` SET `NumeroMaison`=:numM,
        `ResponsableMaison`=:RespM,
        `AccesCourant`=:Acces,
        `NombreDeFoisAcces`=:NombreDeFAcces WHERE `codeMaison`=:codeM ");
     
      $stmt_enfant->bindParam("numM", $numM,PDO::PARAM_STR) ;
      $stmt_enfant->bindParam("RespM", $RespM,PDO::PARAM_STR) ;   
      $stmt_enfant->bindParam("Acces", $Acces,PDO::PARAM_STR) ;
       $stmt_enfant->bindParam("NombreDeFAcces", $NombreDeFAcces,PDO::PARAM_STR) ;
       $stmt_enfant->bindParam("codeM", $codeM,PDO::PARAM_STR) ;
      $stmt_enfant->execute();
      //echo "".$codePere;
      echo "success";
      
      header("location:./../modifier.php");
  } 


 else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>