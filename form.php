<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>WSQ</title>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" />

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/template.css" rel="stylesheet" type="text/css" />
<link href="css/materialize.min.css" rel="stylesheet" type="text/css" />




<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#first').parallax("50%", 0.1);
	$('#second').parallax("50%", 0.2);
	$('.bg').parallax("50%", 0.4);
	$('#third').parallax("50%", 0.3);
	$('#fourth').parallax("50%", 0.4);
	$('#fifth').parallax("50%", 0.5);
	//$('.bg1').parallax("50%", 0.4);
	$('#sixth').parallax("50%", 0.6);
	$('#seventh').parallax("50%", 0.7);
	

})
</script>

<!-- countDown -->
<script type="text/javascript">
if(typeof jQuery == 'undefined')
	document.write('<script src="js/jquery.min.js"><\/script><script src="js/fastclick.min.js"><\/script>')
</script>
<script src="frameworks/prefix.js" type="text/javascript"></script>
<script src="frameworks/framework.js" type="text/javascript"></script>

<!-- Owl Coursel-->
<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    
    
    <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel();

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
  


    });
    </script>


<!-- Contact Form-->
<script>
function validateSmsForm(){
	var mobile =jQuery('#mobile').val();
        var mobileReg =/^[0-9]{10,10}$/;
	
	if(mobile==''){
	jQuery('#messageError').html('');
	jQuery('#messageError').html('<span style="color:red;margin-top:3px;">Please enter mobile number. </span>');
	return false;
	}else if(!mobileReg.test(mobile)){
		jQuery('#messageError').html('');
		jQuery('#messageError').html('<span style="color:red;margin-top:3px;">Please enter valid mobile number. </span>');
		return false;
	}

	jQuery.ajax({

			url:'sms.php',
			method:'POST',
			data:{mobile:mobile},
			beforeSend: function() {
				jQuery('#messageError').html('<span style="color:green;">Sms Sending....</span>');
			},
			success:function(response){
			jQuery('#mobile').val('');
			var respond = JSON.parse(response);
			if(respond.success==true){
				jQuery('#messageError').html('');
				jQuery('#messageError').html('<span style="color:green;">'+respond.message+'</span>');
			}else{
				jQuery('#messageError').html('');
				jQuery('#messageError').html('<span style="color:red;">'+respond.message+'</span>');
			     }		
			
			}

	});
}
</script>
</head>

<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand desk pad" href="#first"><img  src="images/logo.png"/></a> <a class="navbar-brand mobile" href="#first"><img  src="images/wsq-mobile-logo.png"/></a> </div>
    <div id="navbar" class="navbar-collapse collapse">
      <div id="nav">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#first"><span>Home</span></a></li>
          <li><a href="#second"><span>The Wanda Promise</span></a></li>
          <li><a href="#third"><span>Our Timeline</span></a></li>
          <li><a href="#fourth"><span>Where We Are</span></a></li>
          <li><a href="#fifth"><span>Our World-Class Facilities</span></a></li>
          <li><a href="#sixth"><span>What We Offer</span></a></li>
          <li><a href="#seventh"><span>Get In Touch</span></a></li>
        </ul>
        <div class="gotop"><a href="#first"><img src="images/gotop.jpg" /></a></div>
      </div>
    </div>
    <!--/.nav-collapse --> 
  </div>
  <div class="wanda_promis_logo desk pad"><img src="images/logo_right.png"/></div>
</nav>
<div class="clearfix"></div>
<!-- Home -->
<div id="first" class="relative">
  <div class="videobg">
    <video loop autoplay class="pad">
      <source src="images/wsq-flyover.mp4" type="video/mp4"/>
      <source src="images/wsq-flyover.webm" type="video/webm" />
      <source src="images/wsq-flyover.ogg" type="video/ogg"/>
      Your browser does not support the video tag. </video>
  </div>
  <div class="desktop_mask"><div class="pad desk"><img src="images/bg-1-mask-large.png" /></div><div class="mobile"><img class="mobile" src="images/bg-1-mobile-combine.jpg" /></div></div>
  <div class="countdown tablet title"> <span class="text title">countdown to global launch </span><span id="countdown" class="title"></span> <span class="text title days">days</span> </div>
  <div class="text-center mobile blockquote">
  <p>"Qingdao Oriental Movie Metropolis will be the most advanced movie studio with the largest investment in the world. Wanda has invited the world's leading companies and talentto develop this project. I believe that withits opening… it will becomeone of the major centers for global film."</p>
  <p>&nbsp;</p>
