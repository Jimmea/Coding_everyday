<?php 
session_start();
$id =$_GET['id'];
// kiem tra xem o so luong trong gio hang co gia tri am khong.
if ($_SESSION['giohang'][$id]['qty'] <=0) {
	unset($_SESSION['giohang'][$id]);
}else{
	$_SESSION['giohang'][$id]['qty'] -=1;

}
header("location:viewcart.php");

 ?>