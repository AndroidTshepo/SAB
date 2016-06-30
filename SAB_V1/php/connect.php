<?php
 $dsn = 'mysql:host=localhost;dbname=sabdb02;charset=UTF8';
 $username = 'root';
 $password = '';
  
 try{
 	$db = new PDO($dsn,$username,$password);
 	} catch(PDOException $e){
 		$error_message = $e->getMessage();
 		echo $error_message;
 		exit;

 	}
 ?>