<p><span class="name">Wang Jianlin</span><br>
Chairman of the Wanda Group</p>
  </div>
</div>
<div class="clearfix"></div>
<!-- The Wanda Promise -->
<div id="second">
  <div class="container desk tablet pad">
    <div class="frame_inside relative">
      <p class="text-center"><img src="images/1-tagline.png" /></p>
      <div class="desk"><img class="pic-1 to-animate fadeInUp animated" src="images/2-studio-overview.png"/> <img class="pic-3" src="images/2-studio-wsq.png"/> <img class="pic-2" src="images/2-studio-sketch.png"/></div>
      <div id="wanda_promis" class="owl-carousel owl-theme">
        <div class="item col-xs-12 col-sm-6 col-md-6"><img src="images/2-studio-overview.png" alt="The Last of us"></div>
        <div class="item col-xs-12 col-sm-6 col-md-6"><img src="images/2-studio-wsq.png" alt="GTA V"></div>
        <div class="item col-xs-12 col-sm-6 col-md-6"><img src="images/2-studio-sketch.png" alt="Mirror Edge"></div>
      </div>
      <div class="pic-4 col-xs-12 col-sm-6 col-md-8">
        <p>Wanda Studios Qingdao, the centerpiece of the Qingdao Oriental Movie Metropolis, is a US $10 billion commercial property investment by its parent company, the Wanda Group.</p>
        <p>Spread across 165.41 hectares, this large-scale production base features a substantial number of state-of-the-art sound stages, built to the highest international technical standards. A large backlot will house built-to-order shooting locations with infinite capacity to customize to production needs.</p>
        <p>Slated to open July 2017, Wanda Studios Qingdao (WSQ) will offer comprehensive creative and production services to filmmakers around the world. Together with leading partners in the global film and television production industry, WSQ is building a new hub of creativity and defining one of the world’s largest film and television production destinations.</p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="container mobile">
    <div class="frame_inside relative">
      <p class="text-center"><img src="images/1-tagline.png" /></p>
      <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item col-xs-12 col-sm-6 col-md-6"><img src="images/2-studio-overview.png" alt="The Last of us"></div>
        <div class="item col-xs-12 col-sm-6 col-md-6"><img src="images/2-studio-wsq.png" alt="GTA V"></div>
        <div class="item col-xs-12 col-sm-6 col-md-6"><img src="images/2-studio-sketch.png" alt="Mirror Edge"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 white_text">
        <p>Wanda Studios Qingdao, the centerpiece of the Qingdao Oriental Movie Metropolis, is a US $10 billion commercial property investment by its parent company, the Wanda Group.</p>
        <p>Spread across 165.41 hectares, this large-scale production base features a substantial number of state-of-the-art sound stages, built to the highest international technical standards. A large backlot will house built-to-order shooting locations with infinite capacity to customize to production needs.</p>
        <p>Slated to open July 2017, Wanda Studios Qingdao (WSQ) will offer comprehensive creative and production services to filmmakers around the world. Together with leading partners in the global film and television production industry, WSQ is building a new hub of creativity and defining one of the world’s largest film and television production destinations.</p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- Our Timeline -->
