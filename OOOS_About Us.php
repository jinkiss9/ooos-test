<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta HTTP-EQUIV="refresh" CONTENT="60">
<!--<a HREF="javascript:history.go(0)">Click to refresh the page</a>-->
	
<title>Out Of Our Sight</title>

<link href="wp-admin/CSS/OOOS_About Us_Styles.css" rel="stylesheet" type="text/css">
<link href="wp-admin/CSS/OOOS_Main_Swiper.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.typekit.net/fzu8paz.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="wp-admin/CSS/OOOS_About Us_Styles.css?v=1" media="screen,print" rel="stylesheet" type="text/css">

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

<!--Centre Image-->
	
	<div class="cntre_image">
		<img src="wp-admin/IMAGES/youtube banner copy 2.png" alt="" style="width: 100%; height: auto;">
	</div>
	
	
<!--Bottom Text-->

<div class="bottom_wrapper">

	<div class="top_letter_main_wrapper">
	
		<div class="top_letter_1">
			WHAT WE DO
		</div>
	
		<div class="top_letter_2">
			We are aim to create aesthetic contents for<br>all strangers in the world.
		</div>
		
		<div class="top_letter_2_mobile">
			We are aim to create<br>aesthetic contents<br>for all strangers in the world.
		</div>
		
		<div class="top_letter_3">
			Fiction, Documentary and Promotion.
		</div>
		
		<div class="top_letter_3">
			Tell me your story, we will show how you are special.
		</div>
		
		<div class="top_letter_3_mobile">
			Fiction, Documentary and Promotion.
		</div>
		
		<div class="top_letter_3_mobile">
			Tell me your story,<br>we will show how you are special.
		</div>
		
	</div>
	
	<div class="bottom_letter_main_wrapper">
	
		<div class="bottom_letter_1">
			CONTACT
		</div>
		
		<div class="bottom_letter_2">
			<a href="https://www.instagram.com/ooos_business/"><img src="wp-admin/IMAGES/mail_122991.png" alt=""></a>
		</div>
		
		<div class="bottom_letter_3">
			Business, Art collaboration, Suggestions.. All Welcome!
		</div>
		
		<div class="bottom_letter_3_mobile">
			Business, Art collaboration,<br><br>Suggestions.. All Welcome!
		</div>
		
	</div>
	
</div>
</body>
	
<footer>
	<div class="copyright">Copyright (c) <?php echo date ('2017-Y');?> OOOS All Rights Reserved.</div>	
</footer>
</html>
