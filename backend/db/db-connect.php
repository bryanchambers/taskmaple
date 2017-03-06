<?php

function dbConnect() {
	$db = json_decode(file_get_contents('db.json', FILE_USE_INCULDE_PATH));
	$db_conn = new mysqli($db->host, $db->user, $db->password, $db->database);

	if($db_conn->connect_errno) {
		echo "<span style='font-family: monospace; font-size: 16px'>";
		echo "<span>Uh oh! Unable to connect to database.</span><br>";
		echo "<span style='color: gray'>$db->connect_error</span></span>";
		die();
	}	
	else { return $db_conn; }
}