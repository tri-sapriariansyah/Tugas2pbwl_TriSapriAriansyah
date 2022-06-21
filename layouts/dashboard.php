<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo URL; ?>layouts/assets/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php echo URL; ?>/layouts/assets/css/bootstrap.css">
	<title>UINSU Shop - Dashboard</title>
</head>

<body>
	<main>
		<header>
			<h2>UINSU Shop</h2>
		</header>
		<nav>
			<ul>
				<li><a href="<?php echo URL; ?>">Home</a></li>
				<li><a href="<?php echo URL; ?>/golongan">Kategori</a></li>
				<li><a href="<?php echo URL; ?>/produk">Produk</a></li>
				<li><a href="<?php echo URL; ?>/order">order</a></li>
				<li><a href="<?php echo URL; ?>/login">Login</a></li>
			</ul>
		</nav>

		<section>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</section>

		<footer>
			copyright &copy; 2022
		</footer>

	</main>
</body>

</html>