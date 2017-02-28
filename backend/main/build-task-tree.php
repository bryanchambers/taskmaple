<?php

function buildTaskTree($data, $status_list) {
	foreach($data as $row) {	

		$id    = $row['id'];
		$depth = $row['depth'];
		$task  = $row['task'];
		$status = $row['status_name'];
		$style = $row['status_class'];

		echo "<tr id='$id-$depth'>";
			
			echo "<td>";
			for($i = 0; $i < $depth; $i++) {
				for($j = 0; $j < 10; $j++) { echo "&nbsp;"; }
			}
			createSnippetStatus($status, $style, $status_list);
			echo "&nbsp; $task</td>";
			
			echo "<td>";
			createSnippetAction('plus', 'add-task', array('Add task after', 'Add subtask'));
			echo "</td>";

			echo "<td>";
			createSnippetAction('trash', 'del-task', array('Delete forever'));
			echo "</td>";
			
		echo "</tr>";
	}
}