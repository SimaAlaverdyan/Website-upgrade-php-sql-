<?php

$link = mysqli_connect('localhost', 'root', 'root', 'shop');

if ($link) {
	$sql = "SELECT * FROM `products`";

	$result = mysqli_query($link, $sql);
} else {
	echo "ERROR!!";
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>

<body>
	<main class="mmm">
		<div class="snow">
			<div class="snow1"></div>
			<div class="snow2"></div>
			<div class="snow3"></div>
		</div>
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
		<div class="content">
			<?php
			while ($r_table = mysqli_fetch_assoc($result)) {
				?>
				<h1 class="productName"><?php echo $r_table['anvanum'] ?></h1>
				<div class="imgdiv">
					<img class="productImg" src="<?php echo $r_table['nkar'] ?>">
				</div>
				<h2 class="price"><?php echo "Price" . " " . $r_table['gin'] . ' ' . '$' ?></h2>
				<div class="adiv">
					<a class="readMore" href="products.php?id=<?php echo $r_table['id'] ?>">Read More</a>
				</div>
			<?php
			}
			?>
		</div>
		<!-- <div class="footer">
			<div class="snow4"></div>
		</div> -->
	</main>

</body>

</html>