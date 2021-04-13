<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="ada";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:". mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$Name=$_POST["Name"];
	$Email=$_POST["Email"];

	$sql_query = "INSERT INTO subscribers (Name,Email) VALUES('$Name','$Email')";

	if (mysqli_query($conn, $sql_query))
	{
		echo "New Details Entry inserted sucessfully";
	}
	else
	{

		echo "Error: " . $sql . "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>