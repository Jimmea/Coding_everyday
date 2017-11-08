<?php 
session_start();
require_once'product.php';
$total = 0;
// kiem tra xem ton tai gio hang khong va khac trong khogn
if (isset($_SESSION['giohang']) && $_SESSION['giohang'] !=null) {
	foreach ($_SESSION['giohang'] as $val) {
		$total += $val['qty'];
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cua hang online</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<h1>Ban da mua <a href="viewcart.php"><?php echo $total;?></a> san pham</h1>
	<?php foreach ($product as $value) { ?>
	<h2>San pham <?php echo $value['name'] ?></h2>
	<h4>Gia <?php echo $value['price'] ?></h4>
	<strong><a href="insert_cart.php?id=<?php echo $value['id']; ?>"> Mua ngay</a></strong>
	<?php } ?>
	
</body>
</html>