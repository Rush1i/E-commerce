<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      include('../client/menuvendor.php');
    ?>
   <style>
     input, textarea{
        display: block;
        margin: 10px;
        margin-top: 20px;
        border: 2px solid black;
        border-radius: 6px;
     }
    .box{
        border: 2px solid grey;
        height: fit-content;
        width: fit-content;
        padding: 20px;
        margin-top: 80px;
        margin-left: 450px;
        box-shadow: 5px 10px 5px rgb(204, 15, 78);
     }
     .nut:hover{
      cursor:pointer;
     }
     .nut{
      background-color:transparent;
      padding:0px;
     }
   </style>
</head>
<body>
    <div class="box">
    <h3>Enter your product details</h3>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="Product name" name="name">
        <input type="text" placeholder="Product price" name="price">
        <textarea  placeholder='Description' name="details" id="" cols="30" rows="10"></textarea>
        <input type="file" name="pdtimg">
        <button class="nut"><input type="submit" value="submit"></button>
    </form>
</div>
</body>
</html>