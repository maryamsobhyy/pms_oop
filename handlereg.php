<?php
session_start();
require ("./database.php");
require ("./validations.php");
if($valid->checkmethod("post")){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    if($valid->namecheck($name )){
        if ($valid->minname($name)){
                if($valid->namecheck($email)){
                    if ($valid->minname($email)){
                        if ($valid->namecheck($password )){
                            $db->insertData("users", "`name`,`email`,`password`,`satuts`,`phone`","'$name','$email','$password','','$phone'");
   
                            $_SESSION['sucess']='Data inserted sucessfully,REGISTRATION DONE';
                            header("location:./register.php");
                            die;

                        }
                            

                                }

                               

                            }

                        }
                    }


                }
              

            


else{
    $_SESSION['error']="Method not available";
    header("location:./register.php");
    die;

}




?>