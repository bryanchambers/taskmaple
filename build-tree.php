<?php

function buildTree($data) {

	foreach($data as $row) {
		echo "<tr>";
			$depth = $row['depth'] - 1;
			$text  = $row['text'];
			$left  = $row['left'];
			$right = $row['right'];
			
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
			    <button class='btn btn-default dropdown-toggle btn-xs' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Add</button>
			    <ul class='dropdown-menu'>
			      <li><a href='#'>Task after</a></li>
			      <li><a href='#'>Subtask</a></li>
			    </ul>
			</div>";

			echo "</td>";
		echo "</tr>";
	}
}