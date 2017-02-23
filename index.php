<?php 

include 'new-item.php';
include 'delete-item.php';
include 'item-exists.php';
include 'get-data.php';
include 'build-tree.php';

$db = new mysqli('localhost', 'root', 'atlas', 'taskular');

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


$data = getData($db);

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type='text/javascript' src='jquery/jquery.min.js'></script>
	<script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.add-task').click(function(event) {
			var trig = event.currentTarget.id;
			var id = trig.substr(3, trig.length - 3);
			var type = trig.substr(0, 3);
			$('#row' + id).after("<tr><td>1</td><td>2</td><td>3</td><td><form class='form-inline'><input class='form-control' type='text' placeholder='New task'></input></form></td></tr>");
		});
	});
	</script>
</head>
<body>
	<div class='container text-center'>
		<div class='row'><div class='col-md-12'><h1>Taskular<small>&nbsp; Coming soon to a theatre near you</small></h1></div></div>
		
		<div class='row'><div class='col-md-6 col-md-offset-3'>
			<table class='table'>
				<tr>
					<th>ID</th>
					<th>Left</th>
					<th>Right</th>
					<th>Task</th>
				</tr>
				<?php buildTree($data); ?>
			</table>
		</div></div>
		
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