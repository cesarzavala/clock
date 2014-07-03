
<?php
	error_reporting(E_ALL);

	$imagePath = "http://making-the-internet.s3.amazonaws.com/";
	$imagePrefix = "php-";
	$imageSuffix = ".png";


	function dayPart($timezone = 'America/New_York') {
		date_default_timezone_set('America/New_York');
		$hour = (int)date('H');

		if (($hour>=5) and ($hour<11)) {
			$class = "morning";
		} elseif (($hour>=11) and ($hour<16)) {
			$class = "afternoon";
		} elseif (($hour>=16) and ($hour<20)) {
			$class = "evening";
		} else { 
			$class = "night";
		}
		return $class;
	} //function dayPart

	$image = $imagePath . $imagePrefix . dayPart() . $imageSuffix;


?>