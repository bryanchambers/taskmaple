<?php

function createTableStatus($db) {
	$query = "CREATE TABLE status(id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50), class VARCHAR(50))";
	$result = $db->query($query);
}