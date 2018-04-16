<?php

include 'conn.php';
$username=$_POST["usname"];
$password=$_POST["pasw"];
$sql="select * from user where username='$username' and password='$password'";
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc())
{
	header('Location: http://www.example.com/');
	echo "connected";
}
?>