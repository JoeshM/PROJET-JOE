<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['pays'])&& !empty($_POST['province'])&&
        !empty($_POST['ville'])&& !empty($_POST['district'])&&
         !empty($_POST['territoire_commune']) && !empty($_POST['chefferie_cite'])
&& !empty($_POST['bureauProvincial']) && !empty($_POST['designationBureau'])
&& !empty($_POST['responsable']) && !empty($_POST['numeroActe'])
&& !empty($_POST['volume']) && !empty($_POST['folio'])
       )

 	
     {
      $pays=$_POST['pays'];
$province=$_POST['province'];
    $ville=$_POST['ville'];
    $district=$_POST['district'];
    $territoire_commune=$_POST['territoire_commune'];
    $chefferie_cite=$_POST['chefferie_cite'];
    $bureauProvincial=$_POST['bureauProvincial'];
    $designationBureau=$_POST['designationBureau'];
    $responsable=$_POST['responsable'];
    $numeroActe=$_POST['numeroActe'];
    $volume=$_POST['volume'];
    $folio=$_POST['folio'];

      $stmt_Benregist = $pdo->prepare("INSERT INTO Tadresse(Pays,Province,Ville,District,Territoire_Commune,Cheferie_Cite,Bureau_provincial,Designation,Responsable,NumeroActe,Volume,Folio) VALUES(:pays,:province,:ville,:district,:territoire_commune,:chefferie_cite,:bureauProvincial,:designationBureau,:responsable,:numeroActe,:volume,:folio)");

      $stmt_Benregist->bindParam("pays", $pays,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("province", $province,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("ville", $ville,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("district", $district,PDO::PARAM_STR) ;   
      $stmt_Benregist->bindParam("territoire_commune", $territoire_commune,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("chefferie_cite", $chefferie_cite,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("bureauProvincial", $bureauProvincial,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("designationBureau", $designationBureau,PDO::PARAM_STR) ;   
      $stmt_Benregist->bindParam("responsable", $responsable,PDO::PARAM_STR) ;
        $stmt_Benregist->bindParam("numeroActe", $numeroActe,PDO::PARAM_STR) ;
      $stmt_Benregist->bindParam("volume", $volume,PDO::PARAM_STR) ;   
      $stmt_Benregist->bindParam("folio", $folio,PDO::PARAM_STR) ;
     
          $stmt_Benregist->execute();

          $req_Benr="SELECT max(codeAdresse) as max_add FROM `tadresse`";
          $spv_add=$pdo->prepare($req_Benr);
          $spv_add->execute();
      if($us_madd=$spv_add->fetch()) {
        session_start();
        $_SESSION['id_add']=$us_madd['max_add'];
        //echo "".$_SESSION['id_add'];
        }
  header("location:./../info_enregistrement.php?id=".$_SESSION['id_add']);

     } 
     else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>