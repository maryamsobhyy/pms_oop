<?php
session_start();

require ("./validations.php");
require ("./database.php");

$quantity=$_POST['quantity'];
echo $quantity;
// $cart=$db->insertData("cart", "`name`,`email`,`password`,`satuts`,`phone`","'$name','$email','$password','','$phone'");