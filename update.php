<?php
include "connect.php";
$id = $_POST['id'];
if (isset($_POST['submit'])) {
	if ($_POST['name'] != NULL && $_POST['password'] != NULL && $_POST['phone'] != NULL) {
		$name = $_POST['name'];
		$pass = md5($_POST['password']);
		$phone = $_POST['phone'];
		$sql = "UPDATE users SET name='$name',  password='$pass', phone='$phone'
            WHERE id= '$id'";
		$query = mysqli_query($connect, $sql);
		if ($query) {
			echo "<script>";
			echo "alert('sửa thành công');";
			echo "window.location.href='http://learn/postData.php';";
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