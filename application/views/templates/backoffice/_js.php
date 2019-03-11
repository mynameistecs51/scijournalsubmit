
<script>
	var Url = "<?php echo base_url(); ?>";
	var Ctl = "<?php echo 'index.php/'.$this->router->class; ?>";
</script>

<script src="<?php echo base_url(); ?>assets_backoffice/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets_backoffice/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets_backoffice/js/main.js"></script>

<script src="<?php echo base_url(); ?>assets_backoffice/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets_backoffice/plugin/DataTable/pdfmake-0.1.32/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets_backoffice/plugin/DataTable/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets_backoffice/plugin/DataTable/Buttons-1.5.1/js/buttons.bootstrap4.min.js"></script>


<script>
	function includeJS(file) {
		var script = document.createElement('script');
		script.src = file;
    // script.type = 'text/javascript';
    // script.defer = true;

    // document.getElementById('includescript').appendChild(script);
    document.getElementsByTagName('body').item(0).appendChild(script);

  }
</script>
<script>

function messageAlert(message) {  //function alert message

	var html = '<div class="modal fade" id="messageAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
	html += '<div class="modal-dialog" role="document">';
	html += '<div class="modal-content modal-sm">';
	html += '<div class="modal-header">';
	html += '<h5 class="modal-title" id="exampleModalLabel">แจ้งเตือน !</h5>';
	html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
	html += ' <span aria-hidden="true">&times;</span>';
	html += '</button>';
	html += '</div>';
	html += '<div class="modal-body">';
	html += '<span class="row mx-auto clearfix"><i class="fa fa-info-circle fa-2x text-info" aria-hidden="true"> </i><h4> &nbsp;&nbsp;'+message +'</h4></span>';
	html += '</div>';
	html += '</div>';
	html += '</div>';
	html += '</div>';
	html += '<div id="space"></div>';
	$('body').append(html).add( $('#messageAlert').modal('show'));
	setTimeout(function() {$('#messageAlert').modal('hide');}, 5000);
}

function messageConfirm(message) {  //function alert message comfirm

	var html = '<div class="modal fade" id="messageConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
	html += '<div class="modal-dialog" role="document">';
	html += '<div class="modal-content modal-md">';
	html += '<div class="modal-header">';
	html += '<h5 class="modal-title" id="modalTitle">แจ้งเตือน !</h5>';
	html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
	html += ' <span aria-hidden="true">&times;</span>';
	html += '</button>';
	html += '</div>';
	html += '<div class="modal-body">';
	html += '<span class="row mx-auto clearfix"><i class="fa fa-info-circle fa-2x text-info" aria-hidden="true"> </i><h4> &nbsp;&nbsp;'+message +'</h4></span>';
	html += '</div>';
	html += '<div class="modal-footer">';
	html += '<button type="button" class="btn btn-secondary btn_cancel" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>';
	html += '<button type="button" class="btn btn-primary btn_ok"> <i class="fa fa-check" aria-hidden="true"></i> OK </button>';
	html += '</div>';
	html += '</div>';
	html += '</div>';
	html += '</div>';
	html += '<div id="space"></div>';
	$('body').append(html).add( $('#messageConfirm').modal({'show':true,backdrop: 'static',keyboard: true}));
	// setTimeout(function() {$('#messageConfirm').modal('hide');}, 5000);

}
</script>

<?php echo $this->app->script(); ?>

