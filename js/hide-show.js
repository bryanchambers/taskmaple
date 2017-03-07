function hideShow(row) {
	var rows = findDescendants(row, 'all');
	
	for(var i = 1; i < rows.length; i++) {
		$(rows[i]).toggle();
	}

	$('#' + row).find('.hide-show').toggleClass('glyphicon-triangle-right');
	$('#' + row).find('.hide-show').toggleClass('glyphicon-triangle-bottom');
}