<div id="third">
  <div class="row">
  		<div class="col-xs-12 col-sm-12 col-md-6">
        	<div class="timeline-video"><iframe src="https://www.youtube.com/embed/C4HFPXibFfc" frameborder="0" allowfullscreen></iframe></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
        	<div class="time-line visible-lg visible-md hidden-sm"><hr>
            	<div class="circle first"></div>
                <div class="circle second"></div>
                <div class="circle third"></div>
                <div class="circle fourth"></div>
                <div class="circle fifth"></div>
                <div class="circle sixth"></div>
                <ul class="top-timeline">
                    <li>
                        <h5>EARLY 2013</h5>
                        <p>Inception of Wanda Studios Qingdao (WSQ)</p>
                    </li>
                    <li>
                        <h5>2014 <span>MAR</span></h5>
                        <p>WSQ Signs Partnership Agreement with Pinewood Studios</p>
                    </li>
                    <li>
                        <h5>2016 <span>APR</span></h5>
                        <p>WSQ Announces Major Hollywood Co-Production Deals</p>
                    </li>
                </ul>
                <ul class="bottom-timeline">
                    <li>
                        <div class="time-record">
                        	<h5>2013 <span>JUL</span></h5>
                        	<p>Inception of Wanda Studios Qingdao (WSQ)</p>
                        </div>
                    </li>
                    <li>
                    	<div class="time-record">
                            <h5>2015 <span>JAN</span></h5>
                            <p>WSQ Signs Partnership Agreement with Pinewood Studios</p>
                        </div>
                    </li>
                    <li>
                   		<div class="time-record">
                            <h5>2017 <span>JUL</span></h5>
                            <p>WSQ Announces Major Hollywood Co-Production Deals</p>
                        </div>
                    </li>
                </ul>
             </div>
             
             <ul class="mobile-record hidden-md  hidden-lg">
             	<li>
                	<h5>EARLY 2013</h5>
                    <p>Inception of Wanda Studios Qingdao (WSQ)</p>
                </li>
             	<li>
                	<h5>2013 <span>JUL</span></h5>
                    <p>Raleigh Studios becomes Official WSQ Consultant</p>
                </li>
             	<li>
                	<h5>2014 <span>MAR</span></h5>
                    <p>WSQ Signs Partnership Agreement with Pinewood Studios</p>
                </li>
             	<li>
                	<h5>2015 <span>JAN</span></h5>
                    <p>WSQ Construction Begins</p>
                </li>
             	<li>
                	<h5>2016 <span>APR</span></h5>
                    <p>WSQ Announces Major Hollywood Co-Production Deals</p>
                </li>
             	<li>
                	<h5>2017 <span>JUL</span></h5>
                    <p>Grand Opening of Wanda Studios Qingdao</p>
                </li>
                
             </ul>
        </div>
  </div>
</div>
<div class="clearfix"></div>
<!-- Where We Are -->
<div id="fourth" data-section="features">
  <div class="row">
    <div class="col-xs-5 text-right island-desk">
      <div class="island-maps"><img src="images/maps.png" class="img-responsive"></div>
    </div>
    <div class="col-xs-12 col-sm-7">
      <div class="island-bg island-desk">
        <div class="island-img"><img src="images/floating_island.png" class="img-responsive"></div>
        <div class="island-line"><img src="images/island-line.png"></div>
      </div>
      <img src="images/mobile-island-map.jpg" class="island-mobile img-responsive">
      <div class="wanda-head">Qingdao</div>
      <div class="wanda-desc">
        <p>This city of rich history, both diverse and lively, graces the skyline with modern high-rises, and presents the world with a new addition: Wanda Studios Qingdao (WSQ). WSQ is an international studio, boasting a garden-like complex, complete with scenic destinations of mountains, rivers, reservoirs and wetlands.</p>
        <p>Equidistantly nestled between Beijing and Shanghai, WSQ is found in the Huangdao district of Qingdao city. It is intimately connected to Hollywood: a high-performance, secure optical fiber studio backbone network links all production and postproduction facilities across the Pacific at an impressive rate of up to 40G.</p>
      </div>
    </div>

  </div>
  <div class="clearfix"></div>
  <div class="boat"><img src="images/boat.png" /></div>
