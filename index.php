<?php 

include 'new-item.php';

$db = new mysqli('localhost', 'root', 'atlas', 'tree');

if($db->connect_errno) { echo "Fail"; }
else { echo "Yay!"; }	






if(isset($_GET['text'])) {
	$item = $_GET['text'];
	$right = $_GET['right'];

	$query = "SELECT COUNT(*) AS 'count' FROM tree WHERE tree_right = $right OR tree_left = $right";

	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$count = $row['count'];

	if($count > 0) {
		newItem($db, $right, $item);
	}
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
</head>
<body>
	<form>
		<input name='right' type='number' placeholder='tree right value'>
		<input name='text' type='text' placeholder='new item'>
		<input type='submit' value='Insert New Item'>
	</form>
</body>
</html>