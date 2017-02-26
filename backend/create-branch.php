<?php

function createBranch($id, $left, $right, $depth, $text, $status, $class) {
	$branch = "<tr id='row$id-$depth'>";
		$branch .= "<td>";
		for($i = 0; $i < $depth; $i++) {
			for($j = 0; $j < 10; $j++) { $branch .= "&nbsp;"; }
		}
		$branch .= createStatusMenu($id, $status, $class);
		$branch .= "&nbsp;$text";
		$branch .= "</td>";

		
		$branch .= "<td class='options'>
			<div class='btn-group' role='group'>
			    <div class='dropdown-toggle' data-toggle='dropdown'>
			    	<span class='glyphicon glyphicon-plus'></span>
			    </div>
			    <ul class='dropdown-menu'>
			      <li id='tsk$id-$depth' class='add-task'><a>Task after</a></li>
			      <li id='sub$id-$depth' class='add-task'><a>Subtask</a></li>
			    </ul>
			</div>
		</td>";


		$branch .= "<td class='options'>
			<div class='btn-group' role='group'>
			    <div class='dropdown-toggle' data-toggle='dropdown'>
			    	<span class='glyphicon glyphicon-trash'></span>
			    </div>
			    <ul class='dropdown-menu'>
			      <li id='arc$id-$depth' class='del-task'><a>Archive</a></li>
			      <li id='del$id-$depth' class='del-task'><a>Delete forever</a></li>
			    </ul>
			</div>
		</td>";

	$branch .= "</tr>";
	return $branch;
}