</div>
<div class="clearfix"></div>
<!-- Our World-Class Facilities -->
<div id="fifth" data-section="testimonials">
  <div class="container">
    <h2 class="to-animate">Our World Class Facilities</h2>
    <p>&nbsp;</p>
    <div class="hidden-xs desktop_gal">
      <div class="column-gal"> <img src="images/1.jpg" class="img-responsive"><img src="images/1img.jpg" class="img-responsive"> <img src="images/2.jpg" class="img-responsive"><img src="images/2img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/3.jpg" class="img-responsive"><img src="images/3img.jpg" class="img-responsive"> <img src="images/4.jpg" class="img-responsive"><img src="images/4img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/5.jpg" class="img-responsive"><img src="images/5img.jpg" class="img-responsive"> <img src="images/6.jpg" class="img-responsive"><img src="images/6img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/7.jpg" class="img-responsive"><img src="images/7img.jpg" class="img-responsive"> <img src="images/8.jpg" class="img-responsive"><img src="images/8img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/9.jpg" class="img-responsive"><img src="images/9img.jpg" class="img-responsive"> <img src="images/10.jpg" class="img-responsive"><img src="images/10img.jpg" class="img-responsive"> </div>
    </div>
    <div id="owl-demo1" class="owl-carousel owl-theme hidden-sm hidden-md hidden-lg">
      <div class="column-gal"> <img src="images/1.jpg" class="img-responsive"><img src="images/1img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/2.jpg" class="img-responsive"><img src="images/2img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/3.jpg" class="img-responsive"><img src="images/3img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/4.jpg" class="img-responsive"><img src="images/4img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/5.jpg" class="img-responsive"><img src="images/5img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/6.jpg" class="img-responsive"><img src="images/6img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/7.jpg" class="img-responsive"><img src="images/7img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/8.jpg" class="img-responsive"><img src="images/8img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/9.jpg" class="img-responsive"><img src="images/9img.jpg" class="img-responsive"> </div>
      <div class="column-gal"> <img src="images/10.jpg" class="img-responsive"><img src="images/10img.jpg" class="img-responsive"> </div>
    </div>
    <div class="clearfix"></div>
  </div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- What We Offer -->
<div id="sixth">
  <div class="texture pad desk">
    <div id="wordcloud"> <span class="wordcontainer" id="word01"><span class="word">Well-designed Production Offices</span></span> <span class="wordcontainer" id="word02"><span class="word">Interpretation<br>
      Services</span></span> <span class="wordcontainer" id="word03"><span class="word">Sign & Graphics<br>
      Shop</span></span> <span class="wordcontainer" id="word04"><span class="word">Underwater<br>
      Cinematography</span></span> <span class="wordcontainer" id="word05"><span class="word">Transportation</span></span> <span class="wordcontainer" id="word06"><span class="word">Construction</span></span> <span class="wordcontainer" id="word07"><span class="word">VFX, Animation,<br>
      Digital Effects</span></span> <span class="wordcontainer" id="word08"><span class="word">Sound Mixing</span></span> <span class="wordcontainer" id="word09"><span class="word">Post Production</span></span> <span class="wordcontainer" id="word10"><span class="word">Editing</span></span> <span class="wordcontainer" id="word11"><span class="word">Set Lighting,<br>
      Electrical & Grip</span></span> <span class="wordcontainer" id="word12"><span class="word">Graphic Design / Web Design</span></span> <span class="wordcontainer" id="word13"><span class="word">Props Making</span></span> <span class="wordcontainer" id="word14"><span class="word">Textile Supply</span></span> <span class="wordcontainer" id="word15"><span class="word">Turn-key Catering Preparation Areas</span></span> <span class="wordcontainer" id="word16"><span class="word">Film Production Management</span></span> <span class="wordcontainer" id="word17"><span class="word">Marketing Solutions</span></span> <span class="wordcontainer" id="word18"><span class="word">Production Equipment Rental</span></span> <span class="wordcontainer" id="word19"><span class="word">Costume Design</span></span> <span class="wordcontainer" id="word20"><span class="word">Set Construction and<br>
      Material Supply</span></span> <span class="wordcontainer" id="word21"><span class="word">Security<br>
      Services</span></span> <span class="wordcontainer" id="word22"><span class="word">Set Design</span></span> <span class="wordcontainer" id="word23"><span class="word">Expendables</span></span> <span class="wordcontainer" id="word24"><span class="word">IT & System Administration</span></span> <span class="wordcontainer" id="word25"><span class="word">Public and Corporate<br>
      Relations</span></span> <span class="wordcontainer" id="word26"><span class="word">Film Trailer Production Service</span></span> <span class="wordcontainer" id="word27"><span class="word">Motion Capture</span></span> <span class="wordcontainer" id="word28"><span class="word">Video Game<br>
      Development</span></span> <span class="wordcontainer" id="word29"><span class="word">Legal Counsel</span></span> <span class="wordcontainer" id="word30"><span class="word">Paint<br>
      Shop</span></span> <span class="wordcontainer" id="word31"><span class="word">Motion Control</span></span> <span class="wordcontainer" id="word32"><span class="word">Hair & Makeup<br>
      Service</span></span> <span class="wordcontainer" id="word33"><span class="word">Digital Connectivity<br>
      Service</span></span> <span class="wordcontainer" id="word34"><span class="word">Sound Recording, Foley</span></span>
      <p class="clearfix"></p>
    </div>
  </div>
  <div class="mobile whatweoffer">
  <h3>What We Offer</h3>
