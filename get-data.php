<?php 

function getData($db) {
	$query = "SELECT node.id AS 'id', COUNT(parent.id) AS 'depth', node.lft AS 'left', node.rgt AS 'right', node.task AS 'text' 
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