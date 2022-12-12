<?php
function register()
{
	if (!empty($_POST)) {
		$fullname = $_POST['name'];
		$date = $_POST['date'];
		$email = $_POST['email'];
		$password = $_POST['pass'];

		// tạo kết nối tới database
		$connect = mysqli_connect('mysql:host=sql210.epizy.com; port=3306; dbname=epiz_33123295_library', 'epiz_33123295', 'hfXtdfiDvG',) or die("Connect faild");
		// cho phep luu tieng viet vao database
		mysqli_query($connect, "set names 'utf8'");
		// kiemtra ket noi
		if ($connect->connect_error) {
			var_dump($connect->connect_error);
			//dung chuong trinh
			die();
		}
		// chèn data vào database
		$query = "INSERT INTO tai-khoan(ho-ten,nam-sinh, email, mat-khau)
						VALUES ('" . $fullname . "','" . $date . ",'" . $email . "','" . $password . "')";
		mysqli_query($connect, $query);
		//dong ket noi
		$connect->close();
	}
}
