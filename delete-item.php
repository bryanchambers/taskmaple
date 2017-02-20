<?php

function deleteItem($db, $left, $right) {
	$width = $right - $left + 1;

	//Delete item
	$query = "DELETE FROM tree WHERE tree_left BETWEEN $left AND $right";
	$result = $db->query($query);

	//Update tree left values
	$query  = "UPDATE tree SET tree_left = tree_left - $width WHERE tree_left > $right";
	$result = $db->query($query);

	//Update tree right values
	$query = "UPDATE tree SET tree_right = tree_right - $width WHERE tree_right > $right";
	$result = $db->query($query);
}