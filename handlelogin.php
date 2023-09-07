<?php
session_start();
require ("./validationlogin.php");
require ("./databaselogin.php");
if($valid->checkmethod("post")){
    $email=$_POST['email'];
    $password=($_POST['password']);
    if($valid->namecheck($email)){
        
        if ($valid->namecheck($password)){
            $user=$db2->getData("users","*","email='$email'");
            if($user){
                $_SESSION['auth']=$user[0];
                ($_SESSION['auth']);
                header("location:./main.php");

            }
            else{
                $_SESSION['error']="email not found";
                header("location:./login.php");
                die;
            }

                
                

            }}}
  
 



else{
    $_SESSION['error']='Method not available';
    header("location:./login.php");
    die;
}