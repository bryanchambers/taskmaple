function deleteItem(info) {
	var depth = info.depth;
	var row   = '#row' + info.id + '-' + depth;
	var row_chk_info = parseRowInfo($(row).next().attr('id'));
	var depth_chk = row_chk_info.depth;
	var id_chk = row_chk_info.id;
	var row_chk = '#row' + id_chk + '-' + depth_chk;
	var del = ['#row' + info.id + '-' + depth];

	while(depth_chk > depth) {
		//Add to to list for deletion
		del.push('#row' + id_chk + '-' + depth_chk);

		//Go to next row
		var row_chk_info = parseRowInfo($(row_chk).next().attr('id'));
		var depth_chk = row_chk_info.depth;
		var id_chk = row_chk_info.id;
		var row_chk = '#row' + id_chk + '-' + depth_chk;
	}


	//Delete from client
	for(var i = 0; i < del.length; i++) {
		var row = del[i];
		$(row).remove();
	}



	//Delete from the database
	$.get('./api.php?type=' + info.type + '&id=' + info.id, function(data) {
	});
}