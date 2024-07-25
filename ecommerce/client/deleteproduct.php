<?php

$pid=$_GET['pid'];

include_once "../shared/connection.php";

$status=mysqli_query($conn,"DELETE  from product where pid=$pid");
if($status)
{
    echo "Product removed successfully! !";
    header("location:../client/viewvendor.php");
}
else
{
    echo "Error in Sql Syntax" ,mysqli_error($conn);
}


?>