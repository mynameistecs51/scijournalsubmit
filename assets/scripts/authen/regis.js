jQuery.noConflict();
var $ = jQuery;

(function($) {

	$('input[name="email"]').focus();
	$("form").attr({"action": Url+Ctl+"/addRegis", "method": "post"});

}(jQuery));