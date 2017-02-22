<?php 

function getData($db) {
	$query = "SELECT COUNT(parent.id) AS 'depth', node.task AS 'text', node.lft AS 'left', node.rgt AS 'right' 
			FROM tasks AS node, tasks AS parent 
			WHERE (node.lft BETWEEN parent.lft AND parent.rgt) 
			GROUP BY node.id 
			ORDER BY node.lft";

	$result = $db->query($query);

	while($row = $result->fetch_assoc()) {
		$data[] = $row;
	}

	return $data;
}