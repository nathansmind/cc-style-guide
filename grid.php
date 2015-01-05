<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Design Server</title>
	<link rel="stylesheet" href="css/style.css">	
	<script src="js/script.js"></script>
</head>
<body class="icons">
	<?php include 'inc/header.php'; ?>

	<div class="wrapper">
		<h1>Desktop Grid</h1>
		<p>The Competitive Cyclist Grid is loosely based on a 12 column grid fixed in a 1000 pixel frame with 10 pixels of right and left padding.</p>
	</div>
	<div class="true-grid">
		<div class="column grid-12">Grid 12</div>
		
		<div class="column grid-6">Grid 6</div>
		<div class="column grid-6">Grid 6</div>

		<div class="column grid-5">Grid 5</div>
		<div class="column grid-7">Grid 7</div>

		<div class="column grid-4">Grid 4</div>
		<div class="column grid-8">Grid 8</div>
		
		<div class="column grid-3">Grid 3</div>
		<div class="column grid-9">Grid 9</div>

		<div class="column grid-2">Grid 2</div>
		<div class="column grid-10">Grid 10</div>
		
		<div class="column grid-1">Grid 1</div>
		<div class="column grid-11">Grid 11</div>
	</div>
		
	<div class="wrapper">
		<hr class="clear">
		<h1>Mobile Grid</h1>
		<p>Currently there isn't much of a grid for the mobile Competitive Cyclist site. Some elements use fixed widths and others user percentages. This causes problems for many screen sizes larger then the iPhone 5.</p>
	</div>	
	<div class="mobile-grid">
		<div class="column full">Full</div>
		
		<div class="column half">Half</div>
		<div class="column half">Half</div>
		
		<div class="column three8">Three Eighths</div>
		<div class="column five8">Five Eighths</div>
		
		<div class="column quarter">Quarter</div>
		<div class="column twothirds">Two Thirds</div>

		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
		<div class="column eighth">Eighth</div>
	</div>
	
</body>
</html>
