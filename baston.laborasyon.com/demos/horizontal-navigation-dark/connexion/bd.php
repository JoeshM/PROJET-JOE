<?php 
	 $server = "localhost"; 
	 $user = "root"; 
	 $pass = ""; 
	 $database = "courant"; 
		 try { 
		 	$pdo = new PDO("mysql:host=$server;dbname=$database;charset=utf8",$user,$pass);
		 } 
 		catch (PDOException $e) { 
 			die("Database Error..!".$e->getMessage()) ; 
 		} 

?>