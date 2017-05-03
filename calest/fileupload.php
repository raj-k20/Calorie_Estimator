<?php 
error_reporting(0);
session_start();
if($_SESSION['status']=='LOGIN'){

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
            <li class="current"><a href="fileupload.php">Image Upload</a></li>
			<li><a href="graph.php">Analysis</a></li>
				<li ><a href="suggest.php">Food Suggestion</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
      		
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
        <h1>Examples</h1>
        <p>This page contains examples of all the styled elements available as part of this design. Use this page for reference, whilst you build your website.</p>
        <h2>Headings</h2>
        <p>These are the different heading formats:</p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <h2>Text</h2>
        <p>The following examples show how the text (within '&lt;p&gt;&lt;/p&gt;' tags) will appear:</p>
        <p><strong>This is an example of bold text</strong></p>
        <p><i>This is an example of italic text</i></p>
        <p><a href="#">This is a hyperlink</a></p>
        <h2>Lists</h2>
        <p>This is an unordered list:</p>
        <ul>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ul>
        <p>This is an ordered list:</p>
        <ol>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ol>
        <h2>Images</h2>
        <p>images can be placed on the left, in the center or on the right:</p>
        <span class="left"><img src="images/graphic.jpg" alt="example graphic" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum.
        </p>
        <span class="center"><img src="images/graphic.jpg" alt="example graphic" /></span>
        <span class="right"><img src="images/graphic.jpg" alt="example graphic" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p>
        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style="width:100%; border-spacing:0;">
          <tr><th>Item</th><th>Description</th></tr>
          <tr><td>Item 1</td><td>Description of Item 1</td></tr>
          <tr><td>Item 2</td><td>Description of Item 2</td></tr>
          <tr><td>Item 3</td><td>Description of Item 3</td></tr>
          <tr><td>Item 4</td><td>Description of Item 4</td></tr>
        </table>
        <h2>Form Elements</h2>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Form field example</span><input type="text" name="name" value="" /></p>
            <p><span>Textarea example</span><textarea rows="8" cols="50" name="name"></textarea></p>
            <p><span>Checkbox example</span><input class="checkbox" type="checkbox" name="name" value="" /></p>
            <p><span>Dropdown list example</span><select id="id" name="name"><option value="1">Example 1</option><option value="2">Example 2</option></select></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="button" /></p>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <p><a href="index.html">home</a> | <a href="examples.html">examples</a> | <a href="page.html">a page</a> | <a href="another_page.html">another page</a> | <a href="contact.php">contact</a></p>
      <p>&copy; 2014 CSS3_split2. All Rights Reserved. | <a href="http://fotogrph.com">Images</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>-->
  <!-- javascript at the bottom for fast page loading -->
  <form action="fileupload.php" method="POST" enctype="multipart/form-data">
    <table style="margin-left:15%;margin-top:10%;width:70%;">
      <tr style="font-style:italic;font-size:29px;color:green;">
        <td>Enter Your File To Upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="file" name="filebro"></input></td>
      </tr>
      <tr valign="right">
        <th colspan="2"><input type="submit" value="Upload Image"></input></th>
      </tr>
    </table>
  </form>
</body>
</html>

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
error_reporting(0);
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
  $userid=$_SESSION['userid'];
  $db=mysqli_connect('localhost','root','','calorie_estimator');
  $path_info = pathinfo($_FILES['filebro']['name']);
  $ext=$path_info['extension'];
  $upload=$_FILES['filebro']['name'];
  $folder='IMAGES/'.$_SESSION['userid'];
  //echo $folder;
  //echo $folder;
  //echo 'Session Variable'.$_SESSION['userid'].'ends';
  if(!file_exists($folder)){
	//echo 'Creating New Folder';
    mkdir($folder);
  }else{
	//echo 'Not Creating New Folder';
  }
$myfile = fopen("a.txt", "w") or die("Unable to open file!");
fwrite($myfile,$userid);
fclose($myfile);
  $fe = $folder;
  $filename=$folder.'/'.$upload;
  //echo $filename;
  //echo $_FILES['filebro']['tmp_name'];
  //echo $filename;
  //echo $filename;
  if(copy($_FILES['filebro']['tmp_name'],$filename)){
	//echo "Successful";
  }else{
	//echo "Failed";
  }
  $result=shell_exec("python tester.py --testing $folder 2>&1");
  //print($result);
  $res=split(",",$result);
  echo '<center style="font-size:23px;font-style:italic;color:red;">'.$res[1].$res[0].'</center>';
  //$result=1522.32;
  //$s=split(' ',$result);
  //print("Array");
  //$q=$s[0];
  //$a=split("[0x", $q);
  //print_r($s);
  //print("Updated");
  //print_r($a);
  $date = date('d/m/Y', time());
  $result1=$res[0];
  $cl=$res[1];
  $sql00="INSERT INTO dailytable VALUES('$date','$cl','$userid')";
  mysqli_query($db,$sql00);
  
  
  $sql99="INSERT INTO calorie_content_history VALUES('$userid','$date','$result1','$upload')";
  mysqli_query($db,$sql99);
  $sql95="select calorie as n from perday where date='$date' and username='$userid'";
  $v=mysqli_query($db,$sql95);
  $da=mysqli_fetch_assoc($v);
  if(!empty($da))
  {
	  $s=$da['n'];
	  $r=$result+$s;
	  $z="update perday set calorie='$r' where date='$date' and username='$userid'";
	  mysqli_query($db,$z);
  }
  else{
	  $g="insert into perday values('$userid','$date','$result1')";
	    mysqli_query($db,$g);
	  
  }
  $jk="SELECT dcl FROM dailytable WHERE userid='$userid' AND ddate='$date'";
  $res01=mysqli_query($db,$jk);
  echo '<table style="margin-left:80%;">';
  echo '<tr><th colspan=2 align=center>UPLOADED IMAGES ON '.$date.'</th></tr>';
  while($data=mysqli_fetch_assoc($res01)){
	  echo '<tr>';
		echo '<th colspan=2>'.$data['dcl'].'</th>';
	  echo '</tr>';
  }
  echo '</table>';
}
}else{
  header("Location: template3/web/errpage.php");
}
?>
