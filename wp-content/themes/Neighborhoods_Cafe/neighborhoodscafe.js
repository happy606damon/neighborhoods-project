$(function() {
	// Top Slider

	$(".flexslider").flexslider({
		animation: "slide",
	});
	
	//	Slide for anchor links 

	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});


	// Add Class to Search Bar
	$("#searchform input[type='text']").addClass("searchbar");

	// Menu Toggle
	$("#coffee h6.coffee").on('click', function(){
		$("#coffee ul.coffee").toggle(1000);
	});
	$("#coffee h6.tea").on('click', function(){
		$("#coffee ul.tea").toggle(1000);
	});
	$("#coffee h6.other").on('click', function(){
		$("#coffee ul.other").toggle(1000);
	});
	$("#crepes h6.breakfast").on('click', function(){
		$("#crepes ul.breakfast").toggle(1000);
	});
	$("#crepes h6.savory").on('click', function(){
		$("#crepes ul.savory").toggle(1000);
	});
	$("#crepes h6.sweet").on('click', function(){
		$("#crepes ul.sweet").toggle(1000);
	});
	$("#treats h6.baked-treats").on('click', function(){
		$("#treats ul.baked-treats").toggle(1000);
	});
	$("#treats h6.other-treats").on('click', function(){
		$("#treats ul.other-treats").toggle(1000);
	});

	// Image Gallery
	$(".fancybox").fancybox({
		openEffect: 'none',
		closeEffect: 'none'
	});
}); // Doc Ready