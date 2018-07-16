<?php
// start session
session_start();

// initialize count variable in session and set it to 0..
if (!isset($_SESSION["count"])) {
	$_SESSION["count"] = 0;
}

// display the current count
echo json_encode([
	"currentDate" => date("Y-m-d"),
	"ipAddress" => get_client_ip()
]);

echo "<br /><br /><br />";

echo "Current Count: {$_SESSION["count"]}";

// increment count to show it on next reload
$_SESSION["count"]++;

function get_client_ip()
{
    $ipaddress = '';
    
	if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    
	return $ipaddress;
}
?>
