<?php 
error_reporting(0);
session_start();
$userid=$_SESSION['userid'];
$db=mysqli_connect('localhost','root','','calorie_estimator');
$sql="SELECT * FROM registration_details WHERE username='$userid'";
$res=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($res);
?>
<head>
	<link rel="stylesheet" href="css1/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
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
    </tbody>
</table>
</div>
</body>
