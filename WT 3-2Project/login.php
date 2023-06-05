<html>
<head>
<style>
    
/* .login{
  background-color: rgba(0,0,0,.5);
    color: #fff;
  border-radius: 6px;
  box-shadow: 5px 10px 20px 10px rgba(156, 104, 104, 0.2);
  margin: auto;
  width: 410px;
  height:280px;

  }
 body {
  background-image: url('aboutus.jpg');
  background-size: cover;
  background-position: center;
  background-repeat:no repeat;
  }
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

form {
  margin-left: 20px;
}

input {
  border-color: rgb(184, 184, 244);
  background-color: antiquewhite;
  text-size-adjust: auto;
  padding-bottom: 8px;
  width: 200px;
  height: 40px;
  text-align: center;
  padding-top: 5px;
  color: midnightblue;
}

h2 {
  text-align: center;
  color: white;
  font-size: xx-large;
}

label {
  display: block;
  font-size: 30px;
  color: rgb(12, 1, 20);
  margin-left: 10px;
}

h5,
a {
  display: block;
  font-size: 20px;
  color: rgb(12,1,20);
  margin-left: 10px;
}

table,
td {
  padding: 20px;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
  height: 30px;
}
table {
  border: 2px solid rgb(225, 225, 247);
  border-radius: 8px;
  padding: 5px;
  background-color:white;
}

.sub {
  margin-left: 160px;
  color: darkblue;
  font-size: x-large;
  background-color:bisque;
  width: 100px;
}

.sub:focus,
.sub:visited,
.sub:hover {
  background-color:darkgoldenrod;
}

.in:hover,
.in:focus,
.in:visited {
  background-color: plum;
} */

.login-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 170vh;
  background-color:orange;
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

.login-form input[type="email"],
.login-form input[type="password"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border: none;
  border-radius: 4px;
  background-color: #f5f5f5;
  box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
  color: #333333;
}

.login-form input[type="email"]:focus,
.login-form input[type="password"]:focus {
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

.success-stories {
  margin-top: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.story {
  width: 300px;
  margin: 10px;
  padding: 20px;
  border-radius: 8px;
  background-color: #ffffff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease;
  color:white;
  box-shadow: 
    0 0 10px black,
    0 0 10px #00ff00,
    0 0 10px #0000ff;
}
.story:hover {
  transform: translateY(-5px);
}

.story h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333333;
}

.story p {
  font-size: 16px;
  line-height: 1.5;
  color: #555555;
}

@media (max-width: 768px) {
  .login-form {
    padding: 20px;
  }
  
  .login-form h2 {
    font-size: 24px;
    margin-bottom: 15px;
  }
  
  .login-form input[type="text"],
  .login-form input[type="password"] {
    margin-bottom: 15px;
  }
  
  .success-stories .story h2 {
    font-size: 20px;
    margin-bottom: 8px;
  }
  
  .success-stories .story p {
    font-size: 14px;
  }
}
#first{
        color: black;       
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
}
#second{
  color: black;       
  font-size:35px;
        text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}

#third{
  color: white;       
  font-size:35px;
        text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}


</style>
</head>
    <body>
    
        <!-- <div class="container">
         
          <form action="verify.php" method="post">
            <h2>Login</h2>
            <table>

              <tr>
                <td><label>Email Address:</label></td>
                <td><input class="in" type="text" name="em" placeholder="Enter your email" required></td>
              </tr>
              <tr>
                <td><label>Password:</label></td>
                <td><input class="in" type="password" name="pwd" placeholder="Enter your password" required></td>
              </tr>
              <tr>
                <td><input class="sub" type="submit" name="submit" value="Login"></td>
              </tr>
            </table>
        <center>
        <a href="mailcheck.php">Forgot Password</a>
        <a href="index.php">Not a User,Register here</a></center>
          </form>
        </div> -->

  <div class="login-container">
  <div class="login-form">
    <center><h1 id="first">Hello,User!Welcome to<br> Gym Visuals</h1></center>

    <form action="verify.php" method="post">
      <!-- <input type="text" placeholder="Username" required> -->
      <input class="in" type="email" name="em" placeholder="Enter your email" required>
      <!-- <input type="password" placeholder="Password" required> -->
      <input class="in" type="password" name="pwd" placeholder="Enter your password" required>
      <!-- <button type="submit">Log In</button> -->
      <input class="sub" type="submit" name="submit" value="Login">
      <br><br>
      <a href="mailcheck.php">Forgot Password</a><br><br>
        <a href="register.php">Not a User,Register here</a>
    </form>
  </div>
<u><h1 id="second">"Unlock Your Strength:</h1><h1 id="third"> Empowering Journeys </h1><h1 id="second">of Transformation at Gym Visuals."</h1></u>
  <div class="success-stories">
    <div class="story">
      <h2>Sarah, a busy professional</h2>
      <p>She struggled to find time for regular exercise. She discovered our gym website, which offered flexible workout exercises with detailed description and provided Gifs as references. With our guidance, Sarah developed a consistent exercise routine that fit her schedule. Over time, she witnessed a significant improvement in her fitness and stamina. Sarah's success story serves as an inspiration to others facing similar challenges.</p>
    </div>

    <div class="story">
      <h2>Raju's Biceps success story</h2>
      <p>Raju had always been self-conscious about his arms and wanted to build strong, defined biceps. He found our gymsite and committed himself to a targeted biceps training program. With consistent effort , Raju has seen incredible results. His biceps have grown significantly, and he now proudly showcases his sculpted arms. Raju's increased confidence and strength have positively impacted other areas of his fitness journey as well.</p>
    </div>
    <div class="story">
      <h2>Priya's Well-being through Stretching</h2>
      <p>Priya, a 14-year-old student, wanted to find a way to relieve stress and improve her overall well-being. She found our gym website stretching exercise program for children and discovered the numerous benefits it offered. Through gentle stretching routines and relaxation techniques, Priya has experienced reduced tension and increased mental clarity. She now feels more relaxed, focused, and better equipped to handle the demands of school and extracurricular activities.</p>
    </div>
    <div class="story">
      <h2>Noah's Injury Prevention Success</h2>
      <p>Noah, a 15-year-old soccer player, found our gym website stretching exercise program to prevent injuries and enhance his athletic performance. Through regular participation in our stretching routines, Noah has noticed a significant decrease in muscle tightness and a greater range of motion. As a result, he has experienced fewer injuries and improved his overall performance on the field. Noah's commitment to stretching exercises has allowed him to stay active, healthy, and excel in his sport.</p>
</div>
<br>
<marquee>Feeling Excited!! Right? Lets workout And add yours in these successful stories.</marquee>
<!-- <div class="success-stories">
  <div class="story">
    <h2>Kumar's Upper Body Transformation</h2>
    <p>Kumar, a fitness enthusiast, found our gym website with the goal of building a strong and toned upper body. Through our targeted upper body strength training program, Kumar has achieved remarkable results. His upper body strength has significantly improved. Kumar can now perform advanced exercises such as pull-ups and push-ups with ease. He feels empowered and confident, knowing that his hard work has paid off.</p>
  </div> -->

  </div>
</div>
</body>
</html>
