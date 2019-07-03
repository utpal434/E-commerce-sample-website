<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <title>Header</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
         <div class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 20px;">
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
                        <?php
                        if(!isset($_SESSION['email'])){
                        ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php }
                         else{
                             ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                           <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                         <?php } ?>
                   </ul>
                </div>
            </div>
        </div>
    </body>
</html>
