function deleteItem(row, id) {
	$.get('./api.php?type=del&id=' + id, function(data) {
		var del = findDescendants(row, 'all');
		
		for(var i = 0; i < del.length; i++) {
			$(del[i]).remove();
		}
	});
}