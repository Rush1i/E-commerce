<?php
$cartid=$_GET['cartid'];

include_once '../shared/connection.php';
$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status){
    echo"product removed successfully!";
    header('location:viewcart.php');
}
else{
    echo "error in sql syntax u gutley!";
}

?>