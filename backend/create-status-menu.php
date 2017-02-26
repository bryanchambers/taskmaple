<?php

function createStatusMenu($id, $status, $style) {
	$menu = "<div class='btn $style btn-group btn-xs' role='group'>
			 	<div class='dropdown-toggle' data-toggle='dropdown'>$status</div>
				<ul class='dropdown-menu'>
					<li class='chg-status'><a>New</a></li>
					<li class='chg-status'><a>Pending</a></li>
					<li class='chg-status'><a>In Process</a></li>
					<li class='chg-status'><a>Problem</a></li>
					<li class='chg-status'><a>Complete</a></li>
					<li class='chg-status'><a>Archive</a></li>
				</ul>
			 </div>";
	return $menu;
}