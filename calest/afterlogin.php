<?php 
error_reporting(0);
session_start();
if($_SESSION['status']=='LOGIN'){
		$userid=$_SESSION['userid'];
		$db=mysqli_connect('localhost','root','','calorie_estimator');
		$sql="SELECT * FROM registration_details WHERE username='$userid'";
		$res=mysqli_query($db,$sql);
		$data=mysqli_fetch_assoc($res);
		//BMR = 66 + (13.8 x weight in kg.) + (5 x height in cm) - (6.8 x age in years)
		?>
		<!DOCTYPE HTML>
		<html>

		<head>
		  <title>Calorie estimator</title>
		  <meta name="description" content="website description" />
		  <meta name="keywords" content="website keywords, website keywords" />
		  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		  <link rel="stylesheet" type="text/css" href="css1/style.css" />
		  <!-- modernizr enables HTML5 elements and feature detects -->
		  <script type="text/javascript" src="js1/modernizr-1.5.min.js"></script>
		</head>

		<body>
		  
		  <div id="main">
		    <div id="top_container">
			  <header>
		        <div id="logo"><h2>CALORIE</h2><h2>ESTIMATOR</h2></div>
		        <nav>
		          <ul class="lavaLampWithImage" id="lava_menu">
		            <li class="current"><a href="afterlogin.html">Profile</a></li>
		            <li><a href="fileupload.php">Image Upload</a></li>
					<li><a href="graph.php">Analysis</a></li>
							<li><a href="suggest.php">suggest</a></li>
		            <li><a href="logout.php">Logout</a></li>
		            <!--<li><a href="page.html">a page</a></li>
		            <li><a href="another_page.html">another page</a></li>
		            <li><a href="contact.php">contact</a></li>-->
		          </ul>
		        </nav>
		      </header>
		      <div class="slideshow">
		        <ul class="slideshow">
		          <li class="show"><img width="950" height="350" src="images1/1.jpg" alt="&quot;You can put a caption for your image right here&quot;" /></li>
		          <li><img width="950" height="350" src="images1/2.jpg" alt="&quot;You can put a description of the image here if you like, or anything else if you want.&quot;" /></li>
		          <li><img width="950" height="350" src="images1/3.jpg" alt="&quot;You can put a description of the image here if you like, or anything else if you want.&quot;" /></li>
		        </ul>
			  </div>		
		    </div>	  


		    <div align="center">
		<table class="table">
		  <thead>
		      <tr>
		      	<th style="width:700px;text-align: center;" colspan="2">User Profiles</th>
		      </tr>
			</thead>
		    <tbody>
		    	<tr>
		    		<td>Name</td><td style="width: 300px;"><?php echo $data['name']; ?></td>
		    	</tr>
		    	<tr>
		    		<td>Email-ID</td><td style="width: 300px;"><?php echo $data['email']; ?></td>
		    	</tr>
		    	<tr>
		    		<td>Height</td><td style="width: 300px;"><?php echo $data['height']; ?></td>
		    	</tr>
		    	<tr>
		    		<td>Weight</td><td style="width: 300px;"><?php echo $data['weight']; ?></td>
		    	</tr>
		    	<tr>
		    		<td>Age</td><td style="width: 300px;"><?php echo $data['age']; ?></td>
		    	</tr>
		    	<tr>
		    		<td>Location</td><td style="width: 300px;"><?php echo $data['location']; ?></td>
		    	</tr>
		    	<?php //BMR = 66 + (13.8 x weight in kg.) + (5 x height in cm) - (6.8 x age in years) ?>
		    	<tr>
		    		<td>BMR Ratio</td><td style="width: 300px;"><?php 
		    		$bmr=66+13.8*$data['weight']+5*$data['height']-6.8*$data['age'];
		    		echo $bmr.' cal/day';
                     $d="update registration_details set bmr='$bmr' where username='$userid'";
                     mysqli_query($db,$d);
					 ?>
					 </td>
					  
		    	</tr>
		    	<?php 
		    	$date = date('d/m/Y', time());
  				$sql99="SELECT sum(calorie) as s FROM calorie_content_history WHERE date='$date' AND username='$userid'";
  				$res=mysqli_query($db,$sql99);
  				$data=mysqli_fetch_assoc($res);
  				$calorie=$data['s'];
				$excess=$calorie-$bmr;
				$comment="";
				if($excess>0){
					$speed=4.8; // km/h 3 mph
					$speed1=7.2;
					$hour=($excess*24)/($bmr*3.5);
					$min1=intval($hour);
					$min2=intval(($hour-$min1)*60);
					if($min1 >0){
						$c1=$min1.' hour '.$min2.' minutes';
					}else{
						$c1=$min2.' minutes';
					}
					//$min=int($hour-int($hour)*60);
					//$hour=$hour.'hours '.$min.' minutes';
					$hour1=($excess*24)/($bmr*7.0);
					$min1=intval($hour1);
					$min2=intval(($hour1-$min1)*60);
					if($min1 >0){
						$c2=$min1.' hour '.$min2.' minutes';
					}else{
						$c2=$min2.' minutes';
					}
					//$min1=int($hour1-int($hour1)*60);
					//$hour1=$hour1.'hours '.$min1.' minutes';
					$comment="You Have Consumed ".$excess." extra Calories. In order to burn it you have to walk <span style='font-style:bold;color:green;font-size:20px;'>".$c1."</span> at 3 mph(4.8 km/h) or run <span style='color:green;font-size:20px;'>".$c2."</span> at 5 mph(7.2 kmh)";
				}
		    	?>
		    	<tr>
		    		<td>Daily Calories Consumed (Dated <?php echo $date; ?></td><td style="width: 300px;"><?php echo $calorie; ?></td>
		    	</tr>
				<tr>
					<td>Comments Regarding Calorie Burning</td><td><?php echo $comment; ?></td>
				</tr>
		    </tbody>
		</table>
		</div>

		    <!--<div id="site_content">
		      <div id="sidebar_container">
		        <div class="sidebar">
		          <h3>Latest News</h3>
		          <h4>New Website Launched</h4>
		          <h5>January 1st, 2014</h5>
		          <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
		        </div>
		        <div class="sidebar">
		          <h3>Useful Links</h3>
		          <ul>
		            <li><a href="#">First Link</a></li>
		            <li><a href="#">Another Link</a></li>
		            <li><a href="#">And Another</a></li>
		            <li><a href="#">Last One</a></li>
		          </ul>
		        </div>
		      </div>
		      <div id="content">
		        <h1>Welcome to CSS3_split2</h1>
		        <p>This standards compliant, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from css3templates.co.uk' link in the footer of the template.</p>
		        <p>The template uses a lavalamp menu (based on jQuery) from <a href="http://www.gmarwaha.com/blog/2007/08/23/lavalamp-for-jquery-lovers/">here</a>. All of the images were shot by me - use as you wish.</p>
		        <h2>Browser Compatibility</h2>
		        <p>This template has been tested in the following browsers:</p>
		        <ul>
		          <li>Internet Explorer 9</li>
		          <li>FireFox 24</li>
		          <li>Google Chrome 31</li>
		        </ul>
		      </div>
		    </div>
		    <footer>
		      <p><a href="index.html">home</a> | <a href="examples.html">examples</a> | <a href="page.html">a page</a> | <a href="another_page.html">another page</a> | <a href="contact.php">contact</a></p>
		      <p>&copy; 2014 CSS3_split2. All Rights Reserved. | <a href="http://fotogrph.com">Images</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
		    </footer>
		  </div>-->
		  <!-- javascript at the bottom for fast page loading -->
		  <script type="text/javascript" src="js1/jquery.min.js"></script>
		  <script type="text/javascript" src="js1/jquery.easing.min.js"></script>
		  <script type="text/javascript" src="js1/jquery.lavalamp.min.js"></script>
		  <script type="text/javascript" src="js1/image_fade.js"></script>
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
}else{
	header("Location: template3/web/errpage.php");
}
?>