jQuery.noConflict();
var $ = jQuery;

(function($) {
	$("form").attr({"action": Url+Ctl+"/saveEdit", "method": "post"});
}(jQuery));