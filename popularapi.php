<html>

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

$sql = "select page_title, count, left(view_date,10) view_date from acme_pageviews limit 10";
$result = $conn->query($sql);

$data = array();

while($row = $result->fetch_assoc()) {
        $data[]=$row;
   }

 echo json_encode($data);

$conn->close();
?>