<?php
$servername = "localhost";
$username = "root";
$password = "system";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn)
	{
    die("Connection failed: " . mysqli_error());
	}
$database_name = "accountinfo";
$data = mysqli_select_db($conn,$database_name);
if(!$data)
{
	die("can't select account" . mysqli_error());
}

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];

$insertsql ="INSERT INTO SIGNUP (`email`, `password`, `firstname`, `lastname`) VALUES('$email','$pwd','$fname','$lname')";

$result = mysqli_query($conn, $insertsql);

if(!$result)
{
	die("exist");
}
else 
{
	echo "Registered successfully. Please Login.";
}
?>