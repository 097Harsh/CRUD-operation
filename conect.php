<?php 

//Database connection

	$obj = new mysqli("localhost","root","","crud");
	if ($obj->connect_errno != 0) 
	{
		echo $obj->connect_error;
		exit;
	}

 if (isset($_POST['submit'])) {
 	# code...
 	$name = $_POST['name'];
	$email = $_POST['email'];
	$Contact = $_POST['Contact'];
	$password = $_POST['password'];

 	$exe = $obj->query("insert into button(name,email,Contact,password) values ('$name','$email','$Contact','$password')");
 	if ($exe) {
 		//echo "Date inserted succesfully";
 	}
 	else {
 		echo "something went wrong...";
 	}

 }

?>