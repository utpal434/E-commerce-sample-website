<?php
require 'common.php';
$user_id = $_SESSION['id'];
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
else
{
 $update_query = "UPDATE users_items SET status = 'confirmed' WHERE user_id = $user_id";
 $result = mysqli_query($con, $update_query);
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
        <title>Order confirmed|Lifestyle store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid decor_bg" style="padding-top: 50px;">
            <div class="row">
            <div class="col-md-12">
             <div class="jumbotron"><h3 align="center"><b>Your order is confirmed. Thank you for shopping with us.</b></h3><hr>
                <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>
             </div>
            </div>
            </div>
        </div>
              </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
