function hideShow(row) {

	if($('#' + row).find('.hide-show').hasClass('glyphicon-triangle-bottom')) {
		hide(row);
	}
	else {
		show(row);
	}
}