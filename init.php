<?php
	date_default_timezone_set('Asia/Manila');
	header('Access-Control-Allow-Origin: *');
	$today = date('Y-m-d');
	$con = mysqli_connect("localhost","root","@Ruffycastro09","waterlab");
	if(!$con){
		echo "Unable to connect!";
	}

	$today = date('Y-m-d H:i:s');
?>
