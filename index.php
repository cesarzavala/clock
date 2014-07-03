<!DOCTYPE html>
<?php

	error_reporting(E_ALL);

	date_default_timezone_set('America/New_York');
	$hour = (int)date('H');

	$imagePath = "http://making-the-internet.s3.amazonaws.com/";
	$imageMorning = "php-morning.png";
	$imageAfternoon = "php-afternoon.png";
 	$imageEvening = "php-evening.png";
	$imageNight = "php-night.png"; 


	if (($hour>=5) and ($hour<11)) {
		$image = $imageMorning;
		$class = "morning";
	} elseif (($hour>=11) and ($hour<16)) {
		$image = $imageAfternoon;
		$class = "afternoon";
	} elseif (($hour>=16) and ($hour<20)) {
		$image = $imageEvening;
		$class = "evening";
	} else { 
		$image = $imageNight; 
		$class = "night";
	}
?>
<html>
<head>
	<title>Clock - Cesar Zavala</title>
	<style>
		.morning {background-color: #865f86; }
		.afternoon {background-color: #2c87c8; }
		.evening {background-color: #c7b02f; }
		.night {background-color: #180629; }
	</style>
</head>
<body class="<?php echo $class ?>">
	<h1>Clock exercise</h1>
	<h2><?php echo $hour ?></h2>
	<img src="<?php echo $imagePath . $image ?>" alt="Background" >
</body>
</html>