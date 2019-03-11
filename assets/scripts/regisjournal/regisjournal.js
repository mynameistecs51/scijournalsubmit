jQuery.noConflict();
var $ = jQuery;

(function($) {
	$("form").attr({"action": Url+Ctl+"/addRegis", "method": "post"});
}(jQuery));