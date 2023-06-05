<!DOCTYPE html>
<html>
<head>
<title>Mail check</title>
<style>
/* body {
        font-family: "Baloo Bhai", cursive;
        color: black;
        margin-left: -900px;
        padding: 70px;
        background: url(bg.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;
        background-position: center;
} */
body{
    background-color:black;
    color: white;
}

        .left{
        display: inline-block;
        position: fixed;
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
        .logo {
position: absolute;
top: 20px;
left: 20px;
width: 100px;
height: 100px;
background-image: url("img/gym.png");
background-size: contain;
background-repeat: no-repeat;
}
/* img {
position: absolute;
top: -2px;
left: -13px;
height: 100px;
width: auto;
} */
.gif-line {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.gif-line img {
			margin: 10px 0;
			max-width: 100%;
			height: auto;
		}
        @media screen and (min-width: 768px) {
			.gif-line {
				flex-direction: column;
				justify-content: center;
			}

			.gif-line img {
				margin: 0 10px;
				max-width: 25%;
			}
		}
        #first{
        color: black;       
        text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px black;
}
@media (max-width: 768px) {
  .login-form {
    padding: 20px;
  }
  
  .login-form h2 {
    font-size: 24px;
    margin-bottom: 15px;
  }
  
  .login-form input[type="text"] {
    margin-bottom: 15px;
  }
}
  .login-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 103vh;
  background-image:url("gym.jpg");
  
       
  /* background-color:navajowhite; */
  box-shadow: 
    0 0 10px #ff0000,
    0 0 10px #00ff00,
    0 0 10px #0000ff;

}

.login-form {
  max-width: 400px;
  width: 90%;
  padding: 40px;
  border-radius: 8px;
  background-color: #ffffff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.login-form h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #333333;
}

.login-form input[type="email"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border: none;
  border-radius: 4px;
  background-color: #f5f5f5;
  box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
  color: #333333;
}

.login-form input[type="email"]:focus{
  outline: none;
  box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1);
}

.login-form input[type="submit"]{
  width: 100%;
  padding: 12px;
  background-color: #ff4f3e;
  color: #ffffff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.login-form button:hover {
  background-color: #ff6f5e;
}


</style>
</head>
<body>
    <div style = "position:fixed; left:24px; top:119px;color:white; font-family: 'Baloo Bhai',cursive;">
       <strong>Gym Visuals</strong>
     </div>
    <header class="header">
        <!--left box for logo-->

        <div class="left">
        <img src="gym.png" alt="" class="src">     
        </div>
        </header>
            
            <div class="login-container">
  <div class="login-form">
    <center><h1 id="first">Forgotten Password? <br>Don't Worry! <br>Let us know your registered email id so that we can redirect you to reset your password.<br>If we are not able to find your email id, we will redirect you to registration page.Please do Register and login.</h1></center>

    <form name="form1" method="Post" action="mailcheck1.php">
      <input class="in" type="email" name="mailid" placeholder="Enter your email" required>
      <input class="sub" type="submit" name="submit" value="Login">
    </form>
    </div>
    </div>
</body>
</html>
