<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['sexeEnf'])&&
    !empty($_POST['nomCompletEnf']))
    {
	$sexeEnf=$_POST['sexeEnf'];
    $nomCompletEnf=$_POST['nomCompletEnf'];

    $stmt_Enff = $pdo->prepare("INSERT INTO Tenfant(Sexe,nomCompletEnf)VALUES(:sexeEnf,:nomCompletEnf)");
    $stmt_Enff->bindParam("sexeEnf", $sexeEnf,PDO::PARAM_STR) ;
      $stmt_Enff->bindParam("nomCompletEnf", $nomCompletEnf,PDO::PARAM_STR) ;


          $stmt_Enff->execute();

			 $result['success']="1";
  $result['message']="success";
  echo json_encode($result);
}
 else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
?>