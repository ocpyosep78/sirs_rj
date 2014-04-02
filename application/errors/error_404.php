<?php
	$title = (ENVIRONMENT == 'development') ? 'Dbase-Error' : '-error-';
	$class = (ENVIRONMENT == 'development') ? 'show' : 'hid';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/error.css">
</head>

<body>
	<div id="container" class='<?php echo $class; ?>'>
		<h1><?php echo $heading; ?></h1>
		<span><?php echo $message; ?></span>
	</div>
</body>
</html>