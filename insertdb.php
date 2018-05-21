<html>
<title> Insert Success </title>
<?php

include 'include.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO customer (store_id,first_name, last_name,email,address_id,active) VALUES (1,'" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["email"] . "',381,1)";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>