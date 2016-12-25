$(document).ready(function(){
	window.sr = ScrollReveal().reveal();
	sr.reveal('.reveal', { duration: 1000 , easing: 'ease-in-out' , origin: 'top' });
	sr.reveal('.second_reveal', { duration: 500 , easing: 'ease-in-out', origin: 'bottom' },50);
	sr.reveal('.how-it-work', { duration: 1000 , easing: 'ease-in-out', origin: 'right' },200);
	sr.reveal('.our-users', { duration: 1000 , easing: 'ease-in-out', origin: 'right' },200);
	sr.reveal('.above-100', { duration: 1000 , easing: 'ease-in-out', origin: 'top' },200);

	$('[data-toggle="tooltip"]').tooltip();


	(function validateRegister(){
		var name 					= $('#name-user');
		var email 				= $('#email-user');
		var password 			= $('#password-user');
		var confirm_pass  = $('#twice-pass-user');
		var loop;
		$('#password-user').on('keydown', function(evt){
			if($(this).val().length < 8){
				$('#no-lenght').removeClass('hidden');
			}else{
				$('#no-lenght').addClass('hidden');
			}
		})
		$('#password-user').on('focusout',function(){
			if(!hasNumbers($(this).val())){
				$('#no-number').removeClass('hidden');
			}else{
				$('#no-number').addClass('hidden');
			}
		})
		$('#twice-pass-user').on('keyup', function(evt){
			console.log($(this).val() != $('#password-user').val());
			console.log($.trim($('#password-user').val()) == '');
			console.log($('#password-user').val().length < 8);
			console.log(!hasNumbers($('#password-user').val()));
			if( ( $(this).val() != $('#password-user').val() ||  $.trim($('#password-user').val()) == '' ) || $('#password-user').val().length < 8 || !hasNumbers($('#password-user').val()) ){
				$('#submit-btn').attr('disabled','disabled');
				$('.error-no-match').removeClass('hidden');
			}else{
				$('.error-no-match').addClass('hidden');
				$('#submit-btn').removeAttr('disabled');
			}
		})
	}());

	function hasNumbers(t)
	{
		var regex = /\d/g;
		return regex.test(t);
	}



});