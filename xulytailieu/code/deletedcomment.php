<?php
if (isset($_GET['cmt'])) {
	$id = $_GET['cmt'];
	$dcm = $_GET['dcm'];
	$connect = mysqli_connect('mysql:host=sql210.epizy.com; port=3306; dbname=epiz_33123295_library', 'epiz_33123295', 'hfXtdfiDvG',) or die("Connect faild");
	mysqli_set_charset($connect, 'utf8');

	$sql = " delete from comment where id = '$id' ";
	$result = mysqli_query($connect, $sql) or die("Sai rồi");
	mysqli_close($connect);
	header('location: ../giaodien/HienThiVanBan.php?id=' . $dcm . '');
}
