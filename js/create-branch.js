function createBranch(id, left, right, depth, status, style, text) {
	depth = depth/10;
	var branch = "<tr id='row" + id + "-" + depth + "'>";

		branch += "<td>";
		for(var i = 0; i < depth*10; i++) { branch += "&nbsp;"; }
		branch += createStatusMenu(status, style);
		branch += "&nbsp;" + text;
		branch += "</td>";

		branch += "<td class='options'>";
			branch += "<div class='btn-group' role='group'>";
			    branch += "<div class='dropdown-toggle' data-toggle='dropdown'>";
			    	branch += "<span class='glyphicon glyphicon-plus'></span>";
			    branch += "</div>";
			    branch += "<ul class='dropdown-menu'>";
			      branch += "<li id='tsk" + id + "-" + depth + "' class='add-task'><a>Task after</a></li>";
			      branch += "<li id='sub" + id + "-" + depth + "' class='add-task'><a>Subtask</a></li>";
			    branch += "</ul>";
			branch += "</div>";
		branch += "</td>";

		branch += "<td class='options'>";
			branch += "<div class='btn-group' role='group'>";
			    branch += "<div class='dropdown-toggle' data-toggle='dropdown'>";
			    	branch += "<span class='glyphicon glyphicon-trash'></span>";
			    branch += "</div>";
			    branch += "<ul class='dropdown-menu'>";
			      branch += "<li id='arc" + id + "-" + depth + "' class='del-task'><a>Archive</a></li>";
			      branch += "<li id='del" + id + "-" + depth + "' class='del-task'><a>Delete forever</a></li>";
			    branch += "</ul>";
			branch += "</div>";
		branch += "</td>";

	branch += "</tr>";
	return branch;
}