<ul class="disk">
<li>Construction</li>
<li>Digital Connectivity Service</li>
<li>Expendables</li>
<li>Film Production Management</li>
<li>Interpretation Services</li>
<li>Paint Shop</li>
<li>Post Production</li>
<li>Production Equipment Rental</li>
<li>Security Services</li>
<li>Set Lighting, Electrical & Grip</li>
<li>Sign & Graphics Shop</li>
<li>Transportation</li>
<li>Turn-key Catering Preparation Areas</li>
<li>Underwater Cinematography</li>
<li>VFX, Animation, Digital Effects </li>
<li>Well-designed Production Offices</li>
</ul>


<div class="andmoretext">
<p class="darkyellow">And much more...</p>
<p>Costume Design  |  Editing  |  Film Trailer Production Service  |  Graphic Design / Web Design  |  Hair & Makeup Service  |  IT & System Administration  |  Legal Counsel   |  Marketing Solutions  |  Motion Capture  |  Motion Control  |  Props Making  |  Public and Corporate Relations  |  Set Construction and Material Supply  |  Set Design  |  Sound Recording, Foley  |  Sound Mixing  |  Textile Supply  |  Video Game Development</div>


  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- Get In Touch -->
<div id="seventh" data-section="press">
  <section class="section7">
    <div class="formwrap">
      <div class="formrgh">
        <h3>Get in Touch</h3>
        <p>Wanda Studios Qingdao stands as the world’s largest film and television studio, promising state-of-the-art facilities and world-class production services – creating excitement for all filmmakers, directors and movie enthusiasts. If you would like to learn more about Wanda Studios Qingdao, please leave us a note and we will get back to you as soon as we can.</p><p>We look forward to hearing from you.</p>
        <form action="" method="post" id="mycontactform" class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input name="name" id="username" type="text" class="validate">
              <label for="username">Name<i class="fa fa-asterisk"></i></label>
            </div>
            <div class="input-field col s6">
              <input name="email" id="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email<i class="fa fa-asterisk"></i></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="company_name" id="companyname" type="text" class="validate">
              <label for="companyname">Company Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="subject" id="subject" type="text" class="validate">
              <label for="subject">Subject</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea name="message" id="textarea1" class="materialize-textarea" type="text"></textarea>
              <label for="textarea1">Message<i class="fa fa-asterisk"></i></label>
            </div>
          </div>
          <div class="row">
            <div class="inputwrapper col s12">
              <input type="submit" name="submit" id="submit" class="send-btn" value="Submit">
            </div>
          </div>
          <div id="success" style="color:red;"></div>
          <div class="row">
            <div class="col s12">
              <p>You may also connect with a representative at:<br/>
                <a class="mailcolor" href="&#109;&#x61;&#x69;&#108;&#116;&#x6f;&#x3a;&#x69;&#110;&#102;&#x6f;&#64;&#x77;&#x61;&#110;&#x64;&#97;&#115;&#116;&#117;&#x64;&#x69;&#111;&#x73;&#46;&#x63;&#x6f;&#x6d;">&#x69;&#110;&#102;&#x6f;&#64;&#x77;&#x61;&#110;&#x64;&#97;&#115;&#116;&#117;&#x64;&#x69;&#111;&#x73;&#46;&#x63;&#x6f;&#x6d;</a> </p>
              <p>&nbsp;</p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
