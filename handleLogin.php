<?php

include "connect.php";
if (isset($_POST['submit'])) {
	if ($_POST['name'] != NULL && $_POST['password'] != NULL) {
		$name = $_POST['name'];
		$pass = md5($_POST['password']);
		$sql = "SELECT * FROM users WHERE name='$name' AND password='$pass'";
		$query = mysqli_query($connect, $sql);

		if (mysqli_num_rows($query)) {
			echo "<script>";
			echo "alert('Đăng nhập thành công');";
			echo "window.location.href='http://learn/';";
			echo "</script>";
		} else {
			echo "<script>";
			echo "alert('Đăng nhập thất bại');";
			echo "window.location.href='http://learn/login.php';";
			echo "</script>";
		}
	} else {
		echo "<script>";
		echo "alert('Vui lòng điền đủ thông tin');";
		echo "window.location.href='http://learn/postData.php';";
		echo "</script>";
	}

} else {
	echo "<script>";
	echo "alert('Bạn đang truy cập trái phép');";
	echo "window.location.href='http://learn/postData.php';";
	echo "</script>";
}


?>