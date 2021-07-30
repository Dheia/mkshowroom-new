$( document ).ready(function() {
	new WOW().init();

	// set value for is_activated on customer form
	$('#is_activated').change(function() {
		if ($(this).prop('checked') == true) {
			$('#is_activated').val('1');
		} else {
			$('#is_activated').val('0');
		}
	});

	// show password when clicking
	$('.toggle-password').click(function(){
		$('i.pw').toggleClass('fa-eye fa-eye-slash');
		// let input = $(this).prev();
		// input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
		let input = $('.input-pw');
		$('.input-pw').attr('type', $('.input-pw').attr('type') === 'password' ? 'text' : 'password');
	});

	// show password confirmation when clicking
	$('.toggle-password-c').click(function(){
		$('i.pwc').toggleClass('fa-eye fa-eye-slash');
		let input = $('.input-pwc');
		$('.input-pwc').attr('type', $('.input-pwc').attr('type') === 'password' ? 'text' : 'password');
	});

	// animated icon
	$('.first-button').on('click', function () {
		$('.animated-icon1').toggleClass('open');
	});
	$('.second-button').on('click', function () {
		$('.animated-icon2').toggleClass('open');
	});
	$('.third-button').on('click', function () {
		$('.animated-icon3').toggleClass('open');
	});

});

$(function () {
	$('.material-tooltip-main').tooltip({
		template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
	});
})