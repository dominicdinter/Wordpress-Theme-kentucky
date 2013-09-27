jQuery(document).ready(function($) {  
	

// add active Class to item
    $('#carousel .item:first-child').addClass('active');



// add dynamic indicators
	
    var images = $('#carousel .item');
    
    for( var i = 0; i < images.length; i++ ) {
    	$('.carousel-indicators').append('<li data-target="#carousel" data-slide-to="' + i + '"></li>');
    }



// add active Class to the first indicator
    $('.carousel-indicators li:first-child').addClass('active');


    
});