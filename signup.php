
<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con,'swl');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pasw=$_POST['psw'];

$q="select * from user where username='$uname' && password='$pasw'";
$result= mysqli_query($con,$q);
 
$num = mysqli_num_rows($result);

if($num==1){
	echo "duplicate data";
}else{

	$qy= "insert into user(fname,lname,username,email,password) values('$fname','$lname','$uname','$email','$pasw')";
	mysqli_query($con,$qy);
}

?>