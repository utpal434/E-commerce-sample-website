<?php
require 'common.php';
?>
<!DOCTYPE html>
<!--products
-->
<html>
    <head>
        <title>Product page</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
            <?php
            include 'header.php';
            include 'check_if_added_to_cart.php';
            ?>
             <div class="container" style="padding-top:80px;">
                   <div class="jumbotron">
                      <h1>Welcome to our Lifestyle Store!</h1>
                      <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                   </div>
                 <div class="text-center row">
                     <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                          <img src="image/canon.jpg" alt="canon eos">
                          <div class="caption">
                             <h4>Canon EOS</h4>
                             <p>Price Rs.36000</p>
                              <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(1)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                           </div>
                       </div>
                     </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                            <img src="image/sony.jpg" alt="sony">
                            <div class="caption">
                             <h4>Sony DSLR</h4>
                             <p>Price Rs.40000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(2)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                             </div>
                         </div>
                        </div>
                       <div class="col-md-3 col-sm-6">
                           <div class="thumbnail">
                               <img src="image/sony1.jpg" alt="sony">
                            <div class="caption">
                             <h4>Sony DSLR</h4>
                             <p>Price Rs.60000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(3)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                            </div>
                         </div>
                        </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/olympus.jpg" alt="sony">
                          <div class="caption">
                             <h4>Olympus DSLR</h4>
                             <p>Price Rs.80000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(4)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                         </div>
                        </div>
                 </div>
                  <div class="text-center row">
                     <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                          <img src="image/titan.jpg" alt="Titan luxury watch">
                          <div class="caption">
                             <h4>Titan model #301</h4>
                             <p>Price Rs.12000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(5)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                       </div>
                     </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/titan1.jpg" alt="Titan watch">
                          <div class="caption">
                             <h4>Titan model #302</h4>
                             <p>Price Rs.18000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(6)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                         </div>
                        </div>
                       <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/hmt.jpg" alt="HMT luxury watch">
                          <div class="caption">
                             <h4>HMT Milan</h4>
                             <p>Price Rs.8000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(7)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                         </div>
                        </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/faber.jpg" alt="Faber luxury watch">
                          <div class="caption">
                             <h4>Faber Luba #111</h4>
                             <p>Price Rs.18000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(8)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                         </div>
                        </div>
                 </div>
                  <div class="text-center row">
                     <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                          <img src="image/shirt1.jpg" alt="LOUIS">
                          <div class="caption">
                             <h4>Louis Philippe</h4>
                             <p>Price Rs.1800</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(9)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                       </div>
                     </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/shirt0.jpg" alt="H&W">
                          <div class="caption">
                             <h4>H&W</h4>
                             <p>Price Rs.800</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(10)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                         </div>
                        </div>
                       <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/shirt2.jpg" alt="JOHN">
                          <div class="caption">
                             <h4>John Zok</h4>
                             <p>Price Rs.1500</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(11)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
                          </div>
                         </div>
                        </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                          <img src="image/shirt3.jpg" alt="JHALSANI">
                          <div class="caption">
                              <h4>Jhalsani</h4>
                             <p>Price Rs.1300</p>
                             <?php if (!isset($_SESSION['email'])) { ?>                                 
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                 <?php                               
                              } else {                                                              
                                  if (check_if_added_to_cart(12)) {                                 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                      
                                  } else {                                     ?>                                     
                             <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block  btn-primary">Add to cart</a> 
                                   <?php                                    
                                  }                            
                                  }                            
                                  ?> 
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
