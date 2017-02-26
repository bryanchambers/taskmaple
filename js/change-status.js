function changeStatus(row, id, status) {
	$.get('./api.php?type=status&id=' + id + '&status=' + status, function(data) {
		//Change in client
		var style = data;
		$('#' + row).find('div').first().replaceWith(createStatusMenu(status, style));
		$('#' + row + ' .chg-status').click(function(event) {
			var status = $(this).text();
			var row    = $(this).closest('tr').attr('id');
			var id     = parseRowInfo(row).id;
			changeStatus(row, id, status);
		});
	});
}