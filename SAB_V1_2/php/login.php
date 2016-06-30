<?php
session_start();
include 'connect.php';

//Check if the submit button has been clicked and if clicked run the following statements


$username = $_POST['username'];
$user_pass = $_POST['password'];

$check = "Call login(?,?)";
$statement = $db->prepare($check);
$statement->bindParam(1, $username);
$statement->bindParam(2, $user_pass);
$statement->execute();
$ok = $statement->rowCount();

if ($ok == 1) {

    $row = $statement->fetch(PDO::FETCH_OBJ);

   $_SESSION['id'] = $row->customer_id;
    header("location:../index.php");
    } else {
    echo "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert'>&times;</a><i class='fa fa-2x fa-frown-o'></i><a class='text-center'>Invalid login credentials</a></div>";
}




?>