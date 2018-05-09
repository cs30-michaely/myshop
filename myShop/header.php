<head>
	<title>Shop Home</title>
	<link rel='stylesheet' type="text/css" href="stylesheet.css">
</head>

<body>
	<!--  Top navigation bar-->
	<header>
		<a><img id='logo' src="img/desktop2.0.png"></a>

		<ul id="bar">
			<li class="sections <?php if ($page == 'home') {echo 'active';}?>"><a href="index.php">Home</a></li>
			<li class="sections <?php if ($page == 'computers') {echo 'active';}?>"><a href="#">Computers</a></li>
			<li class="sections <?php if ($page == 'software') {echo 'active';}?>"><a href="#">Software</a></li>
			<li class="sections <?php if ($page == 'login') {echo 'active';}?>"><a href="login.html">Login</a></li>
			<li class="sections <?php if ($page == 'contact') {echo 'active';}?>"><a href="#">Contact Us</a></li>
		</ul>

	</header>