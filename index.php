<?php 

include 'new-item.php';
include 'delete-item.php';
include 'item-exists.php';

$db = new mysqli('localhost', 'root', 'atlas', 'tree');

if($db->connect_errno) { echo "Fail"; }
else { echo "Yay!"; }	






if(isset($_POST['new'])) {
	$item = $_POST['text'];
	$position = $_POST['position'];

	if(itemExists($db, 0, $position)) {
		newItem($db, $position, $item);
	}
}



if(isset($_POST['delete'])) {
	$left = $_POST['left'];
	$right = $_POST['right'];
	deleteItem($db, $left, $right);
}








$query = "SELECT COUNT(parent.id) AS 'depth', node.text AS 'text', node.tree_left AS 'left', node.tree_right AS 'right' 
			FROM tree AS node, tree AS parent 
			WHERE (node.tree_left BETWEEN parent.tree_left AND parent.tree_right) 
			GROUP BY node.id 
			ORDER BY node.tree_left";



$result = $db->query($query);


echo "<table>";

while($row = $result->fetch_assoc()) {
	echo "<tr>";
		//foreach($row as $index=>$value) { echo "<td>$value</td>"; }
		$indent = $row['depth'] - 1;
		$text = $row['text'];
		$left = $row['left'];
		$right = $row['right'];

		echo "<td>";
		for($i = 0; $i < $indent; $i++) {
			for($j = 0; $j < 10; $j++) { echo "&nbsp;"; }
		}
		echo ">&nbsp;";
		echo "$text</td>";


		echo "<td>$left</td>";
		echo "<td>$right</td>";
	echo "</tr>";
}

echo "</table>";

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class='container text-left'>
		<div class='row'><div class='col-md-4 col-md-offset-4'>
			<form method='post'>
				<div class='row form-group'>
					<div class='col-md-5'><input class='form-control' name='position' type='number' placeholder='tree value'></div>
					<div class='col-md-5'><input class='form-control' name='text' type='text' placeholder='text'></div>
					<div class='col-md-2'><input class='btn btn-default' type='submit' name='new' value='Add Item'></div>
				</div>

				<div class='row form-group'>
					<div class='col-md-5'><input class='form-control' name='left' type='number' placeholder='tree left'></div>
					<div class='col-md-5'><input class='form-control' name='right' type='text' placeholder='tree right'></div>
					<div class='col-md-2'><input class='btn btn-default' type='submit' name='delete' value='Delete Item'></div>
				</div>
			</form>
		</div></div>
	</div>
</body>
</html>