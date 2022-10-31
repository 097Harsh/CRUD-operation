<?php


$obj = new mysqli("localhost","root","","crud");

if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit;
}

//edit code

$id = $_GET["editid"];
$result = $obj->query("SELECT * from button where id='$id'");
$row = $result->fetch_object();


if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email    = $_POST['email'];
	$Contact  = $_POST['Contact'];


	$exe = $obj->query("UPDATE button set name='$name',email='$email',Contact='$Contact' where id='$id'");

	if($exe)
	{
		header('location:index.php');
	}
	else
	{
		echo "Something went wrong..";
	}
}
	

?>

<!DOCTYPE html>
<html>
<head>
 <title>Update the data</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Data </h1>
 </div><br>

  <label> Name: </label>
 <input type="text" name="name" class="form-control" value="<?php echo $row->name;  ?>"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control" value="<?php echo $row->email ?>"> <br>

 <label> Contact: </label>
 <input type="text" name="Contact" class="form-control" value="<?php echo $row->Contact; ?>" > <br>

 <label> Password: </label>
 <input type="password" name="password" class="form-control" value="<?php echo $row->password; ?>" > <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>