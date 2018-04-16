
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "swl";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pasw=$_POST['psw'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into user(fname,lname,username,email,password) values('$fname','$lname','$uname','$email','$pasw')";

if (mysqli_query($conn, $sql)) {
    echo "done successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
