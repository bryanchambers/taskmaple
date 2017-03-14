function hide(row) {
	var rows = findDescendants(row, 'all');
	
	for(var i = 1; i < rows.length; i++) {
		$(rows[i]).hide();
	}

	$(rows[0]).find('.hide-show').removeClass('glyphicon-triangle-bottom');
	$(rows[0]).find('.hide-show').addClass('glyphicon-triangle-right');
}