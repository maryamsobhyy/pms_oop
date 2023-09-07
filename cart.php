<?php
session_start();
require ("./databaselogin.php");
$product_id=$_POST['id'];
$user_id=($_SESSION['auth']['id']);
$product=$db2->getData("products","*","id='$product_id'");
($product[0]['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <form method="POST" action="./carthandle.php">

        <label for="name">Name of product:<?php print_r($product[0]['name']); ?></label>
        <label for="password">Price:<?php print_r($product[0]['price']); ?></label>
        <input type="number" name="quantity" placeholder="Quantity">
         <button>Submit</button>
                </form>
</body>
</html>
