function createBranch(row, id, depth) {
	row.before('<tr>', {id: id + '-' + depth});
}