function show(row) {
	var rows = findDescendants(row, 'all');
	var rows_ignore = [];
	
	for(var i = 1; i < rows.length; i++) {
		if($(rows[i]).find('.hide-show').hasClass('glyphicon-triangle-right')) {
			//Hidden descendants
			rows_ignore = rows_ignore.concat(findDescendants(rows[i], 'skip1'))
		}
	}

	for(var i = 1; i < rows.length; i++) {
		if(rows_ignore.indexOf(rows[i]) == -1) { $(rows[i]).show(); }
	}

	$(rows[0]).find('.hide-show').removeClass('glyphicon-triangle-right');
	$(rows[0]).find('.hide-show').addClass('glyphicon-triangle-bottom');
}