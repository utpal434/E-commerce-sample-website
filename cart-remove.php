<?php

include 'common.php';
$user_id = $_SESSION['id'];
$item_id = $_GET['id'];
$delete_row = "DELETE FROM users_items WHERE users_items.item_id = '$item_id' AND users_items.user_id = '$user_id'" or die($delete_row);
$query_result  = mysqli_query($con, $delete_row) or die(mysqli_error($con));
header('location:cart.php');
?>