jQuery.noConflict();
var $ = jQuery;
(function($) {
	DataTable();
	showpopupwait();
	showpopupsuccess();
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
		[0, 'desc']
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

function showpopupwait() {
	$('.wait').popover({
		html: true,
		trigger: 'click',
		content: function() {
			var html = '<img src="' + Url + 'assets/files_payment/' + $(this).data('img') + '" />';
			html += '<div class="form-check form-check-inline">';
			html += ' <input class="form-check-input form-lg confcheck" type="checkbox" name="confcheck" id="confcheck' + $(this).data("id") + '" value="' + $(this).data("id") + '">';
			html += ' <label class="form-check-label" for="confcheck' + $(this).data("id") + '"><h5> ตรวจสอบแล้ว </h5></label>';
			html += '</div>';
			return html;
		}
	}).on('click', function() {
		$('.confcheck').on('click', function() {
			if ($(this).is(":checked")) {
				$.ajax({
					type: "POST",
					url: Url + Ctl + '/updateStatusPayment',
					data: {
						confcheck: $(this).val(),
						confstatus: "SUCCESS",
					},
					dataType: 'json',
					success: function(rs) {
						var date = new Date();
						var num = rs.replace(/\"/g,'');
						$('#wait'+num).popover('hide');
						$("#trrow"+num).find("td").eq(7).html("<i class='text-success'>ตรวจสอบแล้ว</i><br>"+date.getDate()+"/"+(date.getMonth()+1)+"/"+date.getFullYear());

					},
					error: function(err) {
						messageAlert(" มีบางอย่างผิดพลาด !!");
					}
				});
			}
		});
	});
}

function showpopupsuccess(argument) {
	$('.success').popover({
		html: true,
		trigger: 'click',
		content: function() {
			var html = '<img src="' + Url + 'assets/files_payment/' + $(this).data('img') + '" />';
			html += '<div class="form-check form-check-inline">';
			html += ' <input class="form-check-input form-lg confcheck" type="checkbox" name="confcheck" id="confcheck' + $(this).data("id") + '" value="' + $(this).data("id") + '">';
			html += ' <label class="form-check-label" for="confcheck' + $(this).data("id") + '"><h5> คืนค่า </h5></label>';
			html += '</div>';
			return html;
		}
	}).on('click', function() {
		$('.confcheck').on('click', function() {
			if ($(this).is(":checked")) {
				$.ajax({
					type: "POST",
					url: Url + Ctl + '/updateStatusPayment',
					data: {
						confcheck: $(this).val(),
						confstatus: "WAIT",
					},
					dataType: 'json',
					success: function(rs) {
						var date = new Date();
						var num = rs.replace(/\"/g,'');
						$('#success'+num).popover('hide');
						$("#trrow"+num).find("td").eq(7).html("<i class='text-warning'>รอตรวจสอบ</i><br>"+date.getDate()+"/"+(date.getMonth()+1)+"/"+date.getFullYear());

					},
					error: function(err) {
						messageAlert(" มีบางอย่างผิดพลาด !!");
					}
				});
			}
		});
	});
}
