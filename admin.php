<?php
echo "<pre>";
echo "</pre>";
$anvanum = $_POST['anvanum'];
$gin = $_POST['gin'];
$nkar = $_POST['nkar'];
$nkaragrutyun = $_POST['nkaragrutyun'];

$link = mysqli_connect('localhost', 'root', 'root', 'shop');

if ($link) {
	if ($_GET['action'] && $_GET['action'] == 'delete') {
		$id = $_GET['id_delete'];
		$sql_delete = "DELETE FROM `products` WHERE `id`='$id'";
		$result_delete = mysqli_query($link, $sql_delete );

		if ($result_delete) {
			echo "Item is deleted";
		}
		else
		{
			echo "noooooo";
		}
	}
	if (isset($_POST['add_product'])) {
		$sql = "INSERT INTO `products` (`anvanum`, `gin`, `nkar`, `detal`) VALUES ('$anvanum ', '$gin', '$nkar', '$nkaragrutyun')";

		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "Done!";
		}
		else{
			echo "no";
		}
	}
	
	
	$sql_table = "SELECT * FROM `products`";

	$result_table = mysqli_query($link, $sql_table);

} 
else {
	echo "ERROR!!";
}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
	
		<h1 class="admin">ADMINISTRATION</h1>
		<?php 
		include("menu.php");
		?>
	</div>
    <div class="contentadmin">
		<form class="form" method="post" action="admin.php">
			<input class="input1" type="text" name="anvanum" placeholder="Anvanum"><br>
			<input class="input2" type="number" name="gin" placeholder="Gin"><br>
			<input class="input3" type="text" name="nkar" placeholder="Nkar"><br>
			<input class="input4" name="nkaragrutyun" placeholder="Nkaragrutyun">
			<input class="input5" type="submit" name="add_product" value="Add Product"><br>
		</form>
		<div class="tabl">
			<table class="tbl">
				<?php 
				while ($r = mysqli_fetch_assoc($result_table)) {
					?>
					<tr>
						<td class="td1"><?php echo $r["id"]?></td>
						<td class="td2"><?php echo $r["anvanum"]?></td>
						<td class="td3"><a href="admin.php?action=delete&id_delete=<?php echo $r['id'] ?>">delete</a></td>
						<td class="td4"><a href="update.php?id=<?php echo $r['id'] ?>">update</a></td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
<div class="footer"></div>
</body>

</html>








