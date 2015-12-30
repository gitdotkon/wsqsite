// JavaScript Document


//// adjust window ////
$(document).ready(function(){
	// Setup variables
	var windowD = $(window),
		slide = $('.homeSlide');
		bodyD = $('body');
	function adjustWindow(){
	    // Get window size
	    winH = windowD.height() - 150 + 'px' ;
	    winW = windowD.width();
	    // Init Skrollr for 768 and up
	    //if( winW >= 1366) {
	        // Resize our slides
	        $(slide).css({'height':winH,});
	    //} else {
	     //   $(slide).height(false);
	    //}
	}
	var winH = windowD.height(),
	    winW = windowD.width();
	if( winW >= 1366) {
		adjustWindow();
	}
	 
	if( winW >= 1366) {
		var IvideoH = $('#intro-video').height(),
		winH = windowD.height();		
		IvideoP = (winH - IvideoH)/2;		
		$('.timeline-video').css({'padding-top':IvideoP});
		$('.time-line').css({'padding-top':IvideoP - 40 + 'px'});
		
		var facilityH = $('.fifthsec').height(),
			facilityP = (winH - facilityH)/2;
		$('.fifthsec').css({'padding-top':facilityP});
		
		var studioH = $('.wanda-desc').height(),
			studioP = (winH - studioH)/2;
		$('.wanda-desc').css({'padding-top':studioP});
	}
	
	
});