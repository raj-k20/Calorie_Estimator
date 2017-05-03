
	<form action="uploadfile.php" method="POST" enctype="multipart/form-data">
		<table style="margin-left:1%;margin-top:10%;">
		<tr>
			<th colspan="13" style="font-family:Courier New;color:gold;font-style:italic;">After 5 Seconds Of File Upload You will be Redirected to Your Home Page</th>
		</tr>
			<tr style="font-style:italic;font-size:29px;color:green;">
				<td>Enter Your File To Upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="file" name="filebro"></input></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit"></input></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
error_reporting(0);
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$db=mysqli_connect('localhost','root','','studenttool');
	$local=getHostByName(getHostName());
	$sql="SELECT * FROM ipcheck where ip='$local' ORDER BY sl desc";
	$res=mysqli_query($db,$sql);
	$data=mysqli_fetch_assoc($res);
	$name=$data['name'];
	$sql99="SELECT * FROM teacher_detail WHERE name='$name'";
	$res99=mysqli_query($db,$sql99);
	$data99=mysqli_fetch_assoc($res99);
	$path_info = pathinfo($_FILES['filebro']['name']);
	$ext=$path_info['extension'];
	$upload=$_FILES['filebro']['name'];
	$s1="UPDATE teacher_detail SET filename='$upload' WHERE name='$name'";
	mysqli_query($db,$s1);
	$folder='UPLOAD/'.$name;
	if(!file_exists($folder)){
		mkdir($folder);
	}
	$filename=$folder.'/'.$upload;
	echo $filename;
	echo $filename;
	copy($_FILES['filebro']['tmp_name'],$filename);
}
?>