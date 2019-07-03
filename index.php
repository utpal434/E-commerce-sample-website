<?php
require 'common.php';
?>
<?php
  if(isset($_SESSION['email'])){
      header('location:product.php');
  }
  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LIFESTYLE STORE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include 'header.php';
        echo 'email_error';
        ?>
        <div class="banner-image">
            <div class="container">
                <center>
                    <div class="banner-content">
                        <h2>We Sell Lifestyle</h2>
                        <P>Flat 40% OFF on premium brands</p><br><br>
                        <a href="product.php"  class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
         <div class="container">
            <div class="items">
                <a href="product.php">
                    <img src="image/camera.jpg" alt="camera" class="thumbnail">
                    <div class="caption"><h2>Cameras</h2><p>choose among the best available in the world</p></div></a>
            </div>
             <div class="items">
                <a href="product.php">
                    <img src="image/watch.jpg" alt="Watch" class="thumbnail">
                    <div class="caption"><h2>Watches</h2><p>original watches from the best brands</p></div></a>
                </div>
            <div class="items">
                <a href="product.php">
                    <img src="image/shirt.jpg" alt="Shirts" class="thumbnail">
                    <div class="caption"><h2>Shirts</h2><p>our exquisite collection of shirts</p></div></a>
                </div>
            </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
