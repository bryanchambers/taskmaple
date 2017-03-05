function getRowInfo(trigger) {
	var row  = $(trigger).closest('tr').attr('id');
	var info = row.split('-');

	return {
		row:   row,
		id:    info[0],
		depth: info[1],
		text:  $(trigger).text()
	};
}