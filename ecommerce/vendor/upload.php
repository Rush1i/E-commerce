<?php

include('../client/menuvendor.php');
//print_r($_POST);
//print_r($_FILES['pdtimg']);
//move_uploaded_file($_FILES['pdtimg']['tmp_name'],"../shared/images/test.jpg");
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../shared/connection.php";

$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
$fname=$_FILES['pdtimg']['name'];
$impath="../shared/images/$fname";

move_uploaded_file($_FILES['pdtimg']['tmp_name'],$impath);
  
   
$status = mysqli_query($conn, "INSERT INTO  product (name,details,price,impath) values('$name','$details',$price,'$impath')");
if(!$status){
   die('Error executing query:' .mysqli_error($conn));
}
else{
   echo "product uploaded successfully!!!";
   header('Location:../client/view.php/');
}

?>


