<?php 
	$result=shell_exec("cd C:/Users/Deepak Acharya/Desktop");
	print($result);
	$result=shell_exec("python kmeansclustering.py");
	print($result);
	//$result_arr=json_decode($result);
	//print_r($result_arr);
?>