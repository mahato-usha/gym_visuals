<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Visuals</title>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" >
<link rel="stylesheet" href="css/style.css">
<style>
    /* CSS Reset */
    body{
        font-family: "Baloo Bhai", cursive;
        color: black;
        margin: 0px;
        padding: 0px;
        background: url("bg.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;
        background-position: center;

    }
    .left{
        display: inline-block;
        position: absolute;
        left: 34px;
        top: 20px;

    }
    .left img{
        width: 85px;
        filter: invert(100%);
    }
    .left.div{
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    }
    .mid{
        display: block;
        width: 40%;
        margin: 20px auto;

    }
    .right{
        position: absolute;
        right: 34px;
        top: 20px;
        display: inline-block;
       
    }
    .navbar{
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
    .btn1{
        font-family: 'Baloo Bhai',cursive;
        /* margin: -1px 9px; */
        color: white;
        background-color: black;
        padding: 4px 13px;
        border: 2px solid gray;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn:hover{
        background-color: rgb(20, 19, 19);
    }
    input[type="text"] {
    padding: 1px 13px;
    padding-top:6px ;
    padding-right:46px ;
    padding-bottom:7px ;
    padding-left:28px ;
  
}
.btn2{
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
    .btn3{
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
    
.textbox{
    /* padding: 1px 2px; */
    padding-top:-58px ;
    padding-right:79px ;
    padding-bottom:-115px ;
    padding-left:560px ;
}
label{
    color:white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 4px 14px;
        border: 2px solid gray;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
    
}
.submit{
    font-family: 'Baloo Bhai',cursive;
        /* margin: -1px 9px; */
        color: white;
        background-color: red;
        padding: 4px 14px;
        border: 2px solid gray;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
}
.submit:hover{
        background-color:skyblue;
        color:black;
    }
    #first{
        font-size: 50px;
        color: white;
        padding-left: 220px;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }
    #second{
        font-size: 50px;
        color: white;
        padding-left: 137px; 
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }
    #third{
        font-size: 50px;
        color: white;
        padding-left:100px;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }
</style>
<script>
    function showAgeTextbox() {
      var ageButton = document.getElementById('ageButton');
      ageButton.style.display = 'none';

      var ageTextbox = document.getElementById('ageTextbox');
      ageTextbox.style.display = 'block';
    }

    function redirectToPage() {
      var ageInput = document.getElementById('ageInput').value;
      if (ageInput && ageInput > 17) {
        window.location.href = 'above17.html?age=' + ageInput;
      }
      else if((ageInput && ageInput <= 17 )&&(ageInput && ageInput > 0)){
        window.location.href = 'under17.html?age=' + ageInput;
      }
      else{
        alert("Make sure you provided appropriate age(Enter in Numbers)! Please check and submit");
        return false;
      }
    }
  </script>
<body>
    <header class="header">
        <!--left box for logo-->
        <div class="left">
        <img src="gym.png" alt="" class="src">
        <div style = "position:fixed; left:24px; top:119px;color:white; font-family: 'Baloo Bhai',cursive;">Gym Visuals</div>
        </div>
        <!--mid box for navigation-->
        <div class="mid">
            <ul class="navbar">
            <li><a href="#" class="active"><button class="btn1" id="ageButton" onclick="showAgeTextbox()">Home</button></a></li>
            
            <li><a href="aboutus.html" class="active"><button class="btn2" id="2">About us</button></a></li>
            <li><a href="calculator.html" class="active"><button class="btn3" id="3" onclick="#">Fitness Calculator</button></a></li>
            <li><a href="location.html" class="active"><button class="btn4" id="4" onclick="#">Location</button></a></li>
            </ul>
        </div>
      
        <!--right box for button-->
        <div class="right">
            <a href="logout.php"><button class="btn" >Logout</button></a> 
        </div>
    </header>
    <br>
    <br>
    <br>
<section>
    <h1 id="first">Don't stop</h1>
    <h1 id="second"> when you are tired,</h1>
    <h1 id="third">stop when you're done.</h1>
</section>
    <div id="ageTextbox" style="display: none;" class="textbox">
   <label for="ageInput">Age</label>
    <input type="text" id="ageInput" placeholder="Enter your age">
    <button onclick="redirectToPage()" class="submit">Submit</button>

  </div> 

  
</body>
</html>