<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    *{
  margin: 0;
  padding: 0;
  font-family: Georgia, 'Times New Roman', Times, serif;
}
main{
  height: 100vh;
  background: url('utsav.jpg');
  background-size: cover;
}
#container{
  width: 350px;
  height: 500px;
  background: inherit;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 70%;
  margin-right: -5px;
  margin-top: -270px;
  border-radius: 8px;
}
#container:before{
  width: 400px;
  height: 550px;
  content: "";
  position: absolute;
  top: -25px;
  left: -25px;
  bottom: 0;
  right: 0;
  background: inherit;
  box-shadow: inset 0 0 0 200px rgba(255,255,255,0.2);
  filter: blur(11px);
}

form{
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
input{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  border-bottom: 2px solid rgba(17, 16, 16, 0.3);
  margin: 20px 0;
  padding-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: rgba(247, 237, 237, 0.8);
}
input[type="submit"]{
  border: 0;
  border-radius: 8px;
  padding-bottom: 0;
  height: 60px;
  background: #df2359;
  color: rgb(226, 213, 213);
  cursor: pointer;
  transition: all 600ms ease-in-out;
}
input[type="submit"]:hover{
  background: #C0392B;
}
span a{
  color: rgba(255,255,255, 0.8);
}
.span{
    color: rgb(119, 5, 53);
}
.span:hover{
    text-decoration: underline;
    cursor: pointer;
    color: blue;
}
.heading{
    font-size: 60px;
}
   </style>
</head>
<body>
    <main>
        <div id="container">
          <form action="login.php" method="POST">
            <label for="" class="heading">Login</label><br>
            <br>
            <label for="username" >Username:</label>
            <input type="text" name="username"><br>
            <label for="password">Password:</label>
            <input type="password" name="password"><br>
            <input type="submit" value="LOG IN"><br>
            <span><a href="#">Forgot Password?</a></span><br>
            <br>
            <p> Don't have an account? <a href="register1.php" class="span">Register</a></p>
          </form>
        </div>
        </main>
</body>
</html>