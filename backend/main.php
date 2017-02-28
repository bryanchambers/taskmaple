<?php

include 'db-connect.php';
include 'get-status-list.php';
include 'get-tree-data.php';

include 'build-task-tree.php';
include 'create-snippet-status.php';
include 'create-snippet-action.php';

include 'new-item.php';
include 'delete-item.php';
include 'item-exists.php';

$db          = dbConnect();
$status_list = getStatusList($db);
$data        = getTreeData($db);