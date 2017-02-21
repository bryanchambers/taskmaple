<?php

function createTableTasks($db) {
	$query = "CREATE TABLE tasks(id INT PRIMARY KEY AUTO_INCREMENT, parent INT, lft INT, rgt INT, task VARCHAR(200))";
	$result = $db->query($query);
}