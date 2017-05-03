<?php 
error_reporting(0);
session_start();
$a = $_SESSION["userid"];

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Calorie estimator</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <!--<link rel="stylesheet" type="text/css" href="css/main.css" />-->
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  
  <div id="main">
    <div id="top_container">
	  <header>
        <div id="logo"><h2>Calorie</h2><h2>estimator</h2></div>
        <nav>
          <ul class="lavaLampWithImage" id="lava_menu">
            <li ><a href="afterlogin.php">Profile</a></li>
            <li><a href="fileupload.php">Image Upload</a></li>
			<li class="current"><a href="graph.php">Analysis</a></li>
		   <li><a href="suggest.php">Food Suggestion</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
      	
    </div>	
	 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
  
   <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {            
      title:{
        text: "Daily Calorie Analysis"              
      },

      data: [       
      { 
   /*** Change type "column" to "bar", "area", "line" or "pie"***/        
       type: "line",
       name: "First Quarter",
       dataPoints: [
	   <?php 
	   $db=mysqli_connect('localhost','root','','calorie_estimator');
	   $sql="SELECT date as a,calorie as b FROM perday where username='$a'";
	   //echo $sql;
	   $res=mysqli_query($db,$sql);
	   while($data=mysqli_fetch_assoc($res)){
		   echo '{ label :"'.$data['a'].'", y:'.$data['b'].' },';
	   }
	   ?>
	   

       ]
     },
    ]
  });

	chart.render();
  }
   </script>
  <script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
  <div id="chartContainer" style="height: 500px; width: 100%;"></div>

  </body>
