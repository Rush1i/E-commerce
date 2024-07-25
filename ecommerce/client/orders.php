<?php
include_once "../shared/connection.php";
session_start();
$userid=$_SESSION['userid'];
$cart_result=mysqli_query($conn,"select * from cart where userid=$userid");
//$asd=$cart_row=mysqli_fetch_assoc($cart_result);
//$pid=$cart_row['pid'];
while($cart_row=mysqli_fetch_assoc($cart_result)){
    $pid=$cart_row['pid'];
    mysqli_query($conn, "insert into orders(userid,pid) values($userid,$pid)");
}
$status=mysqli_query($conn, "delete from cart where userid=$userid");
//$result=mysqli_query($conn, "select orderid from orders where userid=$userid and pid=$pid");
//echo $result;
if($status){
    echo"order placed successfully!";
    header('location:placeorder.php');
}
else{
    echo mysqli_error($conn);
    echo"error in sql syntax";
}
?>