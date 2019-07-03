<?php
require 'common.php';
if(isset($_SESSION['email']))
{
header('location:product.php');
}
?>
<!DOCTYPE html>
<!--Sign up page
-->
<html>
     <head>
        <title>Sign Up|Lifestyle store</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php
      include 'header.php';
      ?>
   <div class="container-fluid decor_bg" style="padding-top: 100px;width: 450px;min-height: 800px;background-color:#fff" >
            <h2>SIGN UP</h2>
            <form method="POST" action="signup_script.php">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" pattern=".{2,}">
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"  pattern=".{2,}">
                </div>
                     <div class="form-group">
                         <input type="text" name="email" class="form-control" placeholder="Email" id="email">
                         <?php if(!empty($_GET['email_error'])){echo $_GET['email_error'];}?>
                     </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                         <?php if(!empty($_GET['password_error'])){echo $_GET['password_error'];}?>
                    </div>
                     <div class="form-group">
                         <input type="number" name="contact" class="form-control" placeholder="Contact">
                </div>
                     <div class="form-group">
                         <input type="text" name="city" class="form-control" placeholder="City">
                </div>
                     <div class="form-group">
                         <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                     <button class="btn btn-primary">Submit</button><?php if(!empty($_GET['error'])){echo $_GET['error'];} ?>
            </form>
   </div>
              
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
