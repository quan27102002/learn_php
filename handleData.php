<?php 
	include "connect.php";
	if(isset($_POST['submit'])){
		if($_POST['name'] != NULL && $_POST['password'] != NULL && $_POST['phone'] != NULL){
			$name = $_POST['name'];
			$pass = md5($_POST['password']);
			$phone = $_POST['phone'];
			$sql = "INSERT INTO users (name, password, phone) VALUES ('$name', '$pass', '$phone')";
			$query = mysqli_query($connect, $sql);
			if($query){
				echo "<script>";
				echo "alert('Thêm mới thành công');";
				echo "window.location.href='./postData.php';";
				echo "</script>";
			}
		}else{
			echo "<script>";
			echo "alert('Vui lòng điền đủ thông tin');";
			echo "window.location.href='./postData.php';";
			echo "</script>";
		}

	}else{
		echo "<script>";
		echo "alert('Bạn đang truy cập trái phép');";
		echo "window.location.href='./postData.php';";
		echo "</script>";		
	}
	

 ?>
