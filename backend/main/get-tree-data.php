<?php 

function getTreeData($db) {
	
	$query_data = "SELECT 
					   node.id AS 'id', 
					   COUNT(parent.id) AS 'depth', 
					   node.lft AS 'left', 
					   node.rgt AS 'right',
					   node.status AS 'status', 
					   node.task AS 'task'
				   FROM tasks AS node, tasks AS parent 
				   WHERE (node.lft BETWEEN parent.lft AND parent.rgt) 
				   GROUP BY node.id 
				   ORDER BY node.lft ASC";

	$query_status = "SELECT id AS 'status_id', name AS 'status_name', class AS 'status_class' FROM status";

	$query = "SELECT * FROM ($query_data) AS data 
			  JOIN ($query_status) AS status ON data.status = status.status_id 
			  ORDER BY data.left ASC";

	$result = $db->query($query);
	while($row = $result->fetch_assoc()) {
		$data[] = $row;
	}

	return $data;
}