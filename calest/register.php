<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delicious</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"><!--changed-->
    <!--<link rel="stylesheet" href="css/normalize.css">-->
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" href="css/main.css">-->
    <!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
    <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style type="text/css">
          *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
        </style>
  </head>
  <body>
    <!--banner-->
    <section id="banner">
      <!--<div class="bg-color">-->
      <div style="background-image: url('img/res01.jpg');">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <!--<a href="index.html">About</a>-->
                  <button type="button" onclick="location.href='index.html'">Home</button>
                  <button type="button" onclick="location.href='register.php'">Register</button>
                  <!--<a href="register.php">Register</a>-->
                  <!--<a href="login.php">Login</a>-->
                  <button type="button" onclick="location.href='login.php'">Login</button>
                  <!--<a href="#contact">Feature *</a>-->
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
      </div>
      <div>
      <form action="register.php" method="POST">

        <h1>Sign Up</h1>

        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name :</label>
          <input type="text" id="name" name="user_name">

          <label for="mail">Email :</label>
          <input type="email" id="mail" name="user_email">

          <label for="user">Username :</label>
          <input type="text" id="user" name="user_username">

          <label for="password">Password :</label>
          <input type="password" id="password" name="user_password">

          <!--<label>Age:</label>
          <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
          <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>-->
        </fieldset>

        <fieldset>
          <legend><span class="number">2</span>Your Personal Profile</legend>

          <label for="height">Height :</label>
          <input type="text" id="height" name="user_height">
          <label for="weight">Weight :</label>
          <input type="text" id="weight" name="user_weight">
          <label for="age">Age :</label>
          <input type="text" id="age" name="user_age">
          <label for="location">Location :</label>
          <input type="text" id="location" name="user_location">
          <!--<label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <label for="job">Job Role:</label>
        <select id="job" name="user_job">
          <optgroup label="Web">
            <option value="frontend_developer">Front-End Developer</option>
            <option value="php_developor">PHP Developer</option>
            <option value="python_developer">Python Developer</option>
            <option value="rails_developer"> Rails Developer</option>
            <option value="web_designer">Web Designer</option>
            <option value="WordPress_developer">WordPress Developer</option>
          </optgroup>
          <optgroup label="Mobile">
            <option value="Android_developer">Androild Developer</option>
            <option value="iOS_developer">iOS Developer</option>
            <option value="mobile_designer">Mobile Designer</option>
          </optgroup>
          <optgroup label="Business">
            <option value="business_owner">Business Owner</option>
            <option value="freelancer">Freelancer</option>
          </optgroup>
          <optgroup label="Other">
            <option value="secretary">Secretary</option>
            <option value="maintenance">Maintenance</option>
          </optgroup>
        </select>

          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>-->

        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      </div>

      </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
  </body>
  </html>

  <?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
      $name=$_POST['user_name'];
      $email=$_POST['user_email'];
      $username=$_POST['user_username'];
      $password=$_POST['user_password'];
      $height=$_POST['user_height'];
      $weight=$_POST['user_weight'];
      //echo $weight;
      $age=$_POST['user_age'];
      $location=$_POST['user_location'];
      $db=mysqli_connect('localhost','root','','calorie_estimator');
      $sql="INSERT INTO registration_details VALUES('$name','$email','$username','$password','$height','$weight','$age','$location')";
      //echo $sql;
      //echo $sql;
      $res=mysqli_query($db,$sql);
      if($res){
          echo '<marquee>Your Registration Is Successful</marquee>';
      }
  }
  ?>
