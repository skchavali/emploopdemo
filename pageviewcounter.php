<html>
<title> Page View Display </title>
<?php

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

$title = "Home";
$sql = "select count(*) from acme_pageview where page_title = "  . $title . ;
$stmt = $conn->prepare($sql);
$stmt->execute();

$stmt->bind_result($count);

while ($stmt->fetch()) {
    echo "Number of Page Views " . $count ;
}


$stmt->close();

?>