<?php

function buildTree($data) {

	foreach($data as $row) {		
		$id    = $row['id'];
		$depth = $row['depth'] - 1;
		$text  = $row['task'];
		$left  = $row['left'];
		$right = $row['right'];
		$status = $row['status_name'];
		$class  = $row['status_class'];
		echo createBranch($id, $left, $right, $depth, $text, $status, $class);
	}
}