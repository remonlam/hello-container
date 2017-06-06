<html>
<head>
	<title>Hello there!</title>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#picture {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="picture" src="containers.gif" />
	<h1><?php echo "Hello ".($_ENV["NAME"]?$_ENV["NAME"]:"I'm a container")."!"; ?></h1>
	<?php if($_ENV["HOSTNAME"]) {?><h3>My container id is: <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
</body>
</html>
