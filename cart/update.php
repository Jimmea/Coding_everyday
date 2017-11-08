<?php 
session_start();
// kiem tra xem co ton tai nut submit khong
if (isset($_POST['btnUpdate'])) {
	foreach ($_POST['qty'] as $key => $value) {
		if ($_POST['qty'] <0) {
			unset($_SESSION['giohang'][$key]);
		}else{
			// cap nhat gia tri cua so luong trong gio hang
			$_SESSION['giohang'][$key]['qty'] = $value;
		}
	}
	header("location:viewcart.php");
}


 ?>