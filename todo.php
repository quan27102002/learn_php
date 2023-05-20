<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Lựa chọn</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php 
    include "connect.php";
		
    $sql = "SELECT * FROM users ";
    $query = mysqli_query($connect, $sql);

while($row =mysqli_fetch_assoc($query)){
    $id=$row['id'];
    $name=$row['name'];
    $password=$row['password'];
    $phone=$row['phone'];
    ?>
    <tr>
      <th scope="row"><?php echo $id?></th>
      <th scope="row"><?php echo $name?></th>
      <th scope="row"><?php echo $password?></th>
      <th scope="row"><?php echo $phone?></th>
      <th scope="row">
      <a href="./xuly.php?id=<?php echo $row['id'];?>" class=" btn btn-outline-primary">Sửa
      <a  href="./delete.php?id=<?php echo $row['id'];?>" class=" btn btn-outline-primary">Xoá
      </th>
    </tr>

    <?php 
} 
?>
  </tbody>
</table>
</body>
</html>



