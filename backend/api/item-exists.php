<?php 

function itemExists($db, $left, $right) {
	if($left != 0 AND $right != 0) {
		//Deleting item
		$query = "SELECT COUNT(*) AS 'count' FROM tasks WHERE rgt = $left AND lft = $right";
	}
	else {
		//New item
		$position = $left + $right;
		$query = "SELECT COUNT(*) AS 'count' FROM tasks WHERE rgt = $position OR lft = $position";
	}		

	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$count = $row['count'];
	
	if($count > 0) { return true; }
	else { return false; }
}