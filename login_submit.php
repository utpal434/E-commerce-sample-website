
<?php
require 'common.php';
 
$email = '';
$password = '';
$pwd = '';
$email = $_POST['email'];
$pwd= $_POST['password'];
$password = md5($pwd);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) != 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$email = $row["email"];
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("location: product.php");
}
else
{
    $msg = 'invalid email or password';
    header("location:login.php?email_error={$msg}");
}
?>