"use strict";
var KTDatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#kt_table_1');
		// begin first table
		table.DataTable({
			responsive: true,
			// Order settings
			order: [[1, 'desc']],
		});
	};
	return {
		//main function to initiate the module
		init: function() {
			initTable1();
		},
	};
}();
jQuery(document).ready(function() {
	KTDatatablesBasicBasic.init();
});