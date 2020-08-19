<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta HTTP-EQUIV="refresh" CONTENT="60">
<!--<a HREF="javascript:history.go(0)">Click to refresh the page</a>-->
	
<title>Out Of Our Sight</title>

<link href="wp-admin/CSS/OOOS_Main_Styles.css" rel="stylesheet" type="text/css">
<link href="wp-admin/CSS/OOOS_Main_Swiper.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.typekit.net/fzu8paz.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="wp-admin/CSS/OOOS_Main_Styles.css?v=1" media="screen,print" rel="stylesheet" type="text/css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174946696-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174946696-1');
</script>	
<script type="text/javascript" src="wp-admin/JS/swiper.min.js?v=1"></script>
<script>
  (function(d) {
    var config = {
      kitId: 'req7rbt',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>	
</head>
	
<body>

<?php
$myfile = fopen("Logo_Navi.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Logo_Navi.html"));
fclose($myfile);	
?>
	
<!-- Swiper -->	
<div class="swipermainwrapper">
	
<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide"><!--Liverpool-->
			<a href="Blog_ Manchester & Liverpool.php"><img width="100%" alt="blank" src="wp-admin/IMAGES/IMAGES(Thumbnail)/05_Liverpool_PP.jpg"></a>
		</div>
		<div class="swiper-slide"><!--Manchester-->
			<a href="Blog_ Manchester & Liverpool.php"><img width="100%" alt="blank" src="wp-admin/IMAGES/IMAGES(Thumbnail)/04_Manchester_PP.jpg"></a>
		</div>
		<div class="swiper-slide"><!--Seoul-->
			<a href="Blog_Seoul.php"><img width="100%" alt="blank" src="wp-admin/IMAGES/IMAGES(Thumbnail)/SP_Seoul_PP.jpg"></a>
		</div>
		<div class="swiper-slide"><!--Gracekim-->
			<a href="https://youtu.be/h1k8liFWTqo"><img width="100%" alt="blank" src="wp-admin/IMAGES/IMAGES(Thumbnail)/Be together_Gracekim_PP.png"></a>
		</div>
		<div class="swiper-slide"><!--Knaresborough-->
			<a href="Blog_Knaresborough.php"><img width="100%" alt="blank" src="wp-admin/IMAGES/IMAGES(Thumbnail)/03_Knarsborough_PP.jpg"></a>
		</div>
	</div>
<!-- Add Swiper Button -->
<!--<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>-->
<div class="swiper-pagination"></div>
</div>

<!--Swiper setting-->
<script type="text/javascript" src="wp-admin/JS/swiper.min.js"></script>
	
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
		   
      },
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			 clickable: true,
		},
		
		 autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
	
	loop: true,
    loopFillGroupWithBlank: true,
     
		
	breakpoints: {
		1200: {
			slidesPerView: 2,
          spaceBetween: 0,
		},
		
		1024: {
			slidesPerView: 2,
          spaceBetween: 0,
		},
        768: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });
  </script>
</div>	

<!--Traier setting-->	
<div class="trailer_wrapper">
	<div class="trailer">
		<video width="100%" autoplay muted loop playsinline preload="yes">
			<source src="wp-admin/IMAGES/Trailer I_SD.mp4" type="video/mp4">
			<source src="wp-admin/IMAGES/Trailer I-Apple Devices.m4v" type="video/mp4">
		</video>
	</div>
	<div class="trailer_text">
		<div class="trailer_text_title">
			<a class="main_blog_connect" href="Blog_Seoul.php"><!--lastest page -->HOME in the City</a>
		</div>
		<div class="trailer_text_text">
		What does Home mean to you.<br>
		Challenged people at 6 different cities last year.<br><br>
		How could we see places as Home in the city where we are.<br><br>
		Now, here we are in London where is for all strangers.
		</div>
	</div>	
</div>
	
	
	
<div class="trailer_wrapper_mobile">
	<div class="trailer_text_mobile">
		<div class="trailer_text_title_mobile">
		HOME in the City
		</div>
		<div class="trailer_text_text_mobile">
		<p>What does Home mean to you.<br>
			Challenged people at 6 different cities last year.</p>
		<p>How could we see places as Home in the city where we are.</p>
		<p>Now, here we are in London where is for all strangers.</p>
		</div>	
	</div>
	<div class="trailer_mobile">
		<video width="100%" autoplay muted loop playsinline preload="yes">
			<source src="wp-admin/IMAGES/Trailer I_SD.mp4" type="video/mp4">
			<source src="wp-admin/IMAGES/Trailer I-Apple Devices.m4v" type="video/mp4">
		</video>
	</div>
</div>

<!--Bottom space-->	
	<div class="bottom_wrapper">
		<div class="bottom_1">
			Tell me your Story, we’ll show how you are Special.<br>For all Out Of Our Sights, OOOS film.
		</div>
		<div class="bottom_2">
			<a href="https://www.instagram.com/ooos_business/"><img src="wp-admin/IMAGES/mail_122991.png" width="90rem" height="90rem" alt="" >
			</a>
		</div>
		<div class="bottom_3">
			Business Contact
		</div>	
	</div>
</body>
	
<footer>
	<div class="copyright">Copyright (c) <?php echo date ('2017-Y');?> OOOS All Rights Reserved.</div>
</footer>

</html>
