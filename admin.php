<?php
if(isset($_POST['noticebtn']))
{
include('connection.php');
$notice = $_POST["notice"];

$qry ="INSERT INTO `register`(`notice`) VALUES ('[value-5]')";
$result = mysqli_query($connect, $qry); 

if($result)
{
	?> <script> alert("Notice Added Successfull"); </script> <?php
}
else
{
	?> <script> alert("Something went wrong, try again later"); </script> <?php
}
}



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="background-image: linear-gradient(to right top, #9ba88a, #ac9e70, #c58e64, #db7970, #e16794, #d06fbb, #ab7ede, #6890f5, #00a4f8, #00b3ed, #00bed9, #3ac6c3);">


<h2>Welcome Admin</h2>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form method="post" >
				<div class="form-group">
					<label>Add notice</label>
					<textarea name="notice" placeholder="Enter notice here.." class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" name="noticebtn">Add</button>
					
				</div>	
			</form>
		</div>
	</div>
</div>	






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>			

</body>
</html>