<?php
$pid=$_GET['pid'];
session_start();
$userid=$_SESSION['userid'];

include_once "../shared/connection.php";
$mads="insert into cart(userid,pid) values($userid,$pid)";

$status=mysqli_query($conn,$mads);

if($status){
    echo"Added to cart";
    header('location:viewcart.php');
}
else{
    echo "error in sql syntax";
}

?>