<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>	
			<div class="col-md-6">
				<form action="handleData.php" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Name</label>	
						<input type="text" name="name" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Password</label>	
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone number</label>	
						<input type="text" name="phone" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-success">Submit</button>	
					</div>
				</form>		
			
			</div>	
		</div>	
	</div>

	
</body>
</html>