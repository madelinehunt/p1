<?php
require('quotes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nathan Hunt</title>
	<meta charset="utf-8">

	<link href='/local.css' rel='stylesheet'>

</head>
<body>
	<div id="roundrect-container">
		<div id="intro">
		  <h1>Nathan Hunt</h1>
		</div>

		<div id="photos">
			<img src="img/IMG_0089.JPG" alt="an image of Nathan Hunt"/>
		</div>

		<div id="about-me">
			<h2>About Me</h2>
				<p>Nathan Hunt is a Lab Manager for a Psychology lab at Harvard. In his spare time, he takes Computer Science classes through Harvard Extension School. </p><p>He does not like cats, but he does tolerate them sometimes.</p>
		</div>

		<div id="quote">
			<h2>Random Quote:</h2>
			<div><blockquote><?php echo $q; ?></blockquote></div>
			<div id="attribution"><b>—<?php echo $a; ?></b></div>
		</div>
</div>
</body>
