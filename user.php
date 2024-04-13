<?php
include("connection.php");

session_start();

if(!isset($_SESSION["sid"]))
{
	header("location:login.php");
}

$id = $_SESSION["sid"];

$qry = "select * from register where id = '$id'";		

$result = mysqli_query($connect, $qry);

$data = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		#btn{
			margin-bottom: 30px;
		}
	</style>
</head>
<body style="background-image: linear-gradient(to right top, #f91d61, #ff484c, #ff6b36, #ff8d1e, #ffac00, #e9c20e, #d2d530, #b8e653, #94f080, #72f6ab, #5cfad2, #5ffbf1);">
	<h1>Welcome</h1>

	<span>
     <a href="logout.php"><button class="btn btn-primary" id="btn" style="margin-left: 10px;">logout</button></a>
    </span>

</body>
</html>