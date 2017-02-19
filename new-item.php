<?php

function newItem($db, $position, $item) {
	$left  = $position + 1;
	$right = $position + 2;

	//Update tree left values
	$query  = "UPDATE tree SET tree_left = tree_left + 2 WHERE tree_left > $position;";
	$result = $db->query($query);

	//Update tree right values
	$query = "UPDATE tree SET tree_right = tree_right + 2 WHERE tree_right > $position;";
	$result = $db->query($query);

	//Insert new item
	$query = "INSERT INTO tree(tree_left, tree_right, text) VALUES($left, $right, '$item')";
	$result = $db->query($query);
}