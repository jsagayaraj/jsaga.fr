

$(function(){

	//hightlight the current nav

	$("#home a:contains('Home')").parent().addClass('active');
	$("#schedule a:contains('Schedule')").parent().addClass('active');
	$("#artists a:contains('Artists')").parent().addClass('active');
	$("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');
	

	//make menus drop automaticaly
	$('ul.nav li.dropdown').hover(function(){
		$('.dropdown-menu', this).fadeIn();
	}, function(){
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

	//Show tooltip

	$('[data-toggle="tooltip"]').tooltip({animation:true});

	//Show model

/*	$('.modalphotos').on('click', function(){
		$('#modal').modal({show:true})

		var mysrc = this.src.substr(0, this.src.length-7) + '.jpg';
		$('#modalimage').attr('src', mysrc);
	});*/

	//activate schedule tabls
	var hash = window.location.hash;
	hash && $('ul.nav a[href="'+ hash +'"]').tab('show');

});//jQuery is loaded