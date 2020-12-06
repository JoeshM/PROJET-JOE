<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['nomPere'])&& 
     !empty($_POST['lieuNaissancePere'])&& !empty($_POST['dateNaissancePere'])&&
      !empty($_POST['professionPere'])&& !empty($_POST['nationalitePere'])&&
       !empty($_POST['residencePere']))

 	
     {
     	$nomPere=$_POST['nomPere'];
        $lieuNaissancePere=$_POST['lieuNaissancePere'];
        $dateNaissancePere=$_POST['dateNaissancePere'];
        $professionPere=$_POST['professionPere'];
        $nationalitePere=$_POST['nationalitePere'];
        $residencePere=$_POST['residencePere'];

     $stmt_pere = $pdo->prepare("INSERT INTO Tpere(Noms,DateNaissance,LieuNaissance,Profession,Nationalite,Residence) VALUES(:nomPere,:dateNaissancePere,:lieuNaissancePere,:professionPere,:nationalitePere,:residencePere)");

            $stmt_pere->bindParam("nomPere", $nomPere,PDO::PARAM_STR) ;
            $stmt_pere->bindParam("dateNaissancePere", $dateNaissancePere,PDO::PARAM_STR) ;
            $stmt_pere->bindParam("lieuNaissancePere", $lieuNaissancePere,PDO::PARAM_STR) ;
            $stmt_pere->bindParam("professionPere", $professionPere,PDO::PARAM_STR) ;
            $stmt_pere->bindParam("nationalitePere", $nationalitePere,PDO::PARAM_STR) ;
            $stmt_pere->bindParam("residencePere", $residencePere,PDO::PARAM_STR) ;
            $stmt_pere->execute();

			 $result['success']="1";
  $result['message']="success";
  echo json_encode($result);
  header("location:./../mere.php");

     } 
     else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>