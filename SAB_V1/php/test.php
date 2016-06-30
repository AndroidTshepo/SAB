<?php
try{
     $conn = new PDO('mysql:host=localhost;dbname=sabdb02','root','');
     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){

    echo $e->getMessage();
    die();

}

