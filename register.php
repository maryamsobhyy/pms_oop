<?php session_start();?>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <?php if (isset( $_SESSION['error'])):?>
        <div class=" alert alert-danger text-center">
            <?php echo $_SESSION['error'];

            unset ($_SESSION['error']); 
            ?>
        </div>
        <?php endif;?>
        <?php if (isset( $_SESSION['sucess'])):?>
        <div class=" alert alert-danger text-center">
            <?php echo $_SESSION['sucess'];

            unset ($_SESSION['sucess']); 
            ?>
        </div>
        <?php endif;?>
   
    <form action="handlereg.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" >

      <label for="email">Email:</label>
      <input type="email" id="email" name="email">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone">

      <input type="submit" value="Register">
      <label for="email">If you have account :</label>

      <a href="login.php">login</a>
      
    </form>
  </div>
</body>
</html>
