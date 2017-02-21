<?php

function deleteItem($db, $left, $right) {
	$width = $right - $left + 1;

	//Delete item
	$query = "DELETE FROM tasks WHERE lft BETWEEN $left AND $right";
	$result = $db->query($query);

	//Update tree left values
	$query  = "UPDATE tasks SET lft = lft - $width WHERE lft > $right";
	$result = $db->query($query);

	//Update tree right values
	$query = "UPDATE tasks SET rgt = rgt - $width WHERE rgt > $right";
	$result = $db->query($query);
}