<?php

function buildTree($data) {

	foreach($data as $row) {		
		$id    = $row['id'];
		$depth = $row['depth'] - 1;
		$text  = $row['text'];
		$left  = $row['left'];
		$right = $row['right'];
		
		echo "<tr id='row$id'>";
			echo "<td>$id</td>";	
			echo "<td>$left</td>";
			echo "<td>$right</td>";

			echo "<td>";
			for($i = 0; $i < $depth; $i++) {
				for($j = 0; $j < 10; $j++) { echo "&nbsp;"; }
			}
			echo "<button class='btn btn-info btn-xs'>WIP</button>";
			echo "&nbsp;$text&nbsp;";
			
			echo "
			<div class='btn-group' role='group'>
			    <div class='dropdown-toggle' data-toggle='dropdown'>
			    	<span class='glyphicon glyphicon-plus'></span>
			    </div>
			    <ul class='dropdown-menu'>
			      <li id='tsk$id' class='add-task'><a href='#'>Task after</a></li>
			      <li id='sub$id' class='add-task'><a href='#'>Subtask</a></li>
			    </ul>
			</div>";

			echo "</td>";
		echo "</tr>";
	}
}