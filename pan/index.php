<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="logo_pan.png">
	<link rel=stylesheet href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Portail des Antiquités Numériques</title>
</head>
<header>
	<?php include 'header.php'; ?>
</header>

<body>
	<h2>"La bibliothèque des ressources numériques sur l'Antiquité"</h2>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- barre de recherche -->
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Rechercher une ressource"
						aria-label="Rechercher une ressource" aria-describedby="button-search">
					<button class="btn btn-outline-secondary" type="button" id="button-search">Rechercher</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4 mb-3 sm-2" >
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Carte 1</h5>
						<p class="card-text">Description de la carte 1.</p>
						<a href="#" class="btn btn-primary">Voir le catalogue</a>
					</div>
				</div>
			</div>
			<div class="col-4  mb-3 sm-2">
				<div class="card" style="background-color: #0e5194;">
					<div class="card-body">
						<h5 class="card-title">Carte 2</h5>
						<p class="card-text">Description de la carte 2.</p>
					</div>
				</div>
			</div>
			<div class="col-4  mb-3 sm-2">
				<div class="card" style=" background-color: #c16d07;">
					<div class="card-body">
						<h5 class="card-title">Carte 3</h5>
						<p class="card-text">Description de la carte 3.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8" id="col5">
				<!-- carrousel -->
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
							class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
							aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
							aria-label="Slide 3"></button>
					</div>

					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="4000">
							<img src="image chat.webp" class="d-block w-100" alt="Slide 1">
						</div>

						<div class="carousel-item" data-bs-interval="5000">
							<img src="rome.jpg" class="d-block w-100" alt="Slide 2">
						</div>

						<div class="carousel-item" data-bs-interval="4000">
							<img src="senat.jpg" class="d-block w-100" alt="Slide 3">
						</div>

					</div>
				</div>
			</div>
			<div class="col-4">
				col-4

			</div>
		</div>
	</div>


	<!--zone de test -->
	


	<!-- pour les animations -->
	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<!--bootstrap js -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>