<?php require('newquote.php'); ?>

<!DOCTYPE html>
<html>
<head>

	<title>Rupert Dudeney</title>
	<meta charset="utf-8">
    
    <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>

	<div class="container">

		<h1>Rupert Dudeney</h1>

		<img src='images/09182018headshot.jpg' alt='Rupert Dudeney'>

		<h2>About Me</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</p>

		<h2>Random Quote</h2>
		<blockquote>
			<?php
                switch ($quote) {
            case 0:
                echo "Long days journey";
                break;
            case 1:
                echo "Into night";
                break;
            case 2:
                echo "And so forth";
                break;
            }
            ?>	
        </blockquote>

	</div>

</body>
</html>
