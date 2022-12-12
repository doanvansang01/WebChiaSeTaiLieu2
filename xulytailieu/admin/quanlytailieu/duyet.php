
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$conn = mysqli_connect('mysql:host=sql210.epizy.com; port=3306; dbname=epiz_33123295_library', 'epiz_33123295', 'hfXtdfiDvG',) or die("Connect faild");
	mysqli_set_charset($conn, 'utf8');

	$update_at = date("Y-m-d H:i:s");
	$sql = "update document set status = '1', update_at='$update_at' where id = '$id' ";
	$result = mysqli_query($conn, $sql) or die("không có kết quả trả về!");

	mysqli_close($conn);
	header("location:quanlytailieu.php");
} else {
	echo "Không tồn tại id!";
}




?>
