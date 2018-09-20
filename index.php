<?php 
    // insert logic code
    require('newquote.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Rupert Dudeney</title>
	<meta charset="utf-8">
    
    <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
    
    <link href="css/main.css" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>
<body>

	<div class="container">

		<h1>Rupert Dudeney</h1>

		<img src='images/09182018headshot.jpg' alt='Rupert Dudeney'>

		<h2>About Me</h2>
		<p>
			My name is Rupert. I live in Boston and work in Quincy, MA. I currently work in Sales. I've completed a Graduate Certificate in Programming at HES and am continuing on with a Masters in Software Engineering. I have a passion for building things. I especially enjoy programming when a complicated application starts to work after many hours of hard work and struggle; that's a great feeling of accomplishment. I am familiar with Java and C programming languages, and look forward to developing my skills in Dynamic Web Development with this class.
		</p>

		<h2>Random Quote</h2>
		<blockquote>
			<?php
            
                // switch quotes depending on $quote value
                switch ($quote) {
                    case 0:
                        echo "When you come to a fork in the road, take it. - Yogi Berra";
                        break;
                    case 1:
                        echo "The journey of a thousand miles begins with one step. - Lao Tzu";
                        break;
                    case 2:
                        echo "Life is what happens when you are busy making other plans. - John Lennon";
                        break;
                }
            ?>	
        </blockquote>

	</div>

</body>
</html>
