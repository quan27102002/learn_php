
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<?php
$id=$_GET['id'];
include "connect.php";
		
        $sql = "SELECT * FROM users WHERE id = '$id' ";
        $query = mysqli_query($connect, $sql);

    while($row =mysqli_fetch_assoc($query)){
    $id=$row['id'];
    $name=$row['name'];
    $password=$row['password'];
    $phone=$row['phone'];
    }
?>


<div class="col-md-6">
				<form action="update.php"  method="post" accept-charset="utf-8">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
					<div class="form-group">
						<label>Name</label>	
						<input value="<?php  echo $name?>" type="text" name="name" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Password</label>	
						<input  value="<?php  echo $password?>"type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone number</label>	
						<input  value="<?php  echo $phone?>"type="text" name="phone" class="form-control" required>
					</div>
					<div class="form-group">
						<button  type="submit" name="submit" class="btn btn-success">Submit</button>	
					</div>
				</form>		
               </div>
</body>
</html>