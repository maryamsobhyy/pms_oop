<?php
session_start();
require ("./validationlogin.php");
require ("./databaselogin.php");
if($valid->checkmethod("post")){
    $email=$_POST['email'];
    $password3=$_POST['password'];
            $data=$db2->getData("users","email,password","email=$email" and "satuts='superadmin'");
            var_dump($data);
            if($data){
                $check=password_verify($password3,$data[0]['password']);
                var_dump($check);
                // header("location:./admin.php");
                    // 
            }
            else{
                $_SESSION['error']="Email not found";
                header("location:./main.php");
                die;

            }

                
                

            }

?>