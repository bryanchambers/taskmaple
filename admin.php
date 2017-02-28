<?php

include 'backend/db/create-table-tasks.php';
include 'backend/db/create-table-status.php';

$db = new mysqli('localhost', 'root', 'root', 'taskular');

if($db->connect_errno) { echo "Fail"; }
else { echo "Yay!"; }	


if(isset($_POST['table'])) {
	if($_POST['table'] = 'Tasks') {
		createTableTasks($db);
	}
	if($_POST['table'] = 'Status') {
		createTableStatus($db);
	}
}

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class='container text-center'>
		<div class='row'><div class='col-md-12'>
			<h1>Taskular Admin</h1>
		</div></div>

		<div class='row'>
			<form method='post'>
				<div class='col-md-3 col-md-offset-4'>
					<select class='form-control' name='table'>
						<option>Tasks</option>
						<option>Status</option>
					</select>
				</div>

				<div class='col-md-1'>
					<input class='btn btn-default' type='submit' name='submit' value='Create Table'>
				</div>
			</form>
		</div>
	</div>
</body>
</html>