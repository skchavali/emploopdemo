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

$sql = "select count(*) count, page_title from acme_pageviews order by 1 desc";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Page:  " . $row["page_title"]. " has " . $row["page_title"]. " views " . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>