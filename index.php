<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Store - Home</title>

	<!-- Embed Configs -->
	<meta property="og:title" content="Store" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://wallpaperaccess.com/full/436659.jpg" />
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.co.uk/">

	<meta name="og:description" content="The best place for Destiny 2 account recoveries, boosting and services.">
	<meta name="keywords" content="Destiny2, Recoveries, Services, Boosting, Hiring">
	<meta name="theme-color" content="#161B2F">

	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="example.co.uk">
	<meta property="twitter:url" content="https://example.co.uk">
	<meta name="twitter:title" content="example">
	<meta name="twitter:description" content="The best place for Destiny 2 account recoveries, boosting and services.">
	<meta name="twitter:image" content="https://wallpaperaccess.com/full/436659.jpg">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/viewports.css">
	<link rel="stylesheet" href="assets/css/buttons.css">
	<link rel="stylesheet" href="https://surge-networks.co.uk/assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/curr-selector.css">
	<!-- <link rel="stylesheet" href="assets/css/nav.css"> -->

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
</head>

<img class="imageFadeToBottom bg" src="images/nessus1.png">

<body class="animation">

	<div class="main">
		<div class="container">

			<?php require "./modules/fadeIn.php"; ?>
			<?php require "./modules/currencySelection.php" ?>
			<?php require "_partials/navbar.php"; ?>
			
			<div class="header">
				<div class="headerLeft border-box">
					<img id="imgHolder1" class="animation">
				</div>
				<div class="headerRight border-box">
					<img id="imgHolder2" class="animation">
				</div>
				<div class="headerMiddle">
					<div id="headText">
						Get the <span id="cycle">weapon</span> you need to crush the competition
					</div>
				</div>
			</div>

			<div class="mid">
				<div>

					<div class="abRow">
						<div class="abColumn aimg7">
							<div id="ux">
								<div class="aHeader3">Seasonal Content</div>
							</div>
							<div id="uxi">
								<a class="abButton" href="seasonal-content.php">
									<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
								</a>
							</div>
						</div>
					</div>

					<?php require "_partials/navgridx2.php"; ?> <!-- if media is =< 900px -->
					<?php require "_partials/navgridx1.php"; ?> <!-- if media is =< 425px -->

					<div class="row">
						<div class="aColumn aimg1">
							<span class="aHeader1">Raids</span><br><br>
							<a class="button aButton1" href="raids.php">
								<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
							</a>
						</div>
						<div class="aColumn aimg2">
							<span class="aHeader2">Nightfalls</span><br><br>
							<a class="button aButton2" href="nightfalls.php">
								<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
							</a>
						</div>
						<div class="aColumn aimg3">
							<span class="aHeader1">Trials</span><br><br>
							<a class="button aButton3" href="trials.php">
								<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
							</a>
						</div>
					</div>

					<div class="row">
						<div class="aColumn aimg4">
							<span class="aHeader2">Dungeons</span><br><br>
							<a class="button aButton4" href="dungeons.php">
								<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
							</a>
						</div>
						<div class="aColumn aimg5">
							<span class="aHeader1">Exotics</span><br><br>
							<a class="button aButton5" href="exotics.php">
								<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
							</a>
						</div>
						<div class="aColumn aimg6">
							<span class="aHeader1">Quests</span><br><br>
							<a class="button aButton6" href="quests.php">
								<span class="aText">View<i style="padding-left: 6px;" class="fas fa-arrow-right"></i></span>
							</a>
						</div>
					</div>

				</div>
			</div>

			<?php require "_partials/footer.php"; ?>
			<?php require "_partials/footergridx3.php"; ?>
			<?php require "_partials/footergridx2.php"; ?>
			<?php require "_partials/footergridx1.php"; ?>

		</div>
	</div>

	<script src="assets/js/currency-selector.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- <script src="https://cdn.surge-networks.co.uk/assets/javascript/SmoothScroll.js"></script> -->
	<noscript>Uh Oh! Sorry, it seems your web browser doesn't use JavaScript, This website won't work as normal. Please use another web browser or try again later...</noscript>

</body>