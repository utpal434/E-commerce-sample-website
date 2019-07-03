<?php
if(!isset($_SESSION['email']))
{
    session_start();
}  
$con = mysqli_connect("localhost", "root", "rootPassword", "store")
 or die(mysqli_error($con));
?>