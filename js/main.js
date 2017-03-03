$(document).ready(function() {
	$('.add-task').click(function(event) {
		var row   = $(this).closest('tr').attr('id');
		var info  = row.split('-');
		var id    = info[0];
		var depth = info[1];
		newItemInput(row, id, depth);
	});

	$('.del-task').click(function(event) {
		var row   = $(this).closest('tr').attr('id');
		var info  = row.split('-');
		var id    = info[0];
		var depth = info[1];
		deleteItem(row, id, depth);
	});

	$('.chg-status').click(function(event) {
		var status = $(this).text();
		var row    = $(this).closest('tr').attr('id');
		var id     = row.split('-')[0];
		changeStatus(row, id, status);
	});
});
