<?php

include 'conect.php';

$obj = new mysqli("localhost","root","","crud");
if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit;
}

$result = $obj->query("select * from button");

?>
<!DOCTYPE html>
<html>
<head>
 <title>All record</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="container">
		<button class="btn btn-primary my-5"><a href="create.php" class="text-light">Add user</a></button>
	</div>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display the user </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Email </th>
 <th> Contact </th>
 <th> Password </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
	while($row = $result->fetch_object()){
 ?>
 <tr class="text-center">
 <td> <?php echo $row->id;  ?> </td>
 <td> <?php echo $row->name;  ?> </td>
 <td> <?php echo $row->email;  ?> </td>
 <td> <?php echo $row->Contact;  ?> </td>
 <td> <?php echo $row->password; ?> </td>
 <td> <button class="btn btn-danger"> <a href="delete.php?delid=<?php echo $row->id; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn btn-primary"> <a href="edit.php?editid=<?php echo $row->id; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>