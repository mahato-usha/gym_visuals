<!DOCTYPE html>
<html>
<head>
<title>GYM VISUALS</title>
<style>
body {
        font-family: "Baloo Bhai", cursive;
        color: black;
        margin-left: -900px;
        padding: 70px;
        background-image: url("register.jpg");
        background-size: cover;
  background-position: center;
  background-repeat:no repeat;

}
        .left{
        display: inline-block;
        position: absolute;
        left: 34px;
        top: 20px;

        }
        .left img{
        width: 95px;
        filter: invert(100%);
        }
        .left.div{
        line-height: 19px;
        font-size: 26px;
        text-align: center;
        }
form {
padding: 20px;
margin: 100px auto;
max-width: 500px;
text-align: left;
border-radius: 10px; 
display:flex;
flex-direction: column;
/* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); */
}
        .logo {
position: absolute;
top: 20px;
left: 20px;
width: 100px;
height: 100px;
background-image: url("gym.png");
background-size: contain;
background-repeat: no-repeat;
}
img {
position: absolute;
top: -2px;
left: -13px;
height: 100px;
width: auto;
}
input[type="text"],
input[type="email"],
        input[type="text"],
        input[type="text"],
        input[type="text"],
        input[type="text"],
        input[type="text"],
        input[type="password"],
        textarea{
padding: 10px;
margin-bottom:20px;
width: 100%;
border-radius: 5px;
border: none;
font-size: 15px;
}
input[type="submit"] {
background-color: #4CAF50;
color: white;
cursor: pointer; 
border: none;
padding: 10px;
border-radius: 5px;
text-align: center;

}
input[type="submit"]:hover {
background-color: #542be4;
} 
.container{
        background-color: rgba(255,255,255,0.8);
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2); 
        margin: auto;
        max-width: 550px; 
        text-align: center;
        margin-bottom: 20px;
} 
h1{
        font-size: 25px;
        margin-top: 0px;
        font-family: 'Times New Roman', Times, serif;
}
p{
        font-size: 14px;
}
#first{
font-size:25px;
font-family: 'Times New Roman', Times, serif;
color:white;
padding: 0px;
margin-bottom: 10px;
}

</style>
</head>
<body> 
    <div style = "position:absolute; left:24px; top:119px;color:white; font-family: 'Baloo Bhai',cursive;">
       <strong>Gym Visuals</strong>
     </div>
    <header class="header">
        <!--left box for logo-->

        <div class="left">
        <img src="gym.png" alt="" class="src">
       
        </div>
    </header>
   
        

    <div class="container">
<form action="re.php" method="post" enctype="multipart/form-data">
<center><h1>REGISTRATION FORM</h1></center>
<input type="text" placeholder="Enter User name" name="nm" required>
<input type="email" placeholder="Enter Email id" name="em" required>
<input type="text" placeholder="Age" name="age" required>
<input type="text" placeholder="Mobile no" required>
<input type="password" placeholder="Enter Password" name="pass" required> 
<input type="password" placeholder="Confirm Password" name="cpass" required>
<input type="text" placeholder="State" name="st" required>
<input type="text" placeholder="District" name="dist" required>
<input type="text" placeholder="City" name="cit" required>
<input type="submit" value="Register">
<p>Already have an account?<a href="login.php">Login</a></p>
</form>

    </div>
    <marquee id="first" behavior="scroll" direction="left" scrollamount="24" width="100%">Welcome to our website!We are glad to have you on board. Thank you for registering with us.</marquee>

<!-- <marquee id="second" behavior="scroll" direction="right" scrollamount="20" width="100%">Gym Visuals</marquee> -->
<!-- <marquee behavior="scroll" direction="right" scrollamount="50" width="100%">Gym Visuals</marquee>  -->
</body>
</html>