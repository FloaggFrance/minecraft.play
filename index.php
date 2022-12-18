<?php
// header("Content-type: text/plain");
//Get the status and decode the JSON
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/funcraft.fr'));

//Show the version
// var_dump($status);
// die();

$gamePlayers = $status->players;
?>
<!DOCTYPE html>
<html>
<head>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body>
	<nav>
		<div class="contenaire">
			<div class="menu-website">
				<ul>
					<li><a href="#">Acceuil</a></li>
					<li><a href="#">Premium</a></li>
					<li><a href="#">Players</a></li>
				</ul>
			</div>
			<div class="minecraft-logo">
				<img src="./minecraft.png">
			</div>
			<div class="menu-website">
				<ul>
					<li><a href="https://works.floagg.org/license.pdf">License</a></li>
					<li><a href="#">Dons</a></li>
					<li><a href="#playing" class="button">Jouer</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="first-view">
		<div class="contenaire content">
			<div>
				<span class="title-webserv">
					<h1>Minecraft PVP</h1>
					<p>Minecraft PVP est un serveur PVP faction. Nous proposons une aventure exclusive sur Minecraft ! </p>
				</span>
				<div class="button">
					<a href="#playing" class="button">
						Jouer !
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="seconde-view">
		<div class="contenaire">
			<div class="while_">

				<div class="element">
					<div class="content">
						<span class="number">minecraft.play</span>
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
					<h2>Server Information</h2>
				</span>
			</div>
			<div class="content">
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet magna vehicula nulla lobortis hendrerit. Proin tellus ligula, pulvinar non consequat vel, vestibulum non augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi tristique malesuada enim quis pulvinar. Morbi consectetur ut felis sit amet finibus. Etiam auctor, arcu at pellentesque hendrerit, sem nulla volutpat risus, eget ornare est orci ac ex. In hendrerit a arcu at bibendum.
				</p>
				<p>
				Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ut aliquet ligula, sit amet finibus enim. Vivamus sit amet nisl et urna tempus tempor vel eu augue. Vivamus posuere pellentesque orci, sed pellentesque odio dictum non. Praesent semper pulvinar erat, sed consequat odio. Cras iaculis velit volutpat sagittis tempus. Sed sed fermentum enim.
				</p>
				<p>
				Pellentesque ac tortor a nibh cursus tempus eget et diam. Quisque nisl libero, vehicula eu pharetra pharetra, rhoncus ut lacus. Suspendisse faucibus eros in ligula aliquam vulputate. Donec sollicitudin sollicitudin metus non pretium. Aenean tempus est a ante eleifend, quis commodo ante elementum. Integer et commodo lectus. Curabitur justo felis, tempor vitae iaculis interdum, condimentum sit amet ipsum.
				</p>
			</div>
		</div>
	</section>
	<section id="playing" class="fow-view">
		<div class="contenaire">
			<div class="flex">
				<div class="text">
					<h2>Jouer maintenant</h2>
					<p>Pellentesque ac tortor a nibh cursus tempus eget et diam. Quisque nisl libero, vehicula eu pharetra pharetra, rhoncus ut lacus. Suspendisse faucibus eros in ligula aliquam vulputate. Donec sollicitudin sollicitudin metus non pretium. Aenean tempus est a ante eleifend, quis commodo ante elementum. Integer et commodo lectus. Curabitur justo felis, tempor vitae iaculis interdum, condimentum sit amet ipsum. </p>
				</div>
				<img src="./serveur.png">
			</div>
		</div>
	</section>
</body>
</html>