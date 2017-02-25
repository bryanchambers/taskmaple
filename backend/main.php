<?php

include 'db-connect.php'; //Done refactoring phase 1
include 'get-tree-data.php'; //Done

include 'build-tree.php';
include 'create-branch.php';
include 'create-status-menu.php';

include 'new-item.php';
include 'delete-item.php';
include 'item-exists.php';

$db = dbConnect();
$data = getTreeData($db);