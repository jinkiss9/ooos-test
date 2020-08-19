<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Out Of Our Sight</title>

<link href="wp-admin/CSS/Film_Speicifc_Styles_All.css" rel="stylesheet" type="text/css">
<link href="wp-admin/CSS/OOOS_Main_Swiper.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.typekit.net/fzu8paz.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
	
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

	
<div class="Thumbnail_shot">
	<iframe width="100%" height="100%" src="https://www.youtube.com/embed/8dbHDjhNl0g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>	
	
	
	
<div class="title_text">Past in the Present, Seoul</div>
	
<div class="subtitle_text">
	<div class="subtitle_1">What does HOME mean to you Episode V</div>
	<div class="subtitle_2">‘Where to find HOME’ City symphony film project - Series I</div>
</div>
	
<div class="main_text_1">
	Epilogue,
	<br>
	Hometown during my absence.

</div>
	


	
<div class="main_text_2">

	
	I reckon, how would you introduce your hometown.
	<br><br><br>
	And where is your City?
	<br><br><br>
	
	**<br>
	
	The <a class="episode" href="#">Next Episode</a> is about Camden town, a journey of a kitten(temporary). We are starting a new series, ‘walking on your city(temporary)’.<br>
	
	The <a class="episode" href="Blog_ Manchester & Liverpool.html">Previous Episode</a> in Manchester, Re-born city and Liverpool, the City where Beatles formed.
	<br>
	Please follow our Youtube channel to support ‘Where to Find HOME’ City Symphony Project!<br><br>

</div>
	
<!-- after main text link and copyright -->	
	
<div class="bottom_link">
	<div class="bottom_link_1"><a href="#"><img src="wp-admin/IMAGES/sharethis-logo.png" alt=""></a></div>
	<div class="bottom_link_2"><a href="https://www.youtube.com/channel/UCGqNZCyAZNwFixuwRCU6RhA"><img src="wp-admin/IMAGES/youtube-play-button.png" alt=""></a></div>
</div>	
</body>
<footer>
	
	<div class="copyright">Copyright (c) <?php echo date ('2017-Y');?> OOOS All Rights Reserved.</div>
	
</footer>
</html>