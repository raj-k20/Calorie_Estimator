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
			<li><a href="graph.php">Analysis</a></li>
		    <li class="current"><a href="suggest.php">Food Suggestion</a></li>
            <li><a href="logout.php">Logout</a></li>
		
          </ul>
        </nav>
      </header>
      		
    </div>	
	

  </div>-->
  <!-- javascript at the bottom for fast page loading -->



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
  </body>
</html>
<?php
session_start();
$a = $_SESSION["userid"];
 $db=mysqli_connect('localhost','root','','calorie_estimator');
  $da =date('d/m/Y',strtotime("-1 days"));
 # echo $da;
  #echo $a;
 $sql="select calorie as b from perday where date='$da' and username='$a' ";
 $res=mysqli_query($db,$sql);
 		$data=mysqli_fetch_assoc($res);
		#echo $data['b'];
		$s="select bmr as c from registration_details where username='$a'";
		$re=mysqli_query($db,$s);
			$dat=mysqli_fetch_assoc($re);
		#echo $dat['c'];
		$d=$dat['c']-$data['b'];
		#echo $d;
		$d=$d+$dat['c'];
		$f="SELECT name,calorie FROM food ORDER BY RAND() LIMIT 5";
		$ret=mysqli_query($db,$f);
		?>
		<table width="360"  align="center" border="0" background:color="red" style="border:#999 1px solid; text-align:center ">
  <tr>
  <th style="background-color:#CCC">
Today Food Suggestion
  </th>
  </tr>
  <?php
      $v=0;
		while($res = mysqli_fetch_array($ret))
		{
        $v=$v+$res['calorie'];
		if($v<$d)
		{
		
        echo "<tr style='align=:right'>
          <td>{$res['name']}</td>";
		}
		}
		?>
  
			
	



		
