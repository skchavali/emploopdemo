<html>

<?php
include 'include.php';
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $url["host"];
$username = "b3c0dca2fea3fb";
$password = "7200888a";
$dbname = substr($url["path"],1);

echo "page working?";

$server = mysql_connect($servername, $username, $password);
$connection = mysql_select_db($dbname, $servername);

    $myquery = "select count(*) count, page_title from acme_pageviews group by page_title order by 1 desc"; 
	$query = mysql_query($myquery);
    
    if ( ! $query ) {
        echo mysql_error();
		echo "no connection";
        die;
    }
   

 $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    echo "print array";
    echo json_encode($data);  
 

$conn->close();
?>