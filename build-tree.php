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
			echo "&nbsp;$text</td>";
		echo "</tr>";
	}
}