<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google API -->
	<meta name="google-signin-client_id" content="166145593733-e55n2qulup3q6kgmnmbgttqfvtg0voai.apps.googleusercontent.com.apps.googleusercontent.com">

	<title>Store - Dungeons</title>

	<!-- Embed Configs -->
	<meta property="og:title" content="Store - Dungeons" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://images.hdqwalls.com/wallpapers/destiny-2-season-of-arrivals-prophecy-dungeon-4k-0f.jpg" />
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.co.uk/">

	<meta name="og:description" content="The best place for Destiny 2 account recoveries, boosting and services.">
	<meta name="keywords" content="Destiny2, Recoveries, Services, Boosting, Hiring">
	<meta name="theme-color" content="#3D253D">

	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="example.co.uk">
	<meta property="twitter:url" content="https://example.co.uk">
	<meta name="twitter:title" content="example">
	<meta name="twitter:description" content="The best place for Destiny 2 account recoveries, boosting and services.">
	<meta name="twitter:image" content="https://images.hdqwalls.com/wallpapers/destiny-2-season-of-arrivals-prophecy-dungeon-4k-0f.jpg">

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


			<div class="mid">
				<div>

					<div class="abRow">
						<div class="abColumn">
							<div id="ux">
								<div class="aHeader3">Dungeons</div>
							</div>
							<div id="uxi">
								<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
							</div>
						</div>
					</div>

					<?php error_reporting(0);
					$item = $_GET['item'];
					if ($item == "1") {
						echo '
						<a href="?item=1">
						<div class="abRow">
							<div class="abColumn">
								<div id="ux">
									<div class="aHeader3">This is item 1</div>
								</div>
								<div id="uxi">
									<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
								</div>
							</div>
						</div>
					</a>
					';
					} elseif ($item == "2") {
						echo '
						<a href="?item=2">
						<div class="abRow">
						<div class="abColumn">
							<div id="ux">
								<div class="aHeader3">This is item 2</div>
							</div>
							<div id="uxi">
								<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
							</div>
						</div>
					</div>
					</a>
					';
					} elseif ($item == "3") {
						echo '
						<a href="?item=3">
						<div class="abRow">
						<div class="abColumn">
							<div id="ux">
								<div class="aHeader3">This is item 3</div>
							</div>
							<div id="uxi">
								<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
							</div>
						</div>
					</div>
					</a>
					';
					} else {
						echo '
						<a href="?item=1">
						<div class="abRow">
							<div class="abColumn">
								<div id="ux">
									<div class="aHeader3">This is item 1</div>
								</div>
								<div id="uxi">
									<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
								</div>
							</div>
						</div>
					</a>
					<a href="?item=2">
						<div class="abRow">
							<div class="abColumn">
								<div id="ux">
									<div class="aHeader3">This is item 2</div>
								</div>
								<div id="uxi">
									<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
								</div>
							</div>
						</div>
					</a>
					<a href="?item=3">
						<div class="abRow">
							<div class="abColumn">
								<div id="ux">
									<div class="aHeader3">This is item 3</div>
								</div>
								<div id="uxi">
									<span class="aText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
								</div>
							</div>
						</div>
					</a>
					';
					} ?>

					<?php require "_partials/gridx2.php"; ?>
					<!-- if media is =< 900px -->

				</div>
			</div>

			<?php require "_partials/footer.php"; ?>

		</div>
	</div>

	<script src="assets/js/currency-selector.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	<!-- <script src="https://cdn.surge-networks.co.uk/assets/javascript/SmoothScroll.js"></script> -->
	<noscript>Uh Oh! Sorry, it seems your web browser doesn't use JavaScript, This website won't work as normal. Please use another web browser or try again later...</noscript>

</body>