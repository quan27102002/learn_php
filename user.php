<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/.../css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/.../jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/.../1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/.../js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
include "connect.php";
		
        $sql = "SELECT * FROM users ";
        $query = mysqli_query($connect, $sql);

    while($row =mysqli_fetch_assoc($query)){
        $name=$row['user'];
        $phone=$row['phone'];
        echo"
<table class=\"table table-bordered\">
<tbody>
<tr>
<td><b>User</b></td>

<td><b>Phone</b></td>

</tr>
<tr>
<td>$name</td>

<td>$phone</td>

</tr>
</tbody>
</table>";
        
    }


?>
</body>
</html>