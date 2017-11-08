<?php 
session_start();

$total_Money = 0;
 ?>
 <meta chartset="utf-8">
<?php 
	echo "<h2> San pham ban da mua </h2>";
	echo "<form action='update.php' method='POST' >";
	echo "<table border='1' style='width:600px'>";
	echo "<tr>";
	echo "<th> San pham</th>";
	echo "<th> Gia </th>";
	echo "<th> So luong </th>";
	echo "<th> Thanh tien</th>";
	echo "<th> Xoa</th>";
	echo "</tr>";
	foreach ($_SESSION['giohang'] as $lst) {
		echo "<tr>";
		echo "<td>".$lst['name']." </td>";
		echo "<td>".$lst['price']." </td>";
		echo "<td><input type='text' name='qty[".$lst['id']."]' value='".$lst['qty']."'></td>";
		echo "<td>".$lst['price'] * $lst['qty']." </td>";
		echo "<td><a href='delete.php?id=".$lst['id']."'> Xoa </a></td>";
		echo "</tr>";
	}
	foreach ($_SESSION['giohang'] as $value) {
		$total_Money +=($value['price']* $value['qty']);
	}
	echo "<tr>";
	echo "<th colspan='3' style='text-align:right'>Tong tien </th>";
	echo "<td colspan='2'>$total_Money</td>";
	echo "</tr>";
	echo "</table>";
	echo "<p>";
	echo "<input type='submit' name='btnUpdate' value='Cap nhat'/>";
	echo "<a href='index.php' >Mua tiep</a>";
	echo "</p>";
	echo "</form>";	
 ?>