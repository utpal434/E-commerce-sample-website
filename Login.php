<?php
require 'common.php';
?>
<!DOCTYPE html>
<!--Login page
-->
<html>
    <head>
        <title>Login page</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head> 
    <body>
      
      <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i></p><p>
                                </p><form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="" pattern=".{6,}">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>  <?php
                                   if(!empty($_GET['email_error']))
                                    { 
                                      echo $_GET['email_error'];}?><br><br>
                                </form><br>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </body>
 <?php
        include 'footer.php';
 ?>
</html>
