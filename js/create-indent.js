function createIndent(depth) {
	var indent = '';
	for(var i = 0; i < depth; i++) {
		for(var j = 0; j < 12; j++) { indent += "&nbsp;"; }
	}
	return indent;
}