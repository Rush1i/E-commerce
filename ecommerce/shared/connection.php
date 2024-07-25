<?php

$conn=new mysqli("localhost","root","","ecom");
if($conn->connect_error){
    echo " connection failed";
    die;
}
//else{
  // echo " connection success!!! party hard";
//}
?>
