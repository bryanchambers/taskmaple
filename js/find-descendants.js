function findDescendants(row, type) {
	var des = [];
	var row_exists;
	var depth_parent = row.split('-')[1];

	if(row[0] == '#') { row = row.substring(1, row.length) }

	do {
		des.push('#' + row);
		if(row_exists = $('#' + row).next('tr').length > 0) {
			row = $('#' + row).next('tr').attr('id');
			depth = row.split('-')[1];
		}
	} while(depth > depth_parent && row_exists)

	if(type == 'all') {
		return des;
	}
	else if(type == 'skip1') {
		des.shift();
		return des;
	}
	else if(type == 'last') {
		return des[des.length - 1];
	}
}





