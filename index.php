<!-- Taskular by Bryan Chambers, Copyright 2017 -->

<?php include 'backend/main.php'; ?>

<html>
<head>
	<title>Taskular</title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- JS frameworks -->
	<script type='text/javascript' src='jquery/jquery.min.js'></script>
	<script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>
	
	<!-- App specific JS -->
	<script type='text/javascript' src='js/main.js'></script>
	<script type='text/javascript' src='js/parse-row-info.js'></script>
	<script type='text/javascript' src='js/new-item-input.js'></script>
	<script type='text/javascript' src='js/create-branch.js'></script>
	<script type='text/javascript' src='js/delete-item.js'></script>
	<script type='text/javascript' src='js/create-status-menu.js'></script>
</head>

<body>
	<div class='container text-center'>
		<div class='row'><div class='col-md-12'><h1>Taskular</h1></div></div>
		<div class='row spacer'><div class='col-md-12'></div></div>

		<!-- Build task tree -->
		<div class='row'><div class='col-md-6 col-md-offset-3'>
			<table class='table'><?php buildTree($data); ?></table>
		</div></div>

		<div class='row spacer'><div class='col-md-12'></div></div>
		<div class='row spacer'><div class='col-md-12'></div></div>
	</div>
</body>
</html>