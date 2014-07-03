<?php require('logic.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clock - Cesar Zavala</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="<?php echo dayPart() ?>">
	<h1 class="<?php echo dayPart() ?>">Beautiful <?php echo dayPart() ?></h1>
	<img src="<?php echo $image ?>" alt="Background" >
</body>
</html>