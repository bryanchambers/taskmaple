function newItemInput(info) {
	var placeholders = "<td></td><td></td><td></td>";
	
	var depth = info.depth * 10;
	if(info.type == 'sub') { depth += 10; }
	var indent = '&nbsp;'.repeat(depth);
	
	var status = "<button class='btn btn-danger btn-xs'>New</button>&nbsp;";
	var form = "<input id='new-task-input' class='input' type='text' autofocus>";
	var item = '<td>' + indent + status + form + '</td>';
	var content = placeholders + item;

	$('#row' + info.id).after('<tr>' + content + '</tr>');
}