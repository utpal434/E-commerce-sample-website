<?php
require 'common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
{
  header('location: signup.php?email_error=enter correct email');
}
$pass = $_POST['password'];
if(strlen($pass)<6){
    header('location: signup.php?password_error=weak password');
}
$email = mysqli_real_escape_string($con, $email);
$pwd = mysqli_real_escape_string($con, $pass);
$password = md5($pwd);
$user_query = "SELECT * FROM users WHERE email='$email'";
$query_result = mysqli_query($con, $user_query);
if(mysqli_num_rows($query_result) != 0)
{
    $mesg = 'this account is alredy registered';
    header("location:signup.php?error={$mesg}");
}
else{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['contact'];
    $insert_query = "insert into users(email, password, first_name, last_name, phone,Address,city) values ('$email','$password','$first_name', '$last_name', '$phone','$address','$phone')";
    $submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    header("location:product.php?message=welcome $first_name");
}
?>