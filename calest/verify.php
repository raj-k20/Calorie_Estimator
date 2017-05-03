<?php
	error_reporting(0);
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$db=mysqli_connect('localhost','root','','calorie_estimator');
	$sql="SELECT count(*) as c FROM registration_details WHERE username='$username' AND password='$password'";
	//echo $sql; 
	$res=mysqli_query($db,$sql);
	$data=mysqli_fetch_assoc($res);
	if($data['c']==1){
		$_SESSION['userid']=$username;
		$_SESSION['status']='LOGIN';
	}
	echo $_SESSION['userid'];
	if($data['c']==1){
		header("Location: afterlogin.php");
	}else{
		header("Location: 2.html");
	}
?>