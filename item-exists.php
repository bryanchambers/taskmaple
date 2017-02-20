<?php 

function itemExists($db, $left, $right) {
	if($left != 0 AND $right != 0) {
	//Deleting item
		//Find item by left value
		//Check that right value matches
	}
	else {
	//New item
		$position = $left + $right; //One of them is zero
		$query = "SELECT COUNT(*) AS 'count' FROM tree WHERE tree_right = $position OR tree_left = $position";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$count = $row['count'];
		if($count > 0) { return true; }
		else { return false; }
	}
}