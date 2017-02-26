function newItemInput(info) {
	var placeholders = "";

	var depth = info.depth;
	if(info.type == 'sub') { depth++; }
	depth *= 10;
	var indent = '&nbsp;'.repeat(depth);
	
	var status = "<span class='glyphicon glyphicon-chevron-right'></span>&nbsp;";
	var form = "<input id='new-task-input' class='input' type='text' autofocus>&nbsp;<small id='char-count'>100</small>";
	var item = '<td>' + indent + status + form + '</td>';
	var content = item;



	var row_chk_info = parseRowInfo($('#row' + info.id + '-' + info.depth).next().attr('id'));
	var depth_chk = row_chk_info.depth;
	var id_chk = row_chk_info.id;
	var row_chk = '#row' + id_chk + '-' + depth_chk;



	while(depth_chk > info.depth) {
		//Go to next row
		var row_chk_info = parseRowInfo($(row_chk).next().attr('id'));
		var depth_chk = row_chk_info.depth;
		var id_chk = row_chk_info.id;
		var row_chk = '#row' + id_chk + '-' + depth_chk;
	}



	$(row_chk).before('<tr>' + content + '</tr>');

	var type = info.type;
	var id = info.id;
	$('#new-task-input').keyup(function(event) {
		if(event.keyCode == 13) { 
			var task = $('#new-task-input').val();
			$.get('./api.php?type=' + type + '&id=' + id + '&task=' + task, function(data) {
				$('#new-task-input').parent().parent().remove();
				var data = JSON.parse(data);
				$(row_chk).before(createBranch(data.id, data.lft, data.rgt, depth, data.status, data.style, data.task));

				var row = '#row' + data.id + '-' + depth/10;
				$(row + ' .add-task').click(function(event) {
					newItemInput(parseRowInfo(event.currentTarget.id));
				});


				$(row + ' .del-task').click(function(event) {
					deleteItem(parseRowInfo(event.currentTarget.id));
				});


				$(row + ' .chg-status').click(function(event) {
					var status = $(this).text();
					var row    = $(this).closest('tr').attr('id');
					var id     = parseRowInfo(row).id;
					changeStatus(row, id, status);
				});
			});
		}
		else {
			var len = $('#new-task-input').val().length;
			$('#char-count').text(100 - len);
			if(len > 100) {
				$('#char-count').css('color', 'red');
			}
			else {
				$('#char-count').css('color', 'gray');
			}
		}
	});
}