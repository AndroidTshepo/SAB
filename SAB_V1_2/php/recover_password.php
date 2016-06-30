<?php
include ('connect.php');

$email = $_POST['reset-email'];

$checkemail = "Call checkemail(?)";
$check_query = $db->prepare($checkemail);
$check_query->bindParam(1,$email);
$check_query->execute();
$rows = $check_query->rowCount();

if($rows == 1){
  echo"<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert'>&times;</a><a class='text-center'>password recovered!</a></div>";

}else{
  echo  "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert'>&times;</a><i class='fa fa-2x fa-frown-o'></i><a class='text-center'>Invalid email</a></div>";

}
