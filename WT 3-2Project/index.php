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

#video-background {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: -1;
  overflow: hidden;
}

#video-background video {
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
}
.btn4{
        font-family: 'Baloo Bhai',cursive;
        /* margin: -1px 9px; */
        color: white;
        background-color: black;
        padding: 4px 3px;
        border: 2px solid gray;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn:hover{
        background-color: rgb(20, 19, 19);
    }
    .btn{
        font-family: 'Baloo Bhai',cursive;
        margin: -1px 9px;
        color: white;
        background-color: black;
        padding: 4px 14px;
        border: 2px solid gray;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
    }
    /* .mid{
        display: block;
        width: 40%;
        margin: 20px auto;

    } */

    .right{
        position: absolute;
        right: 34px;
        top: 20px;
        display: inline-block;
       
    }
    .left1{
        position: absolute;
        right: 143px;
        top: 20px;
        display: inline-block;
        }
        .btn{
                font-family: 'Times New Roman', Times, serif;
                font-size: 25px;
        }
        .btn:hover{
        background-color: red;
    }
   

    
    /* .navbar{
        display: inline-block;
    }
    .navbar li{
        display: inline-block;
        font-size: 18px;
    }
    .navbar li a{
        color: white;
        text-decoration: none;
        padding: 34px 23px;
    }
    .navbar li a:hover, .navbar li a.active{
        text-decoration: underline;
        color: white;
    } */
  

</style>
</head>
<body> 
    <header class="header">
        <!--left box for logo-->
        <div class="left">
        <img src="gym.png" alt="" class="src">
        <div style = "position:fixed; left:24px; top:119px;color:white; font-family: 'Baloo Bhai',cursive;">Gym Visuals</div>
        </div>
        <!--mid box for navigation-->
        <!-- <div class="mid">
            <ul class="navbar">
            <li><a href="register.php" class="active"><button class="btn4" id="4">Sign up</button></a></li>
            </ul>
        </div> -->
        <div class="left1">
            <a href="register.php"><button class="btn" id="bt1">Sign up</button></a> 
        </div>
        <!--right box for button-->
        <div class="right">
            <a href="login.php"><button class="btn"  id="bt2">Login</button></a> 
        </div>
    </header>
    <div id="video-background">
          <video autoplay loop muted>
            <source src="video.mp4" type="video/mp4">
    
          </video>
        </div>
        

    