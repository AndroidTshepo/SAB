<?php
//Declaring an array that will hold my results
$resultArray = array();



//Connecting to the Database
$db = mysqli_connect('localhost','databaseName','databaseUser', 'password' );
if($db-> connect_errno > 0)
{
cosole.log("Sorry could not connect to the database");
}

//preparing to get access to my stored procedures afer login
switch ($_GET['value']){

    //Creating a login section
    case 'user_Loging_SEL':

        //preparing my stored procedure here
    if(!($result = $db-> prepare("CALL user_Loging_SEL(?,?)")))
{
    //If the stored procedure is not found in the database
    echo $db->error;
}
    //If the stored procedure is found
        $result = $db-> prepare("CALL user_Loging_SEL(?,?)");

        if(!($result->bind_param("ss",$_GET['email'],$_GET['password']))){
          echo $db ->error;
        }

    if(!$result-> execute())
    {
        echo $db -> error;
    }
//    Here we are taking everything that is inside the table
    $result->bind_result($ID,$user_Name,$user_Email,$user_Role);

   while($result -> fetch())
   {
       //Here we list all the variables that we are going to use from the table
       $resultArray[] = array(
           'ID'=>$ID,
           'name'=>$user_Name,
           'email'=> $user_Role

       );

   }





default:
        break;

}

//$result close
$db->close();
echo json_encode($resultArray);
?>