<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Klas Eskilson</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css" media="all">
		<link href='http://fonts.googleapis.com/css?family=Arvo|Quicksand:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container-fluid" id="main">
			<section id="intro" class="background">
				<p>
					Hej! Jag heter Klas Eskilson. Ibland gör jag saker på nätet.
				</p>
				<p class="clearfix">
					Om du vill nå mig så gör du det lättast på
					<a href="mailto:hej@klaseskilson.se" target="_blank" title="Maila mig!">hej@klaseskilson.se</a> eller
					på <a href="http://twitter.com/eskilicious" target="_blank" title="Titta på Twitter då!">@Eskilicious</a>.
				</p>
				<p class="bottom hidden-phone">
					<a href="#om" id="continue">Fortsätt <i class="icon-hand-down"></i></a>
				</p>
			</section> <!-- #intro -->
			<section id="content">
				<h2 id="about">
					Om mig<a name="om"></a>
				</h2>
				<div class="row-fluid">
					<div class="span8">
						<p>
							Just nu läser jag till <a href="http://medieteknik.nu">civilingenjör
							i medieteknik</a> på Linköpings Universitet i Norrköping.
						</p>
						<p>
							Jag finns på diverse ställen på nätet, bland annat på
							<a href="http://twitter.com/eskilicous"><i class="icon-comment"></i> twitter</a>,
							<a href="http://flickr.com/klaseskilson"><i class="icon-camera"></i> flickr</a> och
							<a href="http://github.com/klaseskilson"><i class="icon-edit"></i> github</a>.
						</p>
						<p>
							Det senaste jag gjort, eller varit med i, här på nätet är
							<a href="http://sommansägerinorrköping.nu">sommansägerinorrköping.nu</a>,
							<a href="http://isandediskant.nu">Isande diskant</a>,
							<a href="http://lithekoll.nu">LiTHekoll</a> och
							<a href="http://femtjugo.se">520</a>.
						</p>
					</div>
					<div class="span4">
						<p>
							<img src="img/klas<?php echo mt_rand(1,1); ?>.jpg" alt="Klas Eskilson" />
						</p>
					</div>
				</div>
			</section> <!-- #info -->
			<section id="footer" class="wrapper">
				<div class="row-fluid">
					<div class="span4">
						<p>
							Maila mig på <a href="mailto:hej@klaseskilson.se" target="_blank" title="Maila mig!">hej@klaseskilson.se</a>.
						</p>
					</div>
					<div class="span4 offset4">
						<p>
							På den här sidan har jag använt mig av <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>.
						</p>
					</div>
				</div>
			</section> <!-- #footer -->
		</div> <!-- #main -->

		<!-- Ladda in jquery och bootstrap -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
		<script src="js/klasse.js"></script>
	</body>
</html>
