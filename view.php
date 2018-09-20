<?php 
require('dbconnection.php');

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voter Registration System</title>
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

	<!-- navigation bar -->
	<div>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<i class="material-icons" style="font-size:30px;color:green;">how_to_vote</i>&nbsp
			<a class="navbar-brand" href="index.php"> VoteX </a>
		</nav>
	</div>
	<div class="container">
		<!-- jumbotron -->
		<div class="jumbotron text-center">
			<h1>Voter Registration System</h1>
			<p>PHP/MYSQL CRUD operations</p>
			<a href="index.php" class="btn btn-primary">Register voter</a> 
				</div>

		<div class= "container-fluid">
				<table class="table-bordered m-auto">
		 <thead>
		 	<tr>
		 		<th>Id Name</th>
		 		<th>Voter Name</th>
		 		<th>Polling station</th>
		 		<th>Location</th>
		 		<th>Update</th>
		 		<th>Delete</th>
		 	</tr>
		 </thead>
		 <tbody>
		 	<?php 
		 	$query = "SELECT * FROM voters"; 
		 	$run = mysqli_query($conn, $query);
		 	if (!$run){
		 	die("<h4>Query failed" . mysqli_error($conn) . "</h4>");

		 }
		 

		 while($row = mysqli_fetch_assoc($run)){
		 	echo "<tr>";
		 	echo "<td>$row[idNumber]</td>";
		 	echo "<td>$row[name]</td>";
		 	echo "<td>$row[station]</td>";
		 	echo "<td>$row[location]</td>";
		 	echo "<td><a href='#' class= 'btn btn-warning'>Update</a></td>";
		 	echo "<td><a href='#' class= 'btn btn-danger'>Delete</a></td>";
		 	echo "</tr>";
		 }

		 ?>
		 </tbody>
		</table>

		</div>