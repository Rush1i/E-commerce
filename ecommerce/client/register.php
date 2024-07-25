<?php
include_once "../shared/connection.php";

$uname=$_POST['username'];
$upass=$_POST['password'];
//$fname=$_POST['fullname'];
//$number=$_POST['number'];
$res=mysqli_query($conn,"select * from user where username='$uname'");
$count=mysqli_num_rows($res);
echo "count=$count";
if($count==0){
    $status=mysqli_query($conn,"insert into user(username,password) values('$uname','$upass')");
    if($status){
        echo "registration success!!";
        header('location:login1.php');
    }
    else{
        echo mysqli_error($conn);
    }
}
else {
    echo "username already exists, try alternative names!!";
}

?>