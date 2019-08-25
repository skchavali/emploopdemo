<html>
<title> Insert Success </title>
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

$stmt = $conn->prepare("select count(*), page_title from acme_pageviews order by 1 desc");
$stmt->execute();


while ($stmt->fetch()) {
	$stmt->bind_result($count, $title);
    echo "Page: " . $title . " has " . $count . " views";
	echo "<br>";
}

$stmt->close();
?>