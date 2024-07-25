<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    *{
        
    }
    .box{
        display: flex;
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        background-color: rgb(252, 245, 246);
    }
    img{
        height:350px;
        width:350px;
        background-color: rgb(178, 223, 208);
        margin-top: 40px;
        padding: 10px;
        border-radius: 6px;
        left: 0;
    }
    .form{
        width: 200px;
        height: fit-content;
        display: flex;
        margin-top: 5px;
        margin-left: 100px;
        padding: 50px;
        padding-top: 5px;
        border: 5px solid grey;
        border-radius: 12px;
        background-color: rgba(181, 223, 67, 0.4);
        box-shadow: 5px 10px 28px rgb(163, 10, 104);
    }
   
    .but{
        align-items: center;
        height: 30px;
        width: 80px;
        color:whitesmoke;
        background-color: grey;
    }
    .but:hover{
        cursor: pointer;
    }
    .info{
        height: 450px;
        width: 300px;
        top:  10px;
        right: 60px;
        position: absolute;
        border: 2px solid grey;
        border-radius: 12px;
        color: rgb(14, 52, 179);
    }
    .o{
        height: 450px;
        width: 260px;
        padding: 4px;
        
    }
   </style>
</head>
<body>
    <div class="box">
    <img src="utsav.jpg" alt="">
    <div class="form">
        <form action="register.php" method="POST">
            <h3 class="reg">Registration Form</h3>
            <label for="username" User name>Username:</label>
            <input type="text" placeholder="Enter your username" name="username" required>
            <br> <br>
            <label for="password">Password:</label>
            <input type="password"  placeholder="Enter your password" name="password" id="" minlength="7" required>
            <br> <br>
            <label  for="upass1">Retype Password:</label>
            <input type="password" placeholder="Retype your password" name="upass1" id="">
              <br> <br>
            <label for="fullname">Full Name:</label>
            <input type="text" placeholder="Enter your full name" name="fullname" id="" required>
             <br> <br>
            <label for="number">Mobile Number:</label>
            <input type="number" placeholder="Enter your mobile number" name="number" id="" required>
              <br> <br>
            <label for="add">Address:</label>
            <input type="textarea" rows="5" placeholder='Enter your Address'name="add"  id="">
            <br> <br>
            <label for="dob">Date Of Birth: </label>
            <input type="date" name="dob" id="">
            <br> <br>
            <label for="gender">Gender:</label>
            <br> 
            <input type="radio" name="gender" value="male" id="" >
            <label for="male">Male</label>
            <br> 
            <input type="radio" name="gender" value="female"id="">
            <label for="male">Female</label>
             <br> <br>
            <button class="but">Submit</button>
        </form>
    </div>
    <div class="info">
        <h3 class="o">Welcome to <span class="bold">Utsav</span>, the ultimate destination for all your shopping needs! Our platform 
            is designed to provide you with a personalized, secure, and convenient shopping experience. 
            With a vast array of products ranging from fashion to home decor, we strive to make your 
            shopping journey hassle free and enjoyable. Our dedicated team of experts is here to assist
            you in your product selections and to make sure your shopping experience with us is nothing 
            short of perfect. Shop with us today and experience the Utsav difference!</h3>
    </div>
</div>
</body>
</html>