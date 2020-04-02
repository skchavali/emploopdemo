<html>

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

$server = mysql_connect($servername, $username, $password);
$connection = mysql_select_db($dbname, $servername);

    $myquery = "select count(*) count, page_title from acme_pageviews group by page_title order by 1 desc"; 
	$query = mysql_query($myquery);
    
    if ( ! $query ) {
        echo mysql_error();
        die;
    }
   

 $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    
    echo json_encode($data);  


$conn->close();
?>