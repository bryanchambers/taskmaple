<?php

function dbConnect() {
	$db = new mysqli('localhost', 'root', 'atlas', 'taskular');

	if($db->connect_errno) {
		echo "<span style='font-family: monospace; font-size: 16px'>";
		echo "<span>Uh oh! Unable to connect to database.</span><br>";
		echo "<span style='color: gray'>$db->connect_error</span></span>";
		die();
	}	
	else { return $db; }
}