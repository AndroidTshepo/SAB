<?php
include('connect.php');

// Check if a submit button from the registration form has been submitted
    // get values from the form and assign the to new variales 
    $Firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $account = $_POST['account'];
    $pin = $_POST['pin'];
    $password = $_POST['password'];


    try {
        // check for an existing customer with the same email and account
        $check = "Call check_user(?,?)";
        $check_usr = $db->prepare($check);
        $check_usr->bindParam(1, $email);
        $check_usr->bindParam(2, $account);
        $check_usr->execute();
        $exist = $check_usr->rowCount();
        $check_usr->closeCursor();

        if($exist>1){
            echo "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert'>&times;</a><i class='fa fa-2x fa-frown-o'></i><a class='text-center'>User with the same credentials already exist,please login!.</a></div>";

        }else {


            $insert = "Call register(?,?,?,?,?,?);";
            $statement = $db->prepare($insert);
            $statement->bindParam(1, $Firstname);
            $statement->bindParam(2, $lastname);
            $statement->bindParam(3, $email);
            $statement->bindParam(4, $account);
            $statement->bindParam(5, $pin);
            $statement->bindParam(6, $password);
            $success = $statement->execute();
            $statement->closeCursor();

            if ($success) {
                echo '<script language="JavaScript">window.location.href="./services.html";</script>';
            } else {
                header('Location:../index.html');
            }
        }



    } catch (PDOExeption $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit;
    }

?>