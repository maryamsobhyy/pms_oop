<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <div class="container">
    <form action="handlelogin.php" method="POST">
      <h2>Login</h2>
      

      <div class="input-group">
        <label for="name">Email:</label>
        <input type="text" id="name" name="email" >
      </div>

      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
      </div>

      <button type="submit">Login</button>
      

      <?php if (isset( $_SESSION['error'])):?>
        <div class=" alert alert-danger text-center">
            <?php echo $_SESSION['error'];

            unset ($_SESSION['error']); 
            ?>
        </div>
        <?php endif;?>
    </form>
  </div>
</body>
</html>