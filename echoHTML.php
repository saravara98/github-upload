<html>
	<body>
		<?php
		function echoHead($cssFile)
		{
			echo'
			<!DOCTYPE html>
			<html>
			<head> 
			<link rel="stylesheet" type="text/css" href=' .$cssFile. '">
			</head>
			';
		}

		function echoHeader($title)
		{
			echo' <h1> '.$title.'</h1>';
			echo'';
		}

		function echofooter()
		{
			echo '<h6>&copy; Saranya Varanasi' .date("Y"). '</h6>';
			echo '<h6><a href=mailto:coffee@gmail.com>Contact </a> for more information';
		}
		?>
		
	</body>
</html>

