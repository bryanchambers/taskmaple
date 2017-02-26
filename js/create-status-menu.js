function createStatusMenu(status, style) {
		var menu = "<div class='btn " + style + " btn-group btn-xs' role='group'>";
		    menu += "<div class='dropdown-toggle' data-toggle='dropdown'>";
		    	menu += status;
		    menu += "</div>";
		    menu += "<ul class='dropdown-menu'>";
		      menu += "<li class='chg-status'><a>New</a></li>";
		      menu += "<li class='chg-status'><a>Pending</a></li>";
		      menu += "<li class='chg-status'><a>In Process</a></li>";
		      menu += "<li class='chg-status'><a>Problem</a></li>";
		      menu += "<li class='chg-status'><a>Complete</a></li>";
		      menu += "<li class='chg-status'><a>Archive</a></li>";
		    menu += "</ul>";
		menu += "</div>";
	return menu;
}