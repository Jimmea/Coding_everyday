<?php 
session_start();
require_once'product.php';
$idProduct = $_GET['id'];
$newProduct = array();
// them vao mang

foreach ($product as $key => $value) {
	$newProduct[$value['id']] = $value;
}

// Kiem tra xem trong mang do da co gio hang chua hoac gio hang do trong
if (!isset($_SESSION['giohang']) || $_SESSION['giohang'] ==null) {
	$newProduct[$idProduct]['qty'] = 1;
	$_SESSION['giohang'][$idProduct] = $newProduct[$idProduct];
}else{
	// da ton tai gio hang va san pham do da co thi tang len 1
	if (array_key_exists($idProduct,$_SESSION['giohang'])){
		$_SESSION['giohang'][$idProduct]['qty'] +=1;
	}else{
		$newProduct[$idProduct]['qty'] = 1;
		$_SESSION['giohang'][$idProduct] = $newProduct[$idProduct];
	}
}
header("location: index.php");
 ?>