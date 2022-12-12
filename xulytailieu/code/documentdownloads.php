<?php

$connect = mysqli_connect('mysql:host=sql210.epizy.com; port=3306; dbname=epiz_33123295_library', 'epiz_33123295', 'hfXtdfiDvG',) or die("Connect faild");
mysqli_query($connect, "set name 'utf8'");
$sql = " select * from document where filename='" . basename($fn) . "' "; // Chỉ lấy tên file
$result = mysqli_query($connect, $sql) or die("Failed!");
$index = '';

while ($row = mysqli_fetch_array($result)) {
	$row['downloads']++;
	$index = $row['downloads'];
}

$sqlcmd = "update document set downloads = '" . $index . "' where filename='" . basename($fn) . "'";
$resultcmd = mysqli_query($connect, $sqlcmd) or die("Failed!");
mysqli_close($connect);
