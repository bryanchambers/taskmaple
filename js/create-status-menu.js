function createStatusMenu(status, style) {
	var output = $('#snippets').find('.status').clone();
	output.addClass(style);
	output.find('div').first().text(status);
	return output;
}