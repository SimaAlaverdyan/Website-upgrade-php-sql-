<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', 'root', 'shop');
$sql = "SELECT * FROM `products` WHERE `id` = '$id'";
$result = mysqli_query($link, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>Products</title>
</head>

<body>
	<main class="mmm">
		<div class="snow1"></div>
		<div class="snow2"></div>
		<div class="snow3"></div>
		<div class="header">
			<div class="first">
				<div class="logo1">
					<img src="logo2.png">
				</div>
				<div class="phone">
					<p>Phone 1</p>
					<p>Phone 2</p>
				</div>
			</div>
			<?php
			include("menu.php");
			?>
		</div>
		<div class="contentP">
			<div class="Pdiv1">
				<h1 class="Pname"><?php echo $r['anvanum'] ?></h1>
				<img class="Pimg" src=<?php echo $r['nkar'] ?>>
			</div>
			<div class="Pdiv2">
				<h1 class="Ph1">Detals</h1>
				<p class="Pp2"><?php echo $r['detal'] ?></p>
				<h1 class="Ph11">Price</h1>
				<p class="Pp1"><?php echo $r['gin'] . "$" ?></p>
			</div>
		</div>
	</main>
	<div class="footer"></div>
</body>

</html>