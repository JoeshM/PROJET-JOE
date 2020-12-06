<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['nomMere'])&&
        !empty($_POST['lieuNaissanceMere'])&& !empty($_POST['dateNaissanceMere'])&&
         !empty($_POST['professionMere'])&& !empty($_POST['nationaliteMere'])&&
          !empty($_POST['residenceMere']))

 	
     {
     	$nomMere=$_POST['nomMere'];
    $lieuNaissanceMere=$_POST['lieuNaissanceMere'];
    $dateNaissanceMere=$_POST['dateNaissanceMere'];
    $professionMere=$_POST['professionMere'];
    $nationaliteMere=$_POST['nationaliteMere'];
    $residenceMere=$_POST['residenceMere'];

      $stmt_mere = $pdo->prepare("INSERT INTO Tmere(Noms,DateNaissance,LieuNaissance,Profession,Nationalite,Residence,) VALUES(:nomMere,:dateNaissanceMere,:lieuNaissanceMere,:professionMere,:nationaliteMere,:residenceMere)");
      $stmt_mere->bindParam("nomMere", $nomMere,PDO::PARAM_STR) ;
      $stmt_mere->bindParam("dateNaissanceMere", $dateNaissanceMere,PDO::PARAM_STR) ;
      $stmt_mere->bindParam("lieuNaissanceMere", $lieuNaissanceMere,PDO::PARAM_STR) ;   
      $stmt_mere->bindParam("professionMere", $professionMere,PDO::PARAM_STR) ;
      $stmt_mere->bindParam("nationaliteMere", $nationaliteMere,PDO::PARAM_STR) ;
      $stmt_mere->bindParam("residenceMere", $residenceMere,PDO::PARAM_STR) ;
          $stmt_mere->execute();

			 $result['success']="1";
  $result['message']="success";
  echo json_encode($result);
  // header("location:./../enfant.php");

     } 
     else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>