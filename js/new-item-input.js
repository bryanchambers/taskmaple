function newItemInput(row, id, depth, type) {

	if(type.toLowerCase().includes('subtask')) { 
		depth++;
		type = 'subtask';
	}
	else { 
		type = 'task';
	}

	//Create and add row for user input
	var row_last = findDescendants(row, 'last');
	$(row_last).after($('#snippets').find('.new-task-snippet').clone());
	$(row_last).next('.new-task-snippet').wrap("<tr id='new-task-row'><td>");
	$('#new-task-row').prepend('<td>');
	$('#new-task-row').find('.indent').html(createIndent(depth));
	$('#new-task-row').find('.new-task-text').focus();

	//When user presses enter
	$('#new-task-row').keyup(function(event) {
		if(event.keyCode == 13) {
			var text = $(this).find('.new-task-text').val();
			$.get('api.php?type=' + type + '&id=' + id + '&task=' + text, function(data) {
				var data = JSON.parse(data);
				$('#new-task-row').replaceWith(createRow($('#' + row).clone(), data.id, depth, data.status, data.style, data.task));
				addEventListeners('#' + data.id + '-' + depth);
			});

		}
	});
}