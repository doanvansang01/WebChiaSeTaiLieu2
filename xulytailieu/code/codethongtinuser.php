<?php

//code sửa
if (
    isset($_POST['id']) && isset($_POST['namsinh']) && isset($_POST['hoten'])
) {
    $id = $_POST['id'];
    $name = $_POST['hoten'];
    $date = $_POST['namsinh'];

    $gioitinh = $_POST['gioitinh'];


    $connect = mysqli_connect('mysql:host=sql210.epizy.com; port=3306; dbname=epiz_33123295_library', 'epiz_33123295', 'hfXtdfiDvG',) or die("Connect faild");

    mysqli_set_charset($connect, 'utf8');

    $sql = "UPDATE account SET  hoten = '" . $name . "', namsinh = '" . $date . "'
    , gioitinh = true 
			  WHERE id ='" . $id . "' ";

    // thực hiện đăng ký
    $result = mysqli_query($connect, $sql) or die("Không thêm được, vui lòng thử lại");
    header("location:trangchu.php");


    mysqli_close($connect);
}
