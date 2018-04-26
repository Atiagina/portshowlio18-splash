<?php
/**
 * Template Name: front-page
 */
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SCCA WEB TEAM">
<style>
	@font-face {
	
	font-family: HalisR;
    src: url('<?php bloginfo('template_url');?>/fonts/HalisR-Medium.otf');
}
	
	@font-face {
	
	font-family: HalisRBold;
    src: url('<?php bloginfo('template_url');?>/fonts/HalisR-Bold.otf');
}
	
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
<link rel=" icon" href="pop_icon.ico" sizes="16x16 32x32" type="image/png">
	<title>SCCA Portshowlio 2018</title>
</head>

<body>
	

	<div class="backgrounddiv">
		
	<div class="infocontainer">
<div id="wrapper">
<div id="helper">
	<div class="yellowblock">
		<div class="logoblock">
			<img class="logo" src="<?php bloginfo('template_url');?>/img/pop_logo.svg" >
		</div>
		<div class="content">
		<div class="descriptionblock"> <p id='description'><?php the_field('description'); ?></p>
		</div>
		
		<div class="socialblock">
			<ul class="social">
					<li class="icons"><a href="<?php the_field('facebook_link'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook fa-2x black"></i></a></li>
					<li class="icons"><a href="<?php the_field('insta_link'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram fa-2x black"></i></a></li>
					<li class="icons"><a href="<?php the_field('twitter_link'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter fa-2x black"></i></a></li>
				</ul>
		</div>
		</div>
	</div>

	<div class="blockrow">
		<div class="date profesh">
			<h1>Professional Night</h1>
			<h3><?php the_field('day_1_date'); ?></h3>
			<h3 class="time"><?php the_field('day_1_time'); ?></h3>
		</div>
		<div class="scca">
			<img src="<?php bloginfo('template_url');?>/img/scca.svg" alt="scca">
		</div>
		</div>
		
		<div class="blockrow2">
		<div class="date family">
			<h1>Friends & Family Night</h1>
			<h3><?php the_field('day_2_date'); ?></h3>
			<h3 class="time"><?php the_field('day_2_time'); ?></h3>
		</div>
			<div class="address">
				
				<h4>1701 Broadway Ave Seattle, WA 98122</h4>
		</div>
		</div>
	</div>
		</div> <!-- end of wrapper -->

	</div>
	</div>
	<script>
	$(document).ready(function() {
		var videoRat = $('#bgvid').width()/$('#bgvid').height();
		var windowRat = $(window).width()/$(window).height();
			//console.log($('#bgvid').width()/$('#bgvid').height());
			//console.log($(window).width()/$(window).height());

			if (videoRat > windowRat) {
				console.log('>');
				 $("#bgvid").css("height", '100%');
			} else {
				console.log('<');
				$("#bgvid").css("width", '100%');
			}
	})
	$( window ).resize(function() {
		var videoRat = $('#bgvid').width()/$('#bgvid').height();
  	  	var windowRat = $(window).width()/$(window).height();
		//console.log($('#bgvid').width()/$('#bgvid').height());
		//console.log($(window).width()/$(window).height());

		  if ( videoRat > windowRat ) {
			 console.log('height100');
			 $("#bgvid").css("width", 'auto');
			  $("#bgvid").css("height", '100%');
		 } else {
			 console.log('width100');
			 $("#bgvid").css("height", 'auto');
			 $("#bgvid").css("width", '100%');
		 }

	});
	$(document).mousemove(function(e) {



		  //console.log(e.clientX/$(document).width(), " : ", e.clientY/$(document).height());

		  var max = 5
		  var min = -5
		  //var hper = 1-e.clientY/$(document).height();
		  var wper = e.clientX/$(document).width();
		  var xPer = (max-min)*wper+min;
		  //var yPer = (max-min)*hper+min;: ;
		  $(".container").css("transform", 'rotateY(' + xPer + 'deg ) translateZ( 75px )');
		  //console.log(xPer);

	})
	</script>


</body>
</html>
