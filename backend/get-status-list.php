<?php

function getStatusList($db) {
	$query = "SELECT name FROM status";
	$result = $db->query($query);
	
	while($row = $result->fetch_assoc()) {
		$list[] = $row['name'];
	}
	return $list;
}