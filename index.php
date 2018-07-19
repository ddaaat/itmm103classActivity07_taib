<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "itmm103db";

// Create connection
$conn = new mysqli($host, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	$query = "SELECT * FROM user_table";
	$result = $conn->query($query);

	echo "<table>"; 

	while($row = $result->fetch_assoc())
	{   
	echo "<tr><td> " . $row['username'] . " </td><td> " . $row['firstname'] . " </td><td> " . $row['lastname'] . " </td><td> " . $row['address'] . " </td></tr> ";  
	}

	echo "</table>";
}

?>