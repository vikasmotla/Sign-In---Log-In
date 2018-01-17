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

$email = $_POST['email1'];
$pwd = $_POST['pwd1'];

$sql = "SELECT * FROM SIGNUP WHERE EMAIL = '$email'" ;

$result = mysqli_query($conn, $sql) or die("ERROR". mysqli_error());

$i=0;
while($row = mysqli_fetch_array($result))
{
	if($row['password']==$pwd)
	{
	echo 'Hi.. '.$row['firstname']." ".$row['lastname'];
	}
	else
	{
	 die("mismatch"); 
	}
	$i++;
}
if($i==0)
{
	die("notexist");
}
?>