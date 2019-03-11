jQuery.noConflict();
var $ = jQuery;

(function($) {
	$("form").attr({"action": Url+Ctl+"/submit", "method": "post"});
	showDatagroup();
	reload();
	autoCheckparent();
	autocheckheadmenu();
}(jQuery));


function showDatagroup() {
	$("#group").change(function() {
		if (this.value == '') {
			$('.manageMenu').hide();
			$('input[name="menuID[]"]').removeAttr('checked');
		} else {
			$.ajax({
				type: "POST",
				url: Url+Ctl+'/getDataSelect',
				data: {idSelect: this.value },
				dataType: 'json',
				success: function(rs){
					$('input[type="checkbox"]').removeAttr('checked');

					$.each(rs,function(key, row )
					{
						$('#menu'+row.menu_id).prop('checked','true');
						$('#menu'+row.menu_id).change(function(){
							if($(this).prop('checked') == false ){
								$.ajax({
									type: "POST",
									url: Url+Ctl+'/accessRights',
									data: {idSelect: $('#menu'+row.menu_id).prop('value'),status:'OFF',group: $('#group').val()},
									dataType: 'text',
									success:function(dataRlt){
										// console.log(dataRlt);

									},
									erro:function(){
										console.log("error");
									}
								});
							}else{
								$.ajax({
									type: "POST",
									url: Url+Ctl+'/accessRights',
									data: {idSelect: $('#menu'+row.menu_id).prop('value'),status:'ON',group: $('#group').val()},
									dataType: 'text',
									success:function(dataRlt){
										// console.log(dataRlt);
										// $.each(dataRlt, function(i,k){
										// });
									},
									erro:function(){
										console.log("error");
									}
								});
							}
						});

					});
				},
				error: function(err) {
					console.log(err );
					// alert("#เกิดข้อผิดพลาด"+err+$(this).val());
				}
			});
		}
	});
}

function autoCheckparent() {
	$('.menuhead').click(function(){
		var data = $(this).val();
		if($(this).is(":checked")){
			$('.parent'+data).prop('checked','true')
		}else{
			$('.parent'+data).attr('checked', false)
		}
	});
}

function autocheckheadmenu() {
	$('input[name="menuID[]"]').click(function(){
		var data = $(this).data('menuhead');
		if($(this).is(":checked")){
			if( data != null){
				$('#menu'+data).prop('checked', true);
			}
		}
	});
}

function reload() {
	$('.reset').click(function(){
		location.reload();
	});
}
