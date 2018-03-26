<?php 
if(isset($_POST['submit'])){
    $to = "youthcodecommunity@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<html>
<head>
<title>youthcodecommunity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery.mini.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css"  media="all">
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/responsiveslides.min.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!---->
  <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
			    event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
</script>


</head>

<body> 
<!--header-->

	<div class="header navbar navbar-light " >
			<div class="container">
			<div class="fixed-header">

			<div class="logo">
			     <img src="images/ycclogo.png" height="60" width="120" alt=" " />
			</div>
			
				<div class="top-nav cssmenu">
				<nav class="nav clearfix" >
					<a id="menu-toggle" class="anchor-link"><img src="images/menu.png" alt="" /></a>
					<ul class="simple-toggle" id="nav">
			        	<li ><a href="#home" class="scroll"><strong>Home</strong></a></li>		        	
			        	<li ><a href="#services" class="scroll"> <strong>Services</strong></a></li>
						<li ><a href="#about" class="scroll"><strong>About</strong></a></li>
			        	<li><a href="#work" class="scroll"><strong>Projects</strong></a></li>
			        	<li><a href="#contact" class="scroll"><strong>Contact</strong></a></li>
			        </ul>
				</nav>
				
				<script type="text/javascript">
					  $(document).ready(function() {
					
						$('#menu-toggle').click(function () {
					      $('#nav').toggleClass('open');
					      e.preventDefault();
					    });
					    
					});
				</script>
				<!---->
				<script src="js/jquery.nav.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#nav').onePageNav({
			begin: function() {
			console.log('start')
			},
			end: function() {
			console.log('stop')
			}
		});
	});
	</script>
				
				</div>
				<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header").addClass("fixed");
				}else{
					$(".header").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--banner-->
<div class="banner" id="home">
	<!-- Carousel Slider -->
    <div id="carouselLogo" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselLogo" data-slide-to="0" class="active"></li>
            <li data-target="#carouselLogo" data-slide-to="1"></li>
            <li data-target="#carouselLogo" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/banner3.jpg" alt="First slide">
                <div class="banner-matter">
				<img  class="img-responsive" src="images/nurtur.png" alt=" " />
			  
			  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner.jpg" alt="First slide">
                <div class="banner-matter">
				<img  class="img-responsive" src="images/nurtur.png" alt=" " />
			  
			  </div>
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner2.jpg" alt="First slide">
                <div class="banner-matter">
				<img  class="img-responsive" src="images/nurtur.png" alt=" " />
			  
			  </div>
            </div> 
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner1.jpg" alt="First slide">
                <div class="banner-matter">
				<img  class="img-responsive" src="images/nurtur.png" alt=" " />
			  
			  </div>
            </div> 

        </div>
        <a class="carousel-control-prev" href="#carouselLogo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselLogo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>    
	</div>
</div>
    <!-- Carousel Slider -->

<!--content-->
	<div class="content">
	<!---->
		<div class="services" id="services">
			<div class="container">
				<div class="service-head">
	<h3>OUR SERVICES</h3>
        <span> We offer a number of <b>services</b> some of which include the following:</span>
	<p>We offer these services at a much reasonable cost and we invite people especially the youth to come
	   and join us. Our doors are open and always ready to offer help to who need it</p>
		</div>
		<div class=" services-grid">
		<div class="col-md-3 service-grid">
		<a href="#"><img class="img-responsive" src="images/s1.png" alt=" " /></a>
	<h5>RESEARCH</h5>
	<p>We offer research services in the field of technology as well as design and embedded systems.</p>
		</div>
		<div class="col-md-3 service-grid">
		<a href="#"><img class="img-responsive" src="images/s2.png" alt=" " /></a>
	<h5>DESIGN</h5>
	<p>We design a number of things ranging from simpe business cards to website layouts.</p>
		</div>
		<div class="col-md-3 service-grid">
		<a href="#"><img class="img-responsive" src="images/s3.png" alt=" " /></a>
	<h5>DEVELOPMENT</h5>
	<p>We also develop softwares and websites as well as embedded systems.</p>
		</div>
		<div class="col-md-3 service-grid ">
		<a href="#"><img class="img-responsive" src="images/s4.png" alt=" " /></a>
	<h5>LAUNCH</h5>
	<p>We also help in the launching of applications as well as websites to the web.</p>
		</div>
		</div>
		<div class="clearfix"> </div>
		
		</div>
		</div>
	</div>
		<!---->
	<div class="team" id="about">
		<div class="container">
			<div class="team-head">
				<h3>Who we are & what we do</h3>
				<p>Find out about us.</p>
				<a  class="meet">Meet the team<span> </span></a>
			</div>

			<div class=" team-top">
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Maximo.jpg" alt=""  /></label></a>
					<p class="names1">Maximo Mugisha</p>
					<small>President</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/maximugisha"><span> </span> </a></li>
						<li class="twitter"><a href="https://www.twitter.com/maximugisha"><span> </span> </a></li>
						<li class="gmail"><a href="https://plus.google.com/+MAXIMOMUGISHA"><span> </span> </a></li>
						<li class="inline"><a href="https://www.linkedin.com/in/maximo-mugisha-434a9496/"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Claire.jpg" alt=""  /></label></a>
					<p class="names1">Claire Sharitah</p>
					<small>Vice President</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/claire.sharitah.9"><span> </span> </a></li>
						<li class="twitter"><a href="https://twitter.com/claire_sharitah"><span> </span> </a></li>
						<li class="gmail"><a href="https://plus.google.com/u/0/102214188118851119930"><span> </span> </a></li>
						<li class="inline"><a href="https://www.linkedin.com/in/claire-sharitah-28963412a/"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Joel.jpg" alt=""  /></label></a>
					<p class="names1">Joel Muhanguzi</p>
					<small>Systems Administrator</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/JoelMuhanguziTiba"><span> </span> </a></li>
						<li class="twitter"><a href="https://twitter.com/Joel_Muhanguzi?s=08""><span> </span> </a></li>
						<li class="gmail"><a href="https://https://plus.google.com/113169122103304915407"><span> </span> </a></li>
						<li class="inline"><a href="https://www.linkedin.com/in/joel-muhanguzi-1b707a138"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Tuza.jpg" alt=""  /></label></a>
					<p class="names1">Tuza John</p>
					<small>Lead Developer</small>
					<ul class="social">
						<li class="facebook"><a href="https://facebook.com/john.tuza"><span> </span> </a></li>
						<li class="twitter"><a href="https://twitter.com/johntuza"><span> </span> </a></li>
						<li class="gmail"><a href="#"><span> </span> </a></li>
						<li class="inline"><a href="#"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				</div>
				<div class=" team-top">
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Olivia.jpg" alt=""  /></label></a>
					<p class="names1">Olivia Nakayima</p>
					<small>Treasurer</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/olivia.vickiecurtis"><span> </span> </a></li>
						<li class="twitter"><a href="#"><span> </span> </a></li>
						<li class="gmail"><a href="https://plus.google.com/u/0/103518208274729241003"><span> </span> </a></li>
						<li class="inline"><a href="#"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Allan.jpg" alt=""  /></label></a>
					<p class="names1">Allan Lule</p>
					<small>MIIC Representative</small>
					<ul class="social">
						<li class="facebook"><a href="#"><span> </span> </a></li>
						<li class="twitter"><a href="#"><span> </span> </a></li>
						<li class="gmail"><a href="#"><span> </span> </a></li>
						<li class="inline"><a href="#"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_William.jpg" alt=""  /></label></a>
					<p class="names1">William Kibirango</p>
					<small>Head Of Curriculum</small>
					<ul class="social">
						<li class="facebook"><a href="https://github.com/radman13666"><span> </span> </a></li>
						<li class="twitter"><a href="https://mobile.twitter.com/radwolfsdragon"><span> </span> </a></li>
						<li class="gmail"><a href="https://plus.google.com/+WilliamKibirango"><span> </span> </a></li>
						<li class="inline"><a href="https://www.linkedin.com/in/william-kibirango-776a9b101/"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Gorret.jpg" alt=""  /></label></a>
					<p class="names1">Gorret Namulondo</p>
					<small>General Secretary</small>
					<ul class="social">
						<li class="facebook"><a href="#"><span> </span> </a></li>
						<li class="twitter"><a href="#"><span> </span> </a></li>
						<li class="gmail"><a href="https://plus.google.com/u/0/102407614525043442489"><span> </span> </a></li>
						<li class="inline"><a href="#"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				</div>
				<div class=" team-top">
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Liven.jpg" alt=""  /></label></a>
					<p class="names1">Liven Kabandize</p>
					<small>Deputy Secretary</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/liven.kabandize?ref=bookmarks"><span> </span> </a></li>
						<li class="twitter"><a href="#"><span> </span> </a></li>
						<li class="gmail"><a href="#"><span> </span> </a></li>
						<li class="inline"><a href="https://www.linkedin.com/in/kabandize-liven-3b693213b/"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Joan.jpg" alt=""  /></label></a>
					<p class="names1">Wangui Joan</p>
					<small>Internal Coordinator</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/joan.wairimu.77?ref=bookmarks"><span> </span> </a></li>
						<li class="twitter"><a href="#"><span> </span> </a></li>
						<li class="gmail"><a href="#"><span> </span> </a></li>
						<li class="inline"><a href="#"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Job.jpg" alt=""  /></label></a>
					<p class="names1">Job Amanya</p>
					<small>Member</small>
					<ul class="social">
						<li class="facebook"><a href="#"><span> </span> </a></li>
						<li class="twitter"><a href="#"><span> </span> </a></li>
						<li class="gmail"><a href="#"><span> </span> </a></li>
						<li class="inline"><a href="#"><span> </span> </a></li>
					</ul>
				</div>
				</div>	

				<div class="col-md-4 team-top-grid">
				<div class="team-grid">
					<a href="#"><label> <img class="img-responsive" src="images/Pro_Sheldon.jpg" alt=""  /></label></a>
					<p class="names1">Sheldon Onyango</p>
					<small>Member</small>
					<ul class="social">
						<li class="facebook"><a href="https://www.facebook.com/sheldonblue"><span> </span> </a></li>
						<li class="twitter"><a href="https://www.twitter.com/sheldonblue"><span> </span> </a></li>
						<li class="gmail"><a href="https://plus.google.com/+SheldonOnyango"><span> </span> </a></li>
						<li class="inline"><a href="https://www.linkedin.com/SheldonOnyango"><span> </span> </a></li>
					</ul>
				</div>
				</div>
				</div>
			</div>
	</div>


	<div class="clearfix"> </div>

		<div class="work" id="work">
			<div class="container">
				<div class="work-head">
					<h3>Recent Projects</h3>
					<p>This is some of the work we have been working on. </p>					
				</div>
				<div class=" work-top">					
					<div class="by-type">
						<h6>PORTFOLIO</h6>
					</div>
					<ul id="filters">
					<li><span class="filter " data-filter="app card icon web">All</span></li>
					<li><span class="filter" data-filter="app card icon web">Designs</span></li>
					<li><span class="filter" data-filter="card"> Logo designs</span></li>
					<li><span class="filter" data-filter="icon">Web design</span></li>
		        	</ul>
		        <div class="clearfix"> </div>
				</div>

			<div id="portfoliolist">
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">		
				<a href="images/image2.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
				<img class="img-responsive" src="images/image1.jpg" alt=""  /> 
				<span class="arrow"> </span>
				<div class="simple"><label> </label></div>		
				</a>	
				<p>YCC Website</p>													
				</div>
			</div>

			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
				<a href="images/image3.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
			 	<img class="img-responsive" src="images/image3.jpg" alt=""  />
			 	<span class="arrow"> </span>
			 	<div class="simple">						    	
				<label> </label>
				</div>		
				</a>	
				<p>Online Grocery</p>
		        </div>
			</div>

			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
				<a href="images/image4.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
				<img class="img-responsive" src="images/image4.jpg"  alt="" />
			 	<span class="arrow"> </span>
			 	<div class="simple"><label> </label></div>		
				</a>	
				<p>Hotel Booking Application</p>
		        </div>
			</div>

			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
				<a href="images/image4.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
				<img class="img-responsive" src="images/image4.jpg"  alt="" />
			 	<span class="arrow"> </span>
			 	<div class="simple"><label> </label></div>		
				</a>	
				<p>The Urban Turn Website</p>
		        </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>

			<!-- Script for gallery Here -->
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function () {
						
				var filterList = {
						
			init: function () {
							
		// MixItUp plugin
		// http://mixitup.io
		$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
			effects: ['fade'],
			easing: 'snap',

		// call the hover effect
			onMixEnd: filterList.hoverEffect()
					});				
							
				},
							
			hoverEffect: function () {
							
		// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
				function () {
				$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
				$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
						}		
				);				
							
				}
				
				};
						
		// Run the show!
			filterList.init();
			});	
		</script>
			<!-- Gallery Script Ends -->
			</div>
		</div>
		<!---->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>

	<!---->

		<!---->
		<div class="contact" id="contact">
			<div class="container">
				<div class="contact-head">
		<h3>CONTACT US</h3>
		<p>Talk to us and let us know what you think of our services. Any question or complaints are highly welcome.</p>					
		</div>
		<div class="contact-bottom">
		<div class="col-md-3 sit-contact">
		<h5>Address</h5>
		<div class="contact-add">
			<ul>
			<li><span>YCC</span></li>
			<li>Sir Apollo Kagwa road</li>
			<li>CEDAT Makerere Kampala</li>
		        <li>Kampala Uganda</li>	
			</ul>
			</div>
			<div class="contact-in">
			<ul class="phone">
			<li>Phone:  <span></span></li>
			<li>Fax:  <span></span></li>
			<li>E-mail:  <a href="youthcodecommunity@gmail.com">youthcodecommunity</a></li>
			<li>Skype:  <span>YCC</span></li>	
			</ul>							
		        </div>
						
		 </div>
								
		</div>
		<div class="col-md-6 contact-into">
		<h5>Ask a question</h5>
		<form action="" method="post">
		<div class="contact-grid">
		<div class="col-md-6 contact-us">
			First Name: <input type="text" name="first_name"><br>
			Last Name: <input type="text" name="last_name"><br>
			Email: <input type="text" name="email"><br>
			Message:<br><textarea rows="6" name="message" cols="77"></textarea><br>
			<div class="send ">
	        <input type="submit" name="submit" value="SEND" >
			</div>
			</form>

			</div>
			<div class="clearfix"> </div>
			<div class="col-md-3">
		<!---<iframe
  			width="450"
  			height="250"
  			frameborder="0" style="border:0"
  			src="https://www.google.com/maps/embed/v1/search?key=AIzaSyB5-uvk6Y5BuW216z1grOy03EU3svLWqbM&q=College+of+Engineering+Design+Art+and+Technology+(CEDAT)origin=place_id:ChIJ9RFclRa7fRcRAyYod_YA8vY">
			</iframe>-->
		</div>
		</div>

		</div>
		</div>
	</div>	
	<!--footer-->
	<div class="footer">
		<div class="container">
				<ul class="social-icons">
					<li class="twitter"><a href="https://twitter.com/yccommunity"><span> </span></a></li>
					<li class="facebook"><a href="https://www.facebook.com/youthcodecommunity/"><span> </span> </a></li>
					<li class="gmail"><a href="https://plus.google.com/u/1/117771496765124034752"><span> </span> </a></li>
				</ul>
	<p class="footer-class">Copyright &copy; 2016<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Youth Code Community. </p>
		</div>	
		  <script type="text/javascript">
			$(document).ready(function() {
				/*
			var defaults = {
			       containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
					 };
				*/
							
			       $().UItoTop({ easingType: 'easeOutQuart' });
							
						});
		</script>

		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>

</body>
</html>
