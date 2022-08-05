<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}
 
include_once('User.php');
 
$user = new User();
 
//fetch user data
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System Using PHP</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Login System Using PHP</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <br><br><br><br><br><br>
			<center><h2 style="color: brown">Welcome!</h2></center>
		
		</div>
	</div>
</div>
</body>
</html>
