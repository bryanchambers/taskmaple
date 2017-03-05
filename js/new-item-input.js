function newItemInput(row, id, depth, type) {
	var row_exists, depth_chk;

	if(type.toLowerCase().includes('subtask')) { 
		depth++;
		type = 'subtask';
	}
	else { 
		type = 'task';
	}

	//Find next sibling location
	do {
		if(row_exists = $('#' + row).next('tr').length > 0) {
			row = $('#' + row).next('tr').attr('id');
			depth_chk = row.split('-')[1];
		}
	} while(depth_chk > depth && row_exists)
	if(row_exists) { row = $('#' + row).prev('tr').attr('id'); }

	//Create and add row for user input
	$('#' + row).after($('#snippets').find('.new-task-snippet').clone());
	$('#' + row).next('.new-task-snippet').wrap("<tr id='new-task-row'><td>");
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