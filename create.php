<?php

include 'conect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert the data</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-4 m-auto">
		<form method="post" action="index.php">
			<br><br><div class="card">
 
			 <div class="card-header bg-dark">
			 <h1 class="text-white text-center">  Insert Data </h1>
			 </div><br>

			 <label> Name: </label>
			 <input type="text" name="name" class="form-control"> <br>

			 <label> Email: </label>
			 <input type="text" name="email" class="form-control"> <br>

			 <label> Contact: </label>
			 <input type="text" name="Contact" class="form-control"> <br>

			 <label> Password: </label>
			 <input type="password" name="password" class="form-control"> <br>

			 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

			 </div>
			 
		</form>
	</div>
</body>	
</html>