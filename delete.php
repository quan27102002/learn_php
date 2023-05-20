<?php 
	include "connect.php";
	$id=$_GET['id'];
			
			$sql = "DELETE FROM users WHERE id= '$id'";
			$query = mysqli_query($connect, $sql);
			
				echo "<script>";
				echo "alert('xoá thành công');";
				echo "window.location.href='./todo.php';";
				echo "</script>";
		?>