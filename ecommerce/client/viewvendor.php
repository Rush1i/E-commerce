<!DOCTYPE html>
<html lang="en">
<head>
   <style>
       .card
    {
        width:320px;
        display:inline-block;
        border:2px solid grey;
        margin:10px;
        padding:5px;
        border-radius:6px;
        box-shadow: 5px 10px 5px rgb(23, 100, 78);
    }
    .card img
    {
        width:300px;
        height:220px;
    }
    .price
    {
        font-size:24px;
        color:greenyellow;
    }
    .title
    {
        font-size:28px;
        color:blue;
        font-family:calibri;
        text-transform:uppercase;
        background-color:aqua;
    }
   </style>
</head>
<body>
    
</body>
</html>
<?php

include("menu.php");
include_once('../shared/connection.php');

$sql_result = mysqli_query($conn, 'SELECT * from product');
while($row=mysqli_fetch_assoc($sql_result)){
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];
    echo "<div class='card'>
          <span>$pid</span>
          <div class='title'>$name</div>
          <div class='price'>$$price</div>
          <img src='$impath'>
          <p>$details</p>
          <a href='deleteproduct.php?pid=$pid'>
            <button>Delete</button>
          </a>
          <button>Edit</button>
    
        </div>";
}
?>