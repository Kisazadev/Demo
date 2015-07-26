<?php

if(isset($_POST['username'])){


$name = array("Edwin", "Student", "Kevin", "Samid", "Mohad", "Maria", "Jane", "Tom");
$minimum = 5;
$maximum = 10;
$username = $_POST['username'];
$password = $_POST['password'];



    if(strlen($username) < $minimum ) {

            echo "Username has to be longer than 5 characters";
    }
    if(strlen($username) > $maximum ) {

            echo "Username has to be less than 10 characters";
    }

    if(!in_array($username, $name)) {

        echo "Sorry, you are not allowed";
    } else {

        echo "welcome";

    }

//echo "hello " . $username;
//echo "Your password is " . $password;
}





?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>
