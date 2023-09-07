<?php session_start();
($_SESSION['auth']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronic store</title>
    <link rel="stylesheet" href="./style3.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav>
        <ul>
            
            <li><a href="#description">Laptops</a></li>
            <li><a href="#salary">Bags</a></li>
            <li><a href="#contactus">Admin</a></li>
            
        </ul>
    </nav>
    <div class="description" id="description">
        <h2>Laptops </h2>
            <form action="./cart.php" method="POST">
            <div class="product">
            <img src="./R.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>$10.99</p>
            <input type="hidden" name="id" placeholder="Your Password" value=1>
            

            <button >Add to Cart</button>

    </div>
            </form>
            <form action="./cart.php" method="POST">
            <div class="product">
            <img src="./R.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>$10.99</p>
            <input type="hidden" name="id" placeholder="Your Password" value=2>
            

            <button >Add to Cart</button>

    </div>
            </form>
               
               

            


  

        
        <div class="salary" id="salary">
            
        <h2>Bags </h2>
    <div class="product">
      <img src="./R.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p>$10.99</p>
      <button>Add to Cart</button>

    </div>

        <div class="contactus" id="contactus">
            <p><span>Quote:</span><br>"If you are superadmin please fill this form to control your website" </p>
            <div class="call">
                <p>Admin page</p>
                <?php if (isset( $_SESSION['error'])):?>
                <div class=" alert alert-danger text-center">
                <?php echo $_SESSION['error'];

                unset ($_SESSION['error']); 
            ?>
        </div>
        <?php endif;?>
                <form method="POST" action="handleadmin.php">
                    <input type="text" name="name"  placeholder="Name">
                    <br>
                    <input type="email" name="email" placeholder="Your Email">
                    <br>
                    <input type="password" name="password" placeholder="Your Password">
                    <br>
                    
                    <button>Submit</button>
                </form>
            </div>
        </div>
<script src="javascript/jquery-3.6.3.min.js"></script>
<script src="javascript/event.js"></script>
    
</body>
</html>