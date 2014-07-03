
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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clock - Cesar Zavala</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="<?php echo $class ?>">
	<h1 class="<?php echo $class ?>">Beautiful</h1>
	<img src="<?php echo $imagePath . $image ?>" alt="Background" >
</body>
</html>