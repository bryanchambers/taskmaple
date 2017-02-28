<?php

function getItemData($db, $id) {
	$query  = "SELECT tasks.id AS 'id', tasks.lft AS 'lft', tasks.rgt AS 'rgt', status.name AS 'status', status.class AS 'style', tasks.task AS 'task'
			   FROM tasks JOIN status ON tasks.status = status.id WHERE tasks.id = $id LIMIT 1";
	$result = $db->query($query);
	return $result->fetch_assoc();
}