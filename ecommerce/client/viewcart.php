<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <style>
    .card
    {

        width:320px;
        display:inline-block;
        border:2px solid grey;
        margin:10px;
        padding:5px;
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
    .parent
    {
        display:flex;
        
        padding:5px;
        width:100%;        
    }
    .left-panel
    {
        width:85%;
        
    }
    .right-panel
    {
        background-color:aqua;
        width:100px;
    }
    .gutley{
        margin-top:14px;
    }
    .guttley:hover{
        cursor:pointer;
    }
</style>
    
</body>
</html>

<?php
include_once "../shared/connection.php";
include("../client/menu.php");

session_start();
$userid = $_SESSION['userid'];
 
$sql_result=mysqli_query($conn,"SELECT  * from cart join product on cart.pid=product.pid where userid=$userid");
$total=0;
echo "<div class='parent'>";

echo "<div class='left-panel'>";
while($row=mysqli_fetch_assoc($sql_result))
{
    $cartid=$row['cartid'];
    $pid=$row["pid"];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];

    $total=$total+$price;

    $impath=$row['impath'];

    echo "<div class='card'>
        <span>$pid</span>
        <div class='title'>$name</div>
        <div class='price'>₹$price</div>
        <img src='$impath'>
        <p>$details</p>
        <a href='../client/deletecart.php?cartid=$cartid'>
            <button>Remove from Cart</button>
        </a>
        
    
    </div>";
    
}

echo "</div>";


echo "<div class='right-panel'>
    <div>Total : ₹$total</div>
    <div> 
        <a href='orders.php'>
        <button class='gutley'>Place Order</button>
        </a>
    </div>
</div>";


echo "</div>";


?>
