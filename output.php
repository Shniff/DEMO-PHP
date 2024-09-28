<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username            = $_POST["username"];
   $email               = $_POST["email"];
   $password            = $_POST["password"];
   $confirm_password    = $_POST["confirm-password"];

   
   



    //Validate
    /*
    if (trim($username) != ""){
    echo "User username is not empty<br>";
    } else {
    echo "Field username is empty <br>";
    }

    if (trim($email) != ""){
    echo "User email is not empty<br>";
    } else {
    echo "Field email is empty <br>";
    }

    if (trim($password) != ""){
    echo "User password is not empty<br>";
    } else {
    echo "Field password is empty <br>";
    }

    if (trim($confirm_password) != ""){
    echo "User confirm password is not empty<br>";
    } else {
    echo "Field password is empty <br>";
    }
    */



   
//echo "User email is ". $email. "<br>";
// echo "User username is ". $username. "<br>";
 test($username);
 test($email);
 test($password);
 test($confirm_password);
}

function test($fieldName){
    if (trim($fieldName) != ""){
        echo "User $fieldName is NOT EMPTY<br>";
        } else {
        echo "Field $fieldName is EMPTY<br>";
        }

    }
?>