function deleteItem(row, id, depth_parent) {
	var del = [];
	var row_exists, depth;

	//Get list of rows to delete
	do {
		del.push('#' + row);
		if(row_exists = $('#' + row).next('tr').length > 0) {
			row   = $('#' + row).next().attr('id');
			depth = row.split('-')[1];
		}
	} while(depth > depth_parent && row_exists)

	//Delete from client
	for(var i = 0; i < del.length; i++) {
		$(del[i]).remove();
	}

	//Delete from the database
	$.get('./api.php?type=del&id=' + id, function(data) {});
}