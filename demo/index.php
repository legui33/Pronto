<?
	$isPronto = ($_GET["pronto"] == "true");
	
	$page_title = "Home Page &middot; Pronto Demo";
	
	// Only output on full page loads
	if (!$isPronto) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    	
		<title><?=$page_title?></title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet" type="text/css">
		<link href="http://www.benplum.com/css/demo.css" rel="stylesheet" type="text/css" media="all" />
		
		<!--[if LTE IE 8]>
			<link href="http://www.benplum.com/css/demo.ie.css" rel="stylesheet" type="text/css" media="all" />
		<![endif]-->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://www.benplum.com/js/demo.js"></script>
		
		<script src="../jquery.fs.pronto.min.js"></script>
		<script src="js/main.js"></script>
		
		<style>
		</style>
		
		<script>
		</script>
	</head>
	<body class="gridlock demo">
		<h1>Site Title</h1>
		<nav>
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
		</nav>
		<div id="pronto">
<?
	}
	// END: Only output on full page loads
?>
			
			<?
				// Always output
				if ($isPronto) {
					// If pronto request, save content to buffer
					ob_start();
				}
			?>
			<h2>Home Page</h2>
			<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper.</p>
			<p>Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
			<p>Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
			<p>Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			<?
				if ($isPronto) {
					// If pronto request, return json object with page pieces
					$page_content = ob_get_clean();
					die(json_encode(array(
						"title" => $page_title,
						"content" => $page_content
					)));
				}
				// END: Always output
			?>
				
<?			
	// Only output on full page loads
	if (!$isPronto) {
?>	
		</div>	
	</body>
</html>
<?
	}
	// END: Only output on full page loads
?>