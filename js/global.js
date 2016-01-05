
// Preloader
 $(document).ready(function() {
        
		$('html').jpreLoader({
			splashID: "#jSplash",
			loaderVPos: '50%',
			//autoClose: false,
			//closeBtnText: "Let's Begin!",
			splashFunction: function() {  
				//passing Splash Screen script to jPreLoader
				//$('body').children('section').not('.selected').hide();
				//$('body').hide().fadeIn(800);	
				$('body').show();
				$('#fh5co-header').show();
				//timer = setInterval(function() {
//					splashRotator();
//				}, 4000);
			}
		}, function() {	//callback function
			clearInterval('timer');
			//$('body').hide().fadeIn(800);
			/*$('#footer').animate({"bottom":0}, 500);
			$('#header').animate({"top":0}, 800, function() {
				$('#wrapper').fadeIn(1000);
			});*/
		});
});
	
	
	
	
	// BG Remove On Mobile
$(function(){
	 if ($(window).width() < 1024) {
   $(".videobg").remove();
}
	});
	
	
	
	
			
			
			// Boat Animation
			$(function(){
onload = function startAnimation() {
    var frames = document.getElementById("animation").children;
    var frameCount = frames.length;
    var i = 0;
    setInterval(function () {
        frames[i % frameCount].style.display = "none";
        frames[++i % frameCount].style.display = "block";
    }, 100);
}
})



// Scroller
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 600) {
    $('.gotop').fadeIn();
  } else {
    $('.gotop').fadeOut();
  }
});


// Reduce header size on scroll
$(window).scroll(function(){
    if($(document).scrollTop() > 0) {
        $('#fh5co-header').addClass('smallheader');
    } else {
        $('#fh5co-header').removeClass('smallheader');
    }
});





// Contact form
	$(function(){
		var form = $('#main-contact-form');
		form.submit(function(event){
			var email = $('#email').val();
			var name = $('#username').val();
			var company = $('#companyname').val();
			var message = $('#textarea1').val();
			var subject = $('#subject').val();
			event.preventDefault();
			var form_status = $('<div class="form_status"></div>');
			$.ajax({
				url: 'sendemail.php',
				type: 'POST',
				data: {email: email,name:name,company:company,message:message,subject:subject},
				beforeSend: function(){
					if(email==''){
					return false;
					}else if(message=''){
						return false;
					}else if(name==''){
						return false;
					}else{
						form.prepend( form_status.html('<p><i class="send fa fa-spinner fa-spin"></i> Sending email...</p>').fadeIn() );
					}
				}
			}).done(function(data){
				if(email==''){
					return false;
				}else if(message=''){
					return false;
				}else if(name==''){
					return false;
				}
				$('.formwrap h3').hide();
				$('.formwrap p.textcont').hide();
				$('#formHide').hide();
				$('.formwrap .send').hide();
				form_status.html('<p class="text-success">' + data.message + '</p><p id="showform" onclick="showForm();"><a class="btn">Close</a></p>');
				form[0].reset();
			});
		});
		});
		
		
		
		 function showForm()
	{
		$('.formwrap h3').show();
				$('.formwrap p.textcont').show();
				$('#formHide').show();
				$('.formwrap .send').show();
				$('#showform').hide();
				$('.form_status').hide();
				
	}