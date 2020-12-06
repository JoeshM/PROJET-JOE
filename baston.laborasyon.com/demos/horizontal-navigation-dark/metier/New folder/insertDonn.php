<?php
    require_once("././connexion/bd.php");
?>
<?php
    if(!empty($_POST['anneEnLettre']) && !empty($_POST['jourEnLettre'])&&
     !empty($_POST['moisEnLettre'])&& !empty($_POST['heure'])&& 
     !empty($_POST['nomOfficier'])&& !empty($_POST['nomPere'])&& 
     !empty($_POST['lieuNaissancePere'])&& !empty($_POST['dateNaissancePere'])&&
      !empty($_POST['professionPere'])&& !empty($_POST['nationalitePere'])&&
       !empty($_POST['residencePere'])&& !empty($_POST['nomMere'])&&
        !empty($_POST['lieuNaissanceMere'])&& !empty($_POST['dateNaissanceMere'])&&
         !empty($_POST['professionMere'])&& !empty($_POST['nationaliteMere'])&&
          !empty($_POST['residenceMere'])&& !empty($_POST['jourNaissanceEenf'])&&
           !empty($_POST['MoisNaissnceEnf'])&& !empty($_POST['anneeNaissanceEnf'])&&
            !empty($_POST['lieuNaissanceEnf'])&& !empty($_POST['sexeEnf'])&&
             !empty($_POST['nomCompletEnf'])&& !empty($_POST['langueUtil']))


             {
    	$anneEnLettre=$_POST['anneEnLettre'];
    	$jourEnLettre=$_POST['jourEnLettre'];
		$moisEnLettre=$_POST['moisEnLettre'];
		$heure=$_POST['heure'];
		$nomOfficier=$_POST['nomOfficier'];
		$nomPere=$_POST['nomPere'];
		$lieuNaissancePere=$_POST['lieuNaissancePere'];
		$dateNaissancePere=$_POST['dateNaissancePere'];
		$professionPere=$_POST['professionPere'];
		$nationalitePere=$_POST['nationalitePere'];
		$residencePere=$_POST['residencePere'];
		$nomMere=$_POST['nomMere'];
		$lieuNaissanceMere=$_POST['lieuNaissanceMere'];
		$dateNaissanceMere=$_POST['dateNaissanceMere'];
		$professionMere=$_POST['professionMere'];
		$nationaliteMere=$_POST['nationaliteMere'];
		$residenceMere=$_POST['residenceMere'];
		$jourNaissanceEenf=$_POST['jourNaissanceEenf'];
		$MoisNaissnceEnf=$_POST['MoisNaissnceEnf'];
		$anneeNaissanceEnf=$_POST['anneeNaissanceEnf'];
		$lieuNaissanceEnf=$_POST['lieuNaissanceEnf'];
		$sexeEnf=$_POST['sexeEnf'];
		$nomCompletEnf=$_POST['nomCompletEnf'];
		$langueUtil=$_POST['langueUtil'];

		$stmt = $dbConnection->prepare("INSERT INTO")
		


			$stmt->bindParam("anneEnLettre", $anneEnLettre,PDO::PARAM_STR) ;
			$stmt->bindParam("jourEnLettre", $jourEnLettre,PDO::PARAM_STR) ;
			$stmt->bindParam("moisEnLettre", $moisEnLettre,PDO::PARAM_STR) ;
			$stmt->bindParam("heure", $heure,PDO::PARAM_STR) ;
			$stmt->bindParam("nomOfficier", $nomOfficier,PDO::PARAM_STR) ;
			$stmt->bindParam("nomPere", $nomPere,PDO::PARAM_STR) ;
			$stmt->bindParam("lieuNaissancePere", $lieuNaissancePere,PDO::PARAM_STR) ;
			$stmt->bindParam("dateNaissancePere", $dateNaissancePere,PDO::PARAM_STR) ;
			$stmt->bindParam("professionPere", $professionPere,PDO::PARAM_STR) ;
			$stmt->bindParam("nationalitePere", $nationalitePere,PDO::PARAM_STR) ;
			$stmt->bindParam("residencePere", $residencePere,PDO::PARAM_STR) ;
			$stmt->bindParam("nomMere", $nomMere,PDO::PARAM_STR) ;
			$stmt->bindParam("lieuNaissanceMere", $lieuNaissanceMere,PDO::PARAM_STR) ;
			$stmt->bindParam("dateNaissanceMere", $dateNaissanceMere,PDO::PARAM_STR) ;
			$stmt->bindParam("professionMere", $professionMere,PDO::PARAM_STR) ;
			$stmt->bindParam("nationaliteMere", $nationaliteMere,PDO::PARAM_STR) ;
			$stmt->bindParam("residenceMere", $residenceMere,PDO::PARAM_STR) ;
			$stmt->bindParam("jourNaissanceEenf", $jourNaissanceEenf,PDO::PARAM_STR) ;
			$stmt->bindParam("MoisNaissnceEnf", $MoisNaissnceEnf,PDO::PARAM_STR) ;
			$stmt->bindParam("anneeNaissanceEnf", $anneeNaissanceEnf,PDO::PARAM_STR) ;
			$stmt->bindParam("lieuNaissanceEnf", $lieuNaissanceEnf,PDO::PARAM_STR) ;
			$stmt->bindParam("sexeEnf", $sexeEnf,PDO::PARAM_STR) ;
			$stmt->bindParam("nomCompletEnf", $nomCompletEnf,PDO::PARAM_STR) ;
			$stmt->bindParam("langueUtil", $langueUtil,PDO::PARAM_STR) ;
    }
    else
	     {
		$status= 'FAILED';
		echo json_encode(array("response"=>$status));
     	$error = "Echec d'Enregistrement";
   	    }
?>