jQuery.noConflict();
var $ = jQuery;

(function($) {
	$("#formlogin").attr({"action": Url+"index.php/authen/checkLogin", "method": "post"});

	countDownTime();

}(jQuery));

function countDownTime() {
	// var fiveSeconds = new Date('2020/10/10 12:34:56').getTime() + 5000;
	var fiveSeconds = new Date('2019/02/20');

	$('#clock').countdown('2020/10/10', {elapse: true})
	.on('update.countdown', function(event) {
		var $this = $(this);
		$this.html(event.strftime(''
			+'<div class="time-entry days"><span> 14 </span> Days</div>'
			+'<div class="time-entry hours"><span> พ.ค. </span> MOUNT</div>'
			+'<div class="time-entry minutes"><span> 2562 </span> YEAR</div>'
			// +'<div class="time-entry days"><span> %-d </span> Days</div>'
			// +'<div class="time-entry hours"><span> %H </span> HOURS</div>'
			// +'<div class="time-entry minutes"><span> %M </span> MINUTES</div>'
			// +'<div class="time-entry seconds"><span> %S </span> SECONDS</div>'
			));
	});
	// --------------------------
}