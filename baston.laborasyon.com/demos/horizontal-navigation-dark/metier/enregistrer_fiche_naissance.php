<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['anneEnLettre']) && !empty($_POST['jourEnLettre'])&&
     !empty($_POST['moisEnLettre'])&& !empty($_POST['heure'])&& 
     !empty($_POST['nomPere'])&& 
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

		$nomPere=$_POST['nomPere'];
		$lieuNaissancePere=$_POST['lieuNaissancePere'];
		$dateNaissancePere=$_POST['dateNaissancePere'];
		$professionPere=$_POST['professionPere'];
		$nationalitePere=$_POST['nationalitePere'];
		$residencePere=$_POST['residencePere'];
		//information mere
		$nomMere=$_POST['nomMere'];
		$lieuNaissanceMere=$_POST['lieuNaissanceMere'];
		$dateNaissanceMere=$_POST['dateNaissanceMere'];
		$professionMere=$_POST['professionMere'];
		$nationaliteMere=$_POST['nationaliteMere'];
		$residenceMere=$_POST['residenceMere'];
		//information Enreg
		$jourNaissanceEenf=$_POST['jourNaissanceEenf'];
		$MoisNaissnceEnf=$_POST['MoisNaissnceEnf'];
		$anneeNaissanceEnf=$_POST['anneeNaissanceEnf'];
		$lieuNaissanceEnf=$_POST['lieuNaissanceEnf'];
		$heure=$_POST['heure'];
		$langueUtil=$_POST['langueUtil'];
		$anneEnLettre=$_POST['anneEnLettre'];
    	$jourEnLettre=$_POST['jourEnLettre'];
		$moisEnLettre=$_POST['moisEnLettre'];
		////
		$sexeEnf=$_POST['sexeEnf'];
		$nomCompletEnf=$_POST['nomCompletEnf'];
		///
		
	 
	 //INSERTION DE LA MERE ET CHARGEMENT DU CODE MERE LE DERNIER ENREGISTRER(MAX)
	 $stmt_mere = $pdo->prepare("INSERT INTO Tmere(Noms,DateNaissance,LieuNaissance,Profession,Nationalite,Residence,) VALUES(:nomMere,:dateNaissanceMere,:lieuNaissanceMere,:professionMere,:nationaliteMere,:residenceMere)");
	 		$stmt_mere->bindParam("nomMere", $nomMere,PDO::PARAM_STR) ;
	 		$stmt_mere->bindParam("dateNaissanceMere", $dateNaissanceMere,PDO::PARAM_STR) ;
			$stmt_mere->bindParam("lieuNaissanceMere", $lieuNaissanceMere,PDO::PARAM_STR) ;		
			$stmt_mere->bindParam("professionMere", $professionMere,PDO::PARAM_STR) ;
			$stmt_mere->bindParam("nationaliteMere", $nationaliteMere,PDO::PARAM_STR) ;
			$stmt_mere->bindParam("residenceMere", $residenceMere,PDO::PARAM_STR) ;
	        $stmt_mere->execute() or die("pas enregistrer");

		$req_mere="SELECT MAX(codeMere) as max_mere FROM Tmere";
		$spv_mere=$pdo->prepare($req_mere);
		$spv_mere->execute();
			if($us_mere=$spv_mere->fetch()) {
				$id_mer=$us_mere['max_mere'];
				echo ($id_mer);
				}
			

	//INSERTION DU PERE ET CHARGEMENT DU CODE PERE LE DERNIER ENREGISTRER(MAX)
	$stmt_pere = $pdo->prepare("INSERT INTO Tpere(Noms,DateNaissance,LieuNaissance,Profession,Nationalite,Residence) VALUES(:nomPere,:dateNaissancePere,:lieuNaissancePere,:professionPere,:nationalitePere,:residencePere)");

			$stmt_pere->bindParam("nomPere", $nomPere,PDO::PARAM_STR) ;
			$stmt_pere->bindParam("dateNaissancePere", $dateNaissancePere,PDO::PARAM_STR) ;
			$stmt_pere->bindParam("lieuNaissancePere", $lieuNaissancePere,PDO::PARAM_STR) ;
			$stmt_pere->bindParam("professionPere", $professionPere,PDO::PARAM_STR) ;
			$stmt_pere->bindParam("nationalitePere", $nationalitePere,PDO::PARAM_STR) ;
			$stmt_pere->bindParam("residencePere", $residencePere,PDO::PARAM_STR) ;
			$stmt_pere->execute() or die("pas enregistrer");

	$req_pere="SELECT MAX(codePere) as max_pere FROM Tpere";
   $spv_pere=$pdo->prepare($req_pere);
   $spv_pere->execute();
	if($us_pere=$spv_pere->fetch()) {
	 $id_pere=$us_pere['max_pere'];
	 
	}
  
				 //INSERTION DE L'ENREGISTREMENT
				 $stmt_Enregist = $pdo->prepare("INSERT INTO Tenregistrement(HeureEnregistrement,JourEnregistrement,jourNaissanceEenf,MoisNaissnceEnf,anneeNaissanceEnf,lieuNaissanceEnf,anneEnLettreEnr,moisEnLettreEnr,langueUtil) 
				 	VALUES(:heure,:jourEnLettre,:jourNaissanceEenf,:MoisNaissnceEnf,:anneeNaissanceEnf,:lieuNaissanceEnf,:anneEnLettre,:moisEnLettre,:langueUtil)");

			$stmt_Enregist->bindParam("heure", $heure,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("jourEnLettre", $jourEnLettre,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("jourNaissanceEenf", $jourNaissanceEenf,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("MoisNaissnceEnf", $MoisNaissnceEnf,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("anneeNaissanceEnf", $anneeNaissanceEnf,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("lieuNaissanceEnf", $lieuNaissanceEnf,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("anneEnLettre", $anneEnLettre,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("moisEnLettre", $moisEnLettre,PDO::PARAM_STR) ;
			$stmt_Enregist->bindParam("langueUtil", $langueUtil,PDO::PARAM_STR) ;
			$stmt_Enregist->execute() or die("pas enregistrer");

	$req_Ereg="SELECT MAX(codeEnregistrement) as max_Enre FROM Tenregistrement";
   $spv_Erg=$pdo->prepare($req_Ereg);
   $spv_Erg->execute();
	if($us_Enr=$spv_Erg->fetch()) {
	 $id_Enr=$us_Enr['max_Enre'];
	}

//INSERTION DE L'ADDRESSE ET CHAREMENT DU CODE ADRESSE LE DERNIER ENREGISTRER(MAX)
	 // $stmt_Adr = $pdo->prepare("INSERT INTO Tadresse(Province,Ville,District,Territoire_Commune,Cheferie_Cite,Bureau_provincial,Designation,Responsable,NumeroActe,Volume,Folio) VALUES(:Province,:Ville,:District,:Territoire_Commune,:Cheferie_Cite,:Bureau_provincial,:Designation,:nomOfficier,:NumeroActe,:Volume,:Folio)");
	 // $stmt_Adr->bindParam("Province", $Province,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Ville", $Ville,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("District", $District,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Territoire_Commune", $Territoire_Commune,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Cheferie_Cite", $Cheferie_Cite,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Bureau_provincial", $Bureau_provincial,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Designation", $Designation,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("nomOfficier", $nomOfficier,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("NumeroActe", $NumeroActe,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Volume", $Volume,PDO::PARAM_STR) ;
	 // $stmt_Adr->bindParam("Folio", $Folio,PDO::PARAM_STR) ;
	 // $stmt_Adr->execute() or die ("pas enregistrer mere");



				  //INSERTION DES INFORMATION DE L'ENFANTS
   $stmt_enfant = $pdo->prepare("INSERT INTO Tenfant(Sexe,nomCompletEnf,codeMere,codePere,codeHopital,codeEnregistrement) 
   				VALUES(:sexeEnf,:nomCompletEnf,:codeMere,:codePere,:codeHopital,:codeEnregistrement)");

   				$stmt_enfant->bindParam("sexeEnf", $sexeEnf,PDO::PARAM_STR) ;
   				$stmt_enfant->bindParam("nomCompletEnf", $nomCompletEnf,PDO::PARAM_STR) ;
				 $stmt_enfant->bindParam("codeMere", $codeMere,PDO::PARAM_STR) ;
				 $stmt_enfant->bindParam("codePere", $codePere,PDO::PARAM_STR) ;
				 $stmt_enfant->bindParam("codeHopital", $codeHopital,PDO::PARAM_STR) ;
				 $stmt_enfant->bindParam("codeEnregistrement", $codeEnregistrement,PDO::PARAM_STR) ;
				 $stmt_enfant->execute();

				 // header("location:./../home.php");
				  $result['success']="1";
  $result['message']="success";
  echo json_encode($result);
 
 }else
    {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }

 ?>