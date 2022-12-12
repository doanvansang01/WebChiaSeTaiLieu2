<?php

//code sửa
if (
	isset($_POST['id'])  && isset($_POST['hoten'])
	&& isset($_POST['date']) && isset($_POST['email'])
) {
	$id = $_POST['id'];
	$name = $_POST['hoten'];
	$date = $_POST['date'];
	$email = $_POST['email'];



	$connect = mysqli_connect('mysql:host=sql210.epizy.com; port=3306; dbname=epiz_33123295_library', 'epiz_33123295', 'hfXtdfiDvG',) or die("Connect faild");
	mysqli_set_charset($connect, 'utf8');

	$sql = "UPDATE account SET  hoten ='" .$name. "', namsinh = '".$date."', email = '".$email."'
			  WHERE id ='".$id."' ";

	$result = mysqli_query($connect, $sql) or  die("Execute Failed!");

	mysqli_close($connect);
	header('location:quanlyuser.php');
	
} else {
	$message=  "Không tồn tại!";
	"<script type='text/javascript'>alert('$message');</script>";
}
