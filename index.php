<?php
$ipServ = "";
//Get the status and decode the JSON
// EDITED YOU TEMPLATE
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/'.$ipServ));

$gamePlayers = $status->players;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- EDITED YOU TEMPLATE -->
	<title></title>
	<!-- EDITED YOU TEMPLATE -->

	<link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body>
	<nav>
		<div class="contenaire">
			<div class="menu-website">
				<ul>
					<!-- EDITED YOU TEMPLATE -->
					<li><a href="#">Acceuil</a></li>
					<li><a href="#">Premium</a></li>
					<li><a href="#">Players</a></li>
					<!-- EDITED YOU TEMPLATE -->
				</ul>
			</div>
			<div class="minecraft-logo">
				<!-- EDITED YOU TEMPLATE -->
				<img src="./minecraft.png">
				<!-- EDITED YOU TEMPLATE -->
			</div>
			<div class="menu-website">
				<ul>
					<!-- EDITED YOU TEMPLATE -->
					<li><a href="https://works.floagg.org/license.pdf">License</a></li>
					<li><a href="#">Dons</a></li>
					<li><a href="#playing" class="button">Jouer</a></li>
					<!-- EDITED YOU TEMPLATE -->
				</ul>
			</div>
		</div>
	</nav>
	<section class="first-view">
		<div class="contenaire content">
			<div>
				<span class="title-webserv">
					<!-- EDITED YOU TEMPLATE -->
					<h1>Minecraft PVP</h1>
					<!-- EDITED YOU TEMPLATE -->
					<!-- EDITED YOU TEMPLATE -->
					<p>Minecraft PVP est un serveur PVP faction. Nous proposons une aventure exclusive sur Minecraft ! </p>
					<!-- EDITED YOU TEMPLATE -->
				</span>
				<div class="button">
					<!-- EDITED YOU TEMPLATE -->
					<a href="#playing" class="button">Jouer !</a>
					<!-- EDITED YOU TEMPLATE -->
				</div>
			</div>
		</div>
	</section>
	<section class="seconde-view">
		<div class="contenaire">
			<div class="while_">

				<div class="element">
					<div class="content">
						<span class="number"><?= $ipServ ?></span>
					</div>
					<div class="desc">
						<span class="text">I.P</span>
					</div>
				</div>
				<div class="element">
					<div class="content">
						<span class="number"><?= $gamePlayers->online ?></span>
					</div>
					<div class="desc">
						<span class="text">En Ligne</span>
					</div>
				</div>

				<div class="element">
					<div class="content">
						<span class="number"><?= $gamePlayers->max ?></span>
					</div>
					<div class="desc">
						<span class="text">Max en Ligne</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="three-view">
		<div class="contenaire">
			<div class="header">
				<span class="title">
					<!-- EDITED YOU TEMPLATE -->
					<h2>Server Information</h2>
					<!-- EDITED YOU TEMPLATE -->
				</span>
			</div>
			<div class="content">
				<!-- EDITED YOU TEMPLATE -->
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet magna vehicula nulla lobortis hendrerit. Proin tellus ligula, pulvinar non consequat vel, vestibulum non augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi tristique malesuada enim quis pulvinar. Morbi consectetur ut felis sit amet finibus. Etiam auctor, arcu at pellentesque hendrerit, sem nulla volutpat risus, eget ornare est orci ac ex. In hendrerit a arcu at bibendum.
				</p>
				<p>
				Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ut aliquet ligula, sit amet finibus enim. Vivamus sit amet nisl et urna tempus tempor vel eu augue. Vivamus posuere pellentesque orci, sed pellentesque odio dictum non. Praesent semper pulvinar erat, sed consequat odio. Cras iaculis velit volutpat sagittis tempus. Sed sed fermentum enim.
				</p>
				<p>
				Pellentesque ac tortor a nibh cursus tempus eget et diam. Quisque nisl libero, vehicula eu pharetra pharetra, rhoncus ut lacus. Suspendisse faucibus eros in ligula aliquam vulputate. Donec sollicitudin sollicitudin metus non pretium. Aenean tempus est a ante eleifend, quis commodo ante elementum. Integer et commodo lectus. Curabitur justo felis, tempor vitae iaculis interdum, condimentum sit amet ipsum.
				</p>
				<!-- EDITED YOU TEMPLATE -->
			</div>
		</div>
	</section>
	<section id="playing" class="fow-view">
		<div class="contenaire">
			<div class="flex">
				<div class="text">
					<!-- EDITED YOU TEMPLATE -->
					<h2>Jouer maintenant</h2>
					<!-- EDITED YOU TEMPLATE -->
					<!-- EDITED YOU TEMPLATE -->
					<p>Pellentesque ac tortor a nibh cursus tempus eget et diam. Quisque nisl libero, vehicula eu pharetra pharetra, rhoncus ut lacus. Suspendisse faucibus eros in ligula aliquam vulputate. Donec sollicitudin sollicitudin metus non pretium. Aenean tempus est a ante eleifend, quis commodo ante elementum. Integer et commodo lectus. Curabitur justo felis, tempor vitae iaculis interdum, condimentum sit amet ipsum. </p>
					<!-- EDITED YOU TEMPLATE -->
				</div>
				<!-- EDITED YOU TEMPLATE -->
				<img src="./serveur.png">
				<!-- EDITED YOU TEMPLATE -->
			</div>
		</div>
	</section>
</body>
</html>