function createStatusMenu(status, style) {
		var menu = "<div class='btn " + style + " btn-group btn-xs' role='group'>";
		    menu += "<div class='dropdown-toggle' data-toggle='dropdown'>";
		    	menu += status;
		    menu += "</div>";
		    menu += "<ul class='dropdown-menu'>";
		      menu += "<li><a>New</a></li>";
		      menu += "<li><a>Pending</a></li>";
		      menu += "<li><a>In Process</a></li>";
		      menu += "<li><a>Problem</a></li>";
		      menu += "<li><a>Complete</a></li>";
		      menu += "<li><a>Archive</a></li>";
		    menu += "</ul>";
		menu += "</div>";
	return menu;
}