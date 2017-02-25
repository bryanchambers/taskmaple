<?php 

include 'backend/new-item.php';
include 'backend/delete-item.php';
include 'backend/item-exists.php';
include 'backend/get-item-data.php';
include 'backend/get-new-item-data.php';

$db = new mysqli('localhost', 'root', 'atlas', 'taskular');
if($db->connect_errno) { echo "Fail"; }

if(isset($_GET['id'])) {
	$id   = $_GET['id'];
	$data = getItemData($db, $id);
}

if($_GET['type'] == 'tsk') {
	newItem($db, $data['rgt'], $_GET['task']);
	echo getNewItemData($db);
}
elseif($_GET['type'] == 'sub') {
	newItem($db, $data['lft'], $_GET['task']);
	echo getNewItemData($db);
}
elseif($_GET['type'] == 'del') {
	deleteItem($db, $data['lft'], $data['rgt']);
}