<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      .box{
        display:flex;
        justify-content:start;
        gap:40px;
        background-color:brown;
        color:white;
      }
      a{
        color:white;
        padding:20px;
        text-decoration:none;
      }
      a:hover{
        background-color:rgb(44,186,175);
        text-decoration:underline;
        color: black;
      }
   </style>
</head>
<body>
    <div class="box">
        <a href="../client/viewvendor.php">Home</a>
        <a href="../client/viewcart.php">View Cart</a>
       <a href="../client/orders.php">View Orders</a>
       <a href="../vendor/add.php">Upload products </a>
       <a href="../client/login1.php" style ="">Logout </a>
    </div>
</body>
</html>
