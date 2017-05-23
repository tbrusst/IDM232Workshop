<?php

  include('connect.inc.php');
  // include('arrays.php');

  // Step 2: Preform Database Query
  $query = "SELECT * FROM cars";
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

 ?>





<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport"
		content="initial-scale=1.0,
		width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<meta charset="UTF-8">
		<title>Sportscar Application Home</title>
	</head>
	
	<body>

		<h1 class="greet"> Pick Your <br> Luxury Car </h1>
		<h1 class="greet_big"> Pick Your Luxury Car </h1>

		<div class="wrapper">
		
			
			<div>
				<?php 
				
					while ($row = mysqli_fetch_array($result)) {
					$build = '<a href="brand.php?brand='.$row['brand'].'">' . "<figure class='shine'>" . '<img src="'.$row['brand_picture'].'">' . "<figcaption>" . $row['brand']  . "</figcaption>" . "</figure>";
					echo $build;
				};
				?>
 <!-- 					<a href="brand.php?brand=">
						<figure class="shine">
							<img src="graphics/audi.png" alt="Audi Link">
							<figcaption> Audi </figcaption>
						</figure>
					</a> -->
			</div>
			

<!-- 			<div>
				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/aston.png" alt="Aston Link" width="282" height="42">
						<figcaption> Aston Martin </figcaption>
					</figure>
				</a>
			</div>

			<div>
				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/bmw.png" alt="BMW Link" width="282" height="42">
						<figcaption> BMW </figcaption>
					</figure>
				</a>
			</div>

			<div>
				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/ferrari.png" alt="Ferrari Link" width="282" height="42">
						<figcaption> Ferrari </figcaption>
					</figure>
				</a>
			</div>

			<div>
				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/lamb.png" alt="Lamb Link" width="282" height="42">
						<figcaption> Lamborghini </figcaption>
					</figure>
				</a>
			</div>

			<div>
				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/mercedes.png" alt="Mercedes Link" width="282" height="42">
						<figcaption> Mercedes </figcaption>
					</figure>
				</a>
			</div>

			<div>

				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/porsche.png" alt="Porsche Link" width="282" height="42">
						<figcaption> Porsche </figcaption>
					</figure>
				</a>
			</div>

			<div>
				<a href="brand.php?brand=">
					<figure class="shine">
						<img src="graphics/tesla.png" alt="Tesla Link" width="282" height="42">
						<figcaption> Tesla </figcaption>
					</figure>
				</a>
			</div>

		</div>	 -->

	</body>
</html>