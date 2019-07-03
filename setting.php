<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
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
        <title>Setting|Lifestyle Store</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
       
    </head>
    <body>
            <div class="container-fluid decor_bg" style="padding-top:100px;">
            <div class="row">
               <div class="col-md-8 col-md-offset-3">
                   <h4><b>Change Password</b></h4>
            </div>
                <form method="POST" action="setting_script.php">
                     <div class="col-md-4 col-md-offset-3">
                     <div class="form-group">
                    <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                    <?php
                     if(!empty($_GET['error']))
                     {
                     echo $_GET['error'];}?>
                    </div>
                     </div>
                     <div class="col-md-4 col-md-offset-3">
                     <div class="form-group">
                    <input type="password" name="new_password" class="form-control" placeholder="New Password">
                    <?php
                     if(!empty($_GET['message']))
                     {
                     echo $_GET['message'];}?>
                    </div>
                     </div>
                     <div class="col-md-4 col-md-offset-3">
                     <div class="form-group">
                    <input type="password" name="re-type-new-password" class="form-control" placeholder="Re-type New Password">
                    </div>
                     </div>
                     <div class="col-md-4 col-md-offset-3">
                         <button class="btn btn-primary">change</button>
                     </div>
                </form>     
        </div>
    </body>
</html>
