<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:Login.php');
}
$user_id = $_SESSION['id'];
$query = "SELECT items.id,name,price FROM items INNER JOIN users_items ON items.id = users_items.item_id WHERE $user_id = users_items.user_id";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<!--
Cart|Lifestyle Store
-->
<html>
    <head>
        <title>Cart|Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row decor_bg" style="padding-top: 100px;height: 600px;">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Item Number</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sum = 0;
                        $c =1;
                        if(mysqli_num_rows($result) == 0)
                        {
                           echo '<h3 style="padding_bottom=16px;">Add item to the cart first</h3>';  
                        } 
                        else
                        {
                          while($row = mysqli_fetch_assoc($result))
                             {
                             $sum = $sum  + $row['price']; 
                            ?>
                        <tr>
                            <td><p><?php echo $c++;?></p></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['price'];?></td>
                            
                            <td><a href="cart-remove.php?id=<?php echo $row['id']?>" class='remove_item_link'> Remove</a> </td>
                        </tr>
                        <?php
                             }?>
                        <?php
                        } ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs.<?php echo $sum; ?></td>
                            <td><a href="success.php?id={$_SESSION['id']}"><button class="btn btn-primary">Confirm Order</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>   
        </div>
         <footer>
            <center>
            <div class="container">
                <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
            </div>
            </center>
        </footer>
    </body>
</html>
