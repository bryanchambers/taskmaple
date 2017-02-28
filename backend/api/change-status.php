<?php

function changeStatus($db, $id, $status) {
	$query  = "SELECT id, class FROM status WHERE name='$status' LIMIT 1";
	$row    = $db->query($query)->fetch_assoc();
	$status_id = $row['id'];
	echo $row['class'];

	$query  = "UPDATE tasks SET status=$status_id WHERE id=$id";
	$row    = $db->query($query);
}