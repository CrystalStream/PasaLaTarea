$(document).ready(function(){
	window.sr = ScrollReveal().reveal();
	sr.reveal('.reveal', { duration: 1000 , easing: 'ease-in-out' , origin: 'top' });
	sr.reveal('.second_reveal', { duration: 500 , easing: 'ease-in-out', origin: 'bottom' },50);
	sr.reveal('.how-it-work', { duration: 1000 , easing: 'ease-in-out', origin: 'right' },200);
	sr.reveal('.our-users', { duration: 1000 , easing: 'ease-in-out', origin: 'right' },200);
	sr.reveal('.above-100', { duration: 1000 , easing: 'ease-in-out', origin: 'top' },200);

	$('[data-toggle="tooltip"]').tooltip();
	$('#attach').ezdz({
		className:     'drag-file',
    text:          'Sube un archivo',
    previewImage:  true,
    value:         null,
    classes: {
        main:      'ezdz-dropzone',
        enter:     'ezdz-enter',
        reject:    'ezdz-reject',
        accept:    'ezdz-accept',
        focus:     'ezdz-focus'
    },
    validators: {
        maxSize:   50000,
        width:     null,
        maxWidth:  null,
        minWidth:  null,
        height:    null,
        maxHeight: null,
        minHeight: null
    },
    init:   function() {},
    enter:  function() {},
    leave:  function() {},
    reject: function() {},
    accept: function() {},
    format: function(filename) {
        return filename;
    }
	});

	$('#desc-area').on('keyup',function(evt){
		$('#missingChar').text('(' + (100 - $(this).val().length) + ')');
	});
	//SIDE BAR JS
	htmlbodyHeightUpdate()
	$( window ).resize(function() {
		htmlbodyHeightUpdate()
	});
	$( window ).scroll(function() {
		height2 = $('.main').height()
			htmlbodyHeightUpdate()
	});

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


	//SIDE BAR JS
	function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}	
	}
});