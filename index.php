<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<title>My Fine Wine</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Playball" rel="stylesheet">



</head>
<body>

	<div class="wrapper">

		<div class="hero">
			<img src="images/wine_image-07.jpg" alt="wine cellar">
		</div>

		<div class="content">

				<h1>Wines</h1>

				<div class="wines">
					<?php

						while ($row = mysqli_fetch_array($result)) {


						$build = '<img src="'.$row['img'].'">' . "<h1>" . "$row['name']" . "</h1>" . "<h2>" . "$row['score']" . "</h2>" . "<h2>" . "$row['price']" . "</h2>" . "<h2>" . "$row['year']" . "</h2>" . "<p>" . "$row['description']" . "</p>";


						echo $build;
					};
					?>





				</div>

		</div>

	</div>

</body>
</html>
