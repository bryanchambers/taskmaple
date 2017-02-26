$(document).ready(function() {
	$('.add-task').click(function(event) {
		var info = parseRowInfo(event.currentTarget.id);
		newItemInput(info);
	});

	$('.del-task').click(function(event) {
		var info = parseRowInfo(event.currentTarget.id);
		deleteItem(info);
	});

	$('.chg-status').click(function(event) {
		var status = $(this).text();
		var row    = $(this).closest('tr').attr('id');
		var id     = parseRowInfo(row).id;
		changeStatus(row, id, status);
	});
});
