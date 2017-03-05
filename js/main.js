$(document).ready(function() {
	$('.add-task').click(function(event) {
		var info = getRowInfo(event.target);
		newItemInput(info.row, info.id, info.depth, info.text);
	});

	$('.del-task').click(function(event) {
		var info = getRowInfo(event.target);
		deleteItem(info.row, info.id, info.depth);
	});

	$('.chg-status').click(function(event) {
		var info = getRowInfo(event.target);
		changeStatus(info.row, info.id, info.text);
	});
});
