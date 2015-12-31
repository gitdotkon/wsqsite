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
	var tenH = windowD.height(),
	    tenW = windowD.width();
		
		
	if( tenW >= 1349) {
		adjustWindow();
	}
	 
	if( tenW >= 1349) {
		var IvideoH = $('#intro-video').height(),
		winH = windowD.height();		
		IvideoP = (tenH - IvideoH)/2-160;		
		$('.timeline-video').css({'padding-top':IvideoP});
	/*	$('.time-line').css({'padding-top':IvideoP - 40 + 'px'});*/
		
		var facilityH = $('#fifth').height(),
			facilityP = (tenH - facilityH)/2;
		$('.fifthsec').css({'padding-top':facilityP});
		
		var studioH = $('.wanda-desc').height(),
			studioP = (tenH - studioH)/2;
		$('.wanda-desc').css({'padding-top':studioP});
	}
	
	
});