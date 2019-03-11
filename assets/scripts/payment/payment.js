jQuery.noConflict();
var $ = jQuery;
(function ($) {
	$("form").attr({"action": Url+Ctl+"/addPyment", "method": "post"});

	$("#imgInp").change(function() {
		readURL(this);
	});

}(jQuery));

function readURL(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#blah').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}

}

