jQuery.noConflict();
var $ = jQuery;

(function($) {
  // $("form").attr({"action": Url+Ctl+"/submit", "method": "post"});
  DataTable();
  showpopupAdmin();
  showpopupUser();
}(jQuery));

function DataTable() {

	var table = $('#tableData').DataTable({
		lengthMenu: [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
		],
		"sPaginationType": "full_numbers",
		pagingType: 'full',
		"order": [
		[7, 'asc']
		],
		"autoFill": false,
		"ordering": true,
		"searching": true,
		"info": false,
    // "serverSide": true,
    "processing": true,
    "paging": true,
    "responsive": true,
    "language": {
    	"zeroRecords": "============== ไม่พบข้อมูลที่ค้นหา ==============",
    	"emptyTable": "============== ไม่มีข้อมูลในตาราง ==============",
    	"sSearch": "ค้นหา: ",
    	"sLengthMenu": "แสดง _MENU_ รายการ",
    },
    "columns": [{
    	"width": "1%",
    }, {
    	"width": "20%"
    }, {
    	"width": "25%"
    }, {
    	"width": "10%",
    }, {
    	"width": "20%",
    }, {
    	"width": "20%"
    },  {
    	"width": "20%"
    },  {
    	"width": "10%"
    }, ],
    buttons: [{
    	extend: 'copy',
    	text: '<i class="fa fa-files-o "></i> copy ',
    	titleAttr: 'copy',
    	className: 'border btn btn-sm'
    }, {
    	extend: 'excel',
    	text: '<i class="fa fa-file-excel-o"></i> excel',
    	titleAttr: 'excel',
    	className: 'border btn btn-sm'
    }, {
    	extend: 'csv',
    	text: '<i class="fa fa-file-text-o"></i> csv',
    	titleAttr: 'csv',
    	className: 'border btn btn-sm'
    }, {
    	extend: 'print',
    	text: '<i class="fa fa-print"></i> print',
    	title: function() {
    		return "สถานะ ชำระค่าลงทะเบียน";
    	},
    	titleAttr: 'print',
    	className: 'border btn btn-sm',
    	Layout: 'landscape',
    	customize: function(win) {
    		$(win.document.body).css('font-size', '10pt')
    		$(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
    		$(win.document.body).find('th').addClass('display').css('text-align', 'center');
    		$(win.document.body).find('h1').css('text-align', 'center');
    	}
    }, ]
});

	table.buttons().container().appendTo('#button-tolls');
}

function showpopupUser() {
	$('.user').popover({
		html: true,
		trigger: 'click',
		content: function() {
			var Userchecked = ($(this).data('group') == 2)?'checked disabled':'';
			var Adminchecked = ($(this).data('group') == 1)?'checked disabled':''; ``

			var html = '<div class="form-check form-check-inline">';
			html += '<input class="form-check-input adminCheck" type="radio" name="role'+$(this).data('id')+'" id="adminCheck'+$(this).data('id')+'" data-popover="'+$(this).data('id')+'" value="1" '+Adminchecked+'>';
			html += '<label class="form-check-label" for="adminCheck'+$(this).data('id')+'">ADMIN</label>';
			html += '</div>';

			html += '<div class="form-check form-check-inline">';
			html += '<input class="form-check-input userCheck" type="radio" name="role'+$(this).data('id')+'" id="userCheck'+$(this).data('id')+'" data-popover="'+$(this).data('id')+'" value="2" '+Userchecked+'>';
			html += '<label class="form-check-label" for="userCheck'+$(this).data('id')+'">USER</label>';
			html += '</div>';
			return html;
		}
	}).on('click', function() {
		$('input[name="role'+$(this).data('id')+'"]').click(function(){
			// var num = $(this).data('popover');
			$.ajax({
				type: "POST",
				url: Url + Ctl + '/updateRole',
				data: {
					idRole: $(this).data('popover'),
					valRole: $(this).val(),
				},
				dataType: 'json',
				success: function(rs) {
					$('#user'+rs).popover('hide');
					location.reload();
					// $("#trrow"+rs).find("td").eq(7).html('<i class="text-success admin" id="admin'+rs+'" data-id="'+rs+'" data-group="1" data-container="body" data-toggle="popover" data-placement="left" title="" data-content="" >ADMIN</i>');
				},
				error: function(err) {
					messageAlert(" มีบางอย่างผิดพลาด !!");
				}
			});

		});

	});
}

function showpopupAdmin() {
	$('.admin').popover({
		html: true,
		trigger: 'click',
		content: function() {
			var Userchecked = ($(this).data('group') == 2)?'checked disabled':'';
			var Adminchecked = ($(this).data('group') == 1)?'checked disabled':''; ``

			var html = '<div class="form-check form-check-inline">';
			html += '<input class="form-check-input adminCheck" type="radio" name="role'+$(this).data('id')+'" id="adminCheck'+$(this).data('id')+'" data-popover="'+$(this).data('id')+'" value="1" '+Adminchecked+'>';
			html += '<label class="form-check-label" for="adminCheck'+$(this).data('id')+'">ADMIN</label>';
			html += '</div>';

			html += '<div class="form-check form-check-inline">';
			html += '<input class="form-check-input userCheck" type="radio" name="role'+$(this).data('id')+'" id="userCheck'+$(this).data('id')+'" data-popover="'+$(this).data('id')+'" value="2" '+Userchecked+'>';
			html += '<label class="form-check-label" for="userCheck'+$(this).data('id')+'">USER</label>';
			html += '</div>';
			return html;
		}
	}).on('click', function() {
		$('input[name="role'+$(this).data('id')+'"]').click(function(){
			// var num = $(this).data('popover');
			$.ajax({
				type: "POST",
				url: Url + Ctl + '/updateRole',
				data: {
					idRole: $(this).data('popover'),
					valRole: $(this).val(),
				},
				dataType: 'json',
				success: function(rs) {
					$('#admin'+rs).popover('hide');
					location.reload();
					// $("#trrow"+rs).find("td").eq(7).html('<i class="text-warning user" id="user'+rs+'" data-id="'+rs+'" data-group="2" data-container="body" data-toggle="popover" data-placement="left" title="" data-content="" >USER</i>');
				},
				error: function(err) {
					messageAlert(" มีบางอย่างผิดพลาด !!");
				}
			});

		});
	});
}
