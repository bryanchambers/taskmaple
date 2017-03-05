function createIndent(depth) {
	console.log(depth);
	var indent = '';
	for(var i = 0; i < depth; i++) {
		for(var j = 0; j < 10; j++) { indent += "&nbsp;"; }
	}
	return indent;
}