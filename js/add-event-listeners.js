function addEventListeners(parent) {
	$(parent + ' .add-task').click(function(event) {
		var info = getRowInfo(event.target);
		newItemInput(info.row, info.id, info.depth, info.text);
	});

	$(parent + ' .del-task').click(function(event) {
		var info = getRowInfo(event.target);
		deleteItem(info.row, info.id, info.depth);
	});

	$(parent + ' .chg-status').click(function(event) {
		var info = getRowInfo(event.target);
		changeStatus(info.row, info.id, info.text);
	});

	$(parent + ' .hide-show').click(function(event) {
		var info = getRowInfo(event.target);
		hideShow(info.row);
	});
}