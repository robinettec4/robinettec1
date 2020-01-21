<?php
	$Name1 = "Connor";
	$Name2 = "Robinette";
	$Age = "23";
	$Hobby = "Airsoft";
	$Email = "robinettec1@nku.edu";
	$Major = "Computer Science";
	$Year = "Senior";
	$Excuse = "fill the rest of the paragraph because I am out of things to say about myself.";
	$Image = "4.jpg";
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<HTML>
	<div class="jumbotron">
		<h1 class="display-4"><?php echo $Name1 . " " . $Name2 ?></h1>
		<p class="lead"><?php echo "I am a " . $Major . " " . $Year ?></p>
		<hr class="my-4">
		<p><?php echo nl2br("I am " . $Age . "years old.\r\nI enjoy " . $Hobby . " in my free time with my friends.\r\nThis final line is to " . $Excuse); ?></p>
		<p><br></p>
		<p><?php echo "I don't tend to have many expectations before classes. I guess my biggest expectation at the moment would be learning php since that's what we've started." ?></p>
		<a class="btn btn-primary btn-lg" href="#" role="button"><?php echo $Email ?></a>
		<?php echo '<img src="'. $Image .'" alt="error" />'; ?>
	</div>
</HTML>