<?php

function newItem($db, $position, $item) {
	$left  = $position + 1;
	$right = $position + 2;

	//Update tree left values
	$query  = "UPDATE tasks SET lft = lft + 2 WHERE lft > $position";
	$result = $db->query($query);

	//Update tree right values
	$query = "UPDATE tasks SET rgt = rgt + 2 WHERE rgt > $position";
	$result = $db->query($query);

	//Insert new item
	$query = "INSERT INTO tasks(lft, rgt, task) VALUES($left, $right, '$item')";
	$result = $db->query($query);
}