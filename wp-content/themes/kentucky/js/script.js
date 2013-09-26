jQuery(document).ready(function($) {  
    $('#kentuckyslider').carousel();

    $('#carousel-example-generic .item:first-child').addClass('active');


    var images = $('#carousel-example-generic .item');

    for( var i = 0; i < images.length; i++) {
    	console.log(images);
    	$('.carousel-indicators').append('<li data-target="#carousel-example-generic" data-slide-to="' + i + '"></li>');
    }

    $('.carousel-indicators li:first-child').addClass('active');
    
});