<?php 
include_once "../shared/connection.php";
$uname=$_POST['username'];
$upass=$_POST['password'];

$sql_result=mysqli_query($conn,"SELECT  * FROM  user where username='$uname'");
if(!$sql_result){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
$row_count=mysqli_num_rows($sql_result);

if($row_count==0){
  echo 'invalid credentials, No user found!';
}
else{
    $row = mysqli_fetch_assoc($sql_result);
   // print_r($row);
    $userid=$row['userid'];

    session_start();
    $_SESSION['userid']=$userid;
    echo  $userid;

    echo "login sucess";
    header('location:view.php');
}

?>