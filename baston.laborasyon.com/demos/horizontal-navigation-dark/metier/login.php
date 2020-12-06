<?php
  require_once("./../connexion/bd.php");
  $username=$_POST['username'];
  $password=$_POST['password'];
  $ps=$pdo->prepare("SELECT * FROM Admin WHERE UserNameAdmin=? AND Pass=?");
  $param=array($username,$password);
  $ps->execute($param);
    if ($user=$ps->fetch()) {
         session_start();
         
         $_SESSION['UserNameAdmin']=$user['UserNameAdmin'];
        // $_SESSION['acces']=$user['acces'];
         header("location:./../Home.php");
      }
    else{
       die("Nom d'utilisateur ou Mot de passe pas trouve");
    }
?>