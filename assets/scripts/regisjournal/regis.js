jQuery.noConflict();
var $ = jQuery;

(function($) {
  $('input[name="prefixnameteam"]').focus();
  $("form").attr({"action": Url+Ctl+"/addRegis", "method": "post"});
}(jQuery));