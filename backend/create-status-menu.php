<?php

function createStatusMenu($status, $style) {
	$menu = "<div class='btn $style btn-group btn-xs' role='group'>
			 	<div class='dropdown-toggle' data-toggle='dropdown'>$status</div>
				<ul class='dropdown-menu'>
					<li><a>New</a></li>
					<li><a>Pending</a></li>
					<li><a>In Process</a></li>
					<li><a>Problem</a></li>
					<li><a>Complete</a></li>
					<li><a>Archive</a></li>
				</ul>
			 </div>";
	return $menu;
}