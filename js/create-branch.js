function createRow(row, id, depth, status, style, task) {
	//Create row
	//Sent in as function arguement

	//Add ID
	row.attr('id') = id + '-' + depth;


	//Create indent
	var indent;
	for(var i = 0; i < depth; i++) {
		for(var j = 0; j < 10; j++) { indent += "&nbsp;"; }
	}

	//Add intent
	row.find('indent').text(indent);

	//Add status menu
	row.find('.status').replaceWith(createStatusMenu(status, style));


	//Add task
	row.find('.task').text('&nbsp;' + task);

	//Add add menu
	//No need since it is the same!

	//Add delete menu
	//No need since it is the same!

	//Add event listeners here or afterwards???

	//Return object
	return row;
}