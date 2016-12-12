$(document).ready(function(){
	window.sr = ScrollReveal().reveal();
	sr.reveal('.reveal', { duration: 1000 , easing: 'ease-in-out' , origin: 'top' });
	sr.reveal('.how-it-work', { duration: 1000 , easing: 'ease-in-out', origin: 'right' },200);
	sr.reveal('.our-users', { duration: 1000 , easing: 'ease-in-out', origin: 'right' },200);
	sr.reveal('.above-100', { duration: 1000 , easing: 'ease-in-out', origin: 'top' },200);

	$('[data-toggle="tooltip"]').tooltip(); 

});