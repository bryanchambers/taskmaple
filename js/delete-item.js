function deleteItem(row, id, depth_parent) {
	var del = [];
	var depth;

	//Get list of rows to delete
	do {
		del.push('#' + row);
		row   = $('#' + row).next().attr('id');
		depth = row.split('-')[1];
	} while(depth > depth_parent)

	//Delete from client
	for(var i = 0; i < del.length; i++) {
		$(del[i]).remove();
	}

	//Delete from the database
	$.get('./api.php?type=del&id=' + id, function(data) {});
}