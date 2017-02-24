function parseRowInfo(info) {
	var info  = info.split('-');
	var type  = info[0].substr(0, 3);
	var id    = info[0].substr(3, info[0].length - 3);
	var depth = info[1];
	return {
		type : type,
		id   : id,
		depth: depth
	};
}