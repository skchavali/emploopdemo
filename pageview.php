<html>
<title> Page View </title>
<?php

include 'include.php';
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $url["host"];
$username = "b3c0dca2fea3fb";
$password = "7200888a";
$dbname = substr($url["path"],1);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$title= "Page View";
$sql = "INSERT INTO acme_pageviews (page_title) VALUES ('"  . $title . "')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>