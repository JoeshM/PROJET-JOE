<?php
require_once("./../connexion/bd.php");
?>

<?php
if(!empty($_POST['Province']) && !empty($_POST['Ville'])&&
            !empty($_POST['District'])&& !empty($_POST['Territoire_Commune'])&&
            !empty($_POST['Cheferie_Cite'])&& !empty($_POST['Bureau_provincial'])&&
            !empty($_POST['Designation'])&& !empty($_POST['NumeroActe'])&&
            !empty($_POST['Volume']) && !empty($_POST['Folio'])&&
            !empty($_POST['nomOfficier']))
 {



$Province=$_POST['Province'];
		$Ville=$_POST['Ville'];
		$District=$_POST['District'];
		$Territoire_Commune=$_POST['Territoire_Commune'];
		$Cheferie_Cite=$_POST['Cheferie_Cite'];
		$Bureau_provincial=$_POST['Bureau_provincial'];
		$Designation=$_POST['Designation'];
		$NumeroActe=$_POST['NumeroActe'];
		$Volume=$_POST['Volume'];
		$Folio=$_POST['Folio'];
		$nomOfficier=$_POST['nomOfficier'];


		 $stmt_Adr = $pdo->prepare("INSERT INTO Tadresse(Province,Ville,District,Territoire_Commune,Cheferie_Cite,Bureau_provincial,Designation,Responsable,NumeroActe,Volume,Folio) VALUES(:Province,:Ville,:District,:Territoire_Commune,:Cheferie_Cite,:Bureau_provincial,:Designation,:nomOfficier,:NumeroActe,:Volume,:Folio)");

	 $stmt_Adr->bindParam("Province", $Province,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Ville", $Ville,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("District", $District,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Territoire_Commune", $Territoire_Commune,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Cheferie_Cite", $Cheferie_Cite,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Bureau_provincial", $Bureau_provincial,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Designation", $Designation,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("nomOfficier", $nomOfficier,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("NumeroActe", $NumeroActe,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Volume", $Volume,PDO::PARAM_STR) ;
	 $stmt_Adr->bindParam("Folio", $Folio,PDO::PARAM_STR) ;
	 $stmt_Adr->execute();

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