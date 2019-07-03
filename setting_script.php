<?php

include 'common.php';
$new = $_POST['new_password'];
$re_new = $_POST['re-type-new-password'];
$pwd = md5($new);
$pass= $_POST['old_password'];
$password  = md5($pass);
if(strlen($new != $re_new))
{
    $mesg = 'error! New Password is not matching';
    header("location:setting.php?message={$mesg}");
}
$result = mysqli_query($con, "SELECT *from users WHERE id='" . $_SESSION["id"] . "'");
$row = mysqli_fetch_array($result);
if ($password == $row["password"]) {
        mysqli_query($con, "UPDATE users set password='" . $pwd. "' WHERE id='" . $_SESSION["id"] . "'");
        header('location:product.php');
    } else
    {
        header("location:setting.php?error=wrong password");
}
?>