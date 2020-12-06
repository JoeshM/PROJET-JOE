<?php
  require_once("./../connexion/bd.php");

    if(!empty($_POST['nomUser']) && !empty($_POST['postNomUser']) &&
    	!empty($_POST['emailUser'])&& !empty($_POST['userNameUser'])
     && !empty($_POST['passUser']))
    {

    	$nomUser=$_POST['nomUser'];
    	$postNomUser=$_POST['postNomUser'];
		$emailUser=$_POST['emailUser'];
		$userNameUser=$_POST['userNameUser'];
		$passUser=$_POST['passUser'];
		

				$req = $pdo->prepare("INSERT INTO Admin(NomAdmin,PostnomUser,Email,UserNameAdmin,Pass) 
					VALUES (:nomUser,:postNomUser,:emailUser,:userNameUser,:passUser)");



			$req->bindParam("nomUser", $nomUser,PDO::PARAM_STR) ;
			$req->bindParam("postNomUser", $postNomUser,PDO::PARAM_STR) ;
			$req->bindParam("emailUser", $emailUser,PDO::PARAM_STR) ;
			$req->bindParam("userNameUser", $userNameUser,PDO::PARAM_STR) ;
			$req->bindParam("passUser", $passUser,PDO::PARAM_STR) ;
			
			$req->execute();

		$result['success']="1";
  $result['message']="success";
  echo json_encode($result);

  header("location:./../user-list.php");
		
    }
    else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
   	  ?>