<?php

function getStatusList($db) {
	$query = "SELECT name FROM status";

	$result = $db->query($query);
	while($row = $result->fetch_assoc()) {
		$status = $row['name'];
		echo "<li class='chg-status'><a>$status</a></li>";
	}
}