<html>

<?php
include 'include.php';
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $url["host"];
$username = "b3c0dca2fea3fb";
$password = "7200888a";
$dbname = substr($url["path"],1);

echo "page working?";

/ Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select count(*) count, page_title from acme_pageviews group by page_title order by 1 desc";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
   }
} else {
    echo "0 results";
}

echo json_encode($data);  
 

$conn->close();
?>