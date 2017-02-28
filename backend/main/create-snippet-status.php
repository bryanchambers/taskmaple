<?php

function createSnippetStatus($status, $style, $menu) {
	$output = "<div class='btn $style btn-group btn-xs status' role='group'><div class='dropdown-toggle' data-toggle='dropdown'>$status</div><ul class='dropdown-menu'>";
	
	foreach($menu as $item) {
		$output .= "<li class='chg-status'><a>$item</a></li>";
	}
	$output .= "</ul></div>";

	echo $output;
}