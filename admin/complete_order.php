<?php 
 session_start(); 
include '../includes/functions.php';
include '../includes/db_connection.php';
$order_id=$_REQUEST["id"];



$query="UPDATE orders_ SET fullfilled=1 where order_id='{$order_id}' ";
$result = mysqli_query($con,$query);
confirm_query($result);

if ($result) {
    redirect_to("manage_orders.php");
    
} else {
	echo "failed to update status";
}


 ?>