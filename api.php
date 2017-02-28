<?php 

include 'backend/db/db-connect.php';
include 'backend/api/new-item.php';
include 'backend/api/delete-item.php';
include 'backend/api/item-exists.php';
include 'backend/api/get-item-data.php';
include 'backend/api/get-new-item-data.php';
include 'backend/api/change-status.php';

$db = dbConnect();

if(isset($_GET['id'])) {
	$id   = $_GET['id'];
	$data = getItemData($db, $id);
}

if($_GET['type'] == 'add') {
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
elseif($_GET['type'] == 'stat') {
	$status = $_GET['status'];
	changeStatus($db, $id, $status);
}