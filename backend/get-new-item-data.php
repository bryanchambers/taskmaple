<?php

function getNewItemData($db) {
	$query  = "SELECT LAST_INSERT_ID() AS 'id'";
	$result = $db->query($query);
	$new    = $result->fetch_assoc();
	$id     = $new['id'];
	return json_encode(getItemData($db, $id));
}