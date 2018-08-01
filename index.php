<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>Responsive Sidebar Navigation | CodyHouse</title>
</head>
<body>
	<header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>

		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li class="has-children account">
					<a href="#0">
						<img src="img/cd-avatar.png" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Main</li>
				<li class="has-children overview ">
					<a href="#0">Shop</a>
					<ul>
						<li><a href="add.php">Add items</a></li>
						<li><a href="edit.php">Edit Items</a></li>
						<li><a href="delete.php">Delete Items</a></li>
					</ul>
				</li>
				<li class="has-children notifications active">
					<a href="#0">Event Managment<span class="count">3</span></a>
				</li>
                <li class="has-children overview ">
					<a href="#0">Order Details</a>
					<ul>
						<li><a href="product.html">Womens</a></li>
						<li><a href="product.html">Mens</a></li>
						<li><a href="product.html">Kids</a></li>
					</ul>
				</li>
			</ul>

		</nav>

		<div class="content-wrapper">
			<h1>Welcome to the Essence Dashboard</h1>
			
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
