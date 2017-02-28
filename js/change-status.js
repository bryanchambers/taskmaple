function changeStatus(row, id, status) {
	$.get('./api.php?type=stat&id=' + id + '&status=' + status, function(data) {
		//Change in client
		var style = data;
		$('#' + row).find('.status').replaceWith(createStatusMenu(status, style));
		$('#' + row + ' .chg-status').click(function(event) {
			var status = $(this).text();
			var row    = $(this).closest('tr').attr('id');
			var id     = row.split('-')[0];
			changeStatus(row, id, status);
		});
	});
}