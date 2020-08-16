<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', 'root', 'shop');
$sql = "SELECT * FROM `products` WHERE `id` = '$id'";
$result = mysqli_query($link, $sql);
$r = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>

<body class="updateBody">
	<div class="header">

		<h1 class="admin">ADMINISTRATION</h1>
		<?php
		include("menu.php");
		?>
	</div>
	<div class="contentadmin">
		<form class="form1" method="post">
			<input class="input1" value="<?php echo $r['id'] ?>" type="hidden" name="id" placeholder="id"><br>
			<input class="input2" value="<?php echo $r['anvanum'] ?>" type="text" name="anvanum" placeholder="Anvanum"><br>
			<input class="input3" value="<?php echo $r['gin'] ?>" type="number" name="gin" placeholder="Gin"><br>
			<input class="input4" value="<?php echo $r['nkar'] ?>" type="text" name="nkar" placeholder="Nkar"><br>
			<input class="input5" value="<?php echo $r['detal'] ?>" name="nkaragrutyun" placeholder="Nkaragrutyun">
			<input class="input6" type="submit" name="update" value="Update"><br>
		</form>
		
	</div>
</body>

</html>


<?php

if ($link) {
	if (isset($_POST['update'])) {
		$anvanum = $_POST['anvanum'];
		$gin = $_POST['gin'];
		$nkar = $_POST['nkar'];
		$nkaragrutyun = $_POST['nkaragrutyun'];
		$sql_update = "UPDATE `products` SET `anvanum`='" . $anvanum . "',`gin`='" . $gin . "',`nkar`='" . $nkar . "',`detal`= '" . $nkaragrutyun . "' WHERE `id` = '" . $id . "'";
		$result_update = mysqli_query($link, $sql_update);

		if ($result_update) {
			echo "<h1 class='item'>Item is changed</h1>";
		} else {
			echo "noooooo";
		}
	}
} else {
	echo "errroorr";
}
?>