</div>
<div class="clearfix"></div>
<!-- Footer -->
<footer id="footer" role="contentinfo">
  <div class="container tablet desk pad">
    <p class="footer-address"><i class="fa fa-map-marker"></i>44/F HNA IMC Center, No.2 HongKong Road , Shinan District, 266000 Qingdao, Shandong, CHINA </p>
    <div class="deco"></div>
    <div class="copyright">Copyright &copy; 2016 Wanda Studios Qingdao.  All Rights Reserved.</div>
    <div class="footer-widgets clearfix"> <a href="http://www.wanda-group.com/" target="_blank" class="link">WANDA GROUP&nbsp;&nbsp;<i class="fa fa-external-link"></i></a> <a href="http://www.wandamedia.cn/en/" target="_blank" class="link">WANDA MEDIA&nbsp;&nbsp;<i class="fa fa-external-link"></i></a> <a href="http://www.wandacinemas.com/en/" target="_blank">WANDA CINEMAS&nbsp;&nbsp;<i class="fa fa-external-link"></i></a> </div>
  </div>
  <div class="mobile">
    <div class="footwrap">
      <div class="footer-widgets clearfix"> <a href="http://www.wanda-group.com/" target="_blank" class="link">WANDA GROUP&nbsp;&nbsp;<i class="fa fa-external-link"></i></a> <a href="http://www.wandamedia.cn/en/" target="_blank" class="link link2">WANDA MEDIA&nbsp;&nbsp;<i class="fa fa-external-link"></i></a> <a href="http://www.wandacinemas.com/en/" target="_blank" class="link last">WANDA CINEMAS&nbsp;&nbsp;<i class="fa fa-external-link"></i></a> </div>
      <div class="deco"></div>
      <p class="footer-address clearfix"> <i class="fa fa-map-marker"></i>44/F HNA IMC Center, No.2 HongKong Road , Shinan District, 266000 Qingdao, Shandong, CHINA </p>
      <div class="copyright">Copyright &copy; 2016 Wanda Studios Qingdao.  All Rights Reserved.</div>
    </div>
  </div>
</footer>

<script src="js/global.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/bootstrap.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<!-- Owl Coursel -->
<script src="owl-carousel/owl.carousel.js"></script>
<script>
$(document).ready(function() {  
	$("#owl-demo1").owlCarousel({	 
		autoPlay : false,
		items:1,
		margin:10,
        stopOnHover : false,
        navigation:false,
		pagination:false,
        paginationSpeed:1000,
        goToFirstSpeed:2000,
        singleItem:true,
        autoHeight:true,
		touchDrag: true,
		mouseDrag: true
		
	});
});
</script>

<!-- Form Script-->
<script>
$(document).ready(function(){

$('#submit').click(function(){

$.post("send.php", $("#mycontactform").serialize(),  function(response) {   
 $('#success').html(response);
 //$('#success').hide('slow');
});
return false;


});

});
</script>
<script>
$(document).ready(function(){
$('#submit').on('click', function () {
    $('#email').val('');
	$('#message').val('');; 
});
});
</script>
</body>
</html>
