<?php

function createSnippetAction($glyph, $class, $menu) {
	$output = "<td class='options'><div class='btn-group' role='group'><div class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-$glyph'></span></div><ul class='dropdown-menu'>";
			      
	foreach($menu as $item) {
		$output .= "<li class='$class'><a>$item</a></li>";
	}
	$output .= "</ul></div></td>";

	echo $output;
}