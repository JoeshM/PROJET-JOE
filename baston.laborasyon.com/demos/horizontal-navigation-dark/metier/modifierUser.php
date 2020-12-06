<?php
require_once("./../connexion/bd.php");
?>
<?php

 if(!empty($_POST['NomAdmin']) &&
    !empty($_POST['PostnomUser']) && 
    !empty($_POST['Email']) &&
    !empty($_POST['UserNameAdmin']) && 
    !empty($_POST['Pass'])  &&
    !empty($_POST['codeAdmin']))
     {
    
    
    $NomUser=$_POST['NomAdmin'];
    $PostnomUser=$_POST['PostnomUser'];
    $Email=$_POST['Email'];
    $UserNameAdmin=$_POST['UserNameAdmin'];
    $Pass=$_POST['Pass'];
    $codeUser=$_POST['codeAdmin'];

      $stmt_enfant = $pdo->prepare("UPDATE `Admin` SET `NomAdmin`=:NomAdmin,
        `PostnomUser`=:PostnomUser,
        `Email`=:Email,
        `UserNameAdmin`=:UserNameAdmin,
        `Pass`=:Pass WHERE `codeAdmin`=:codeAdmin");
     
      $stmt_enfant->bindParam("NomAdmin", $NomAdmin,PDO::PARAM_STR) ;
      $stmt_enfant->bindParam("PostnomUser", $PostnomUser,PDO::PARAM_STR) ;   
      $stmt_enfant->bindParam("Email", $Email,PDO::PARAM_STR) ;
      $stmt_enfant->bindParam("UserNameAdmin", $UserNameAdmin,PDO::PARAM_STR) ;
       $stmt_enfant->bindParam("Pass", $Pass,PDO::PARAM_STR) ;
       $stmt_enfant->bindParam("codeAdmin", $codeAdmin,PDO::PARAM_STR) ;
      $stmt_enfant->execute();
      //echo "".$codePere;
      echo "success";
      
      header("location:./../user-list.php");
  } 


 else
	     {
		$result['success']="0";
 $result['message']="Error";
 echo json_encode($result);
   	    }
	 ?>