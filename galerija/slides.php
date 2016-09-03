<?php 
session_start();

if(isset($_SESSION['login'])){
	$_SESSION['halid'] = 'zvjerka';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>

		<title>Sound Art Studio - Galerija slika</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="../stil.css">
		<script src="../skripte/script.js"></script>
		<META charset=utf-8>
		</HEAD>
		<BODY>
			
			<div id="zaglavlje">
				<h1>Sound Art Studio</h1>
				<div id="logo">
					<div id="kruzic"></div>
					<div id="linija"></div>
				</div>
			</div>

			<a class="skip-main" href="GlavniDioNovosti">Preskoči čitanje menija</a>
			<div id="meni">
				<ul>
					<li><a href="../index.php">Naslovnica</a></li>
					<li><a href="../stranice/omeni.php">O meni</a></li>
					<li><a href="../stranice/coveri.php">Coveri</a></li>
					<li><a href="#">Galerija</a></li>
					<li><a href="../stranice/kontakt.php">Kontakt</a></li>
				</ul>
			</div>
	
	</head>

<body>
<div id="galerija">
<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   3000,		// Length between transitions
					transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'slike/slika1.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika2.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika3.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika4.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika5.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika6.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika7.jpg', title : 'Lagana kafica'},
														{image : 'slike/slika8.jpg', title : 'Lagana kafica'},												
												]
					
				});
		    });
		    
		</script>
	
	<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			<a id="tray-button"><img id="tray-arrow" src="img/button-tray-up.png"/></a>
			
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>
	</div>

</body>
</html>
