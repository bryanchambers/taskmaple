function createRow(row, id, depth, status, style, task) {
	row.attr('id', id + '-' + depth);
	row.find('.indent').html(createIndent(depth));
	row.find('.status').replaceWith(createStatusMenu(status, style));
	row.find('.task').html('&nbsp;' + task);
	return row;
}