<?php

include 'db/db-connect.php';
include 'main/get-status-list.php';
include 'main/get-tree-data.php';

include 'main/build-task-tree.php';
include 'main/create-snippet-status.php';
include 'main/create-snippet-action.php';

$db          = dbConnect();
$status_list = getStatusList($db);
$data        = getTreeData($db);