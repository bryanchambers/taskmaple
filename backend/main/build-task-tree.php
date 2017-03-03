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
				echo "<span class='indent'>";
				for($i = 0; $i < $depth; $i++) {
					for($j = 0; $j < 10; $j++) { echo "&nbsp;"; }
				}
				echo "</span>";
				createSnippetStatus($status, $style, $status_list);
				echo "<span class='task'>&nbsp; $task</span>";
			echo "</td>";
			
			echo "<td>";
			createSnippetAction('add', 'plus', 'add-task', array('Add task after', 'Add subtask'));
			echo "</td>";

			echo "<td>";
			createSnippetAction('delete', 'trash', 'del-task', array('Delete forever'));
			echo "</td>";
			
		echo "</tr>";
	}
}