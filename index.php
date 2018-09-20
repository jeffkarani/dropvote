
<?php 
require ('dbconnection.php');
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

	<!-- main content -->

	<div class="container">
		<!-- jumbotron -->
		<div class="jumbotron text-center">
			<h1>Voter Registration System</h1>
			<p>PHP/MYSQL CRUD operations</p> 
			<p><a href="view.php" class="btn btn-primary">View Voters</a></p> 
		</div>

		<div>
			<h1 class="display-4 lead text-center">Fill form to vote</h1>
		</div>
        <!-- forms -->      
		<div>
			<div class="row">
				<div class="col-sm-6">
					<form action="index.php" method="POST">
						<div class="form-group">
							<label for="id number">ID number:*</label>
							<input type="text" class="form-control" id="idnumber"  name="idnumber" required>
						</div>
						<div class="form-group">
							<label for="name">Voter Name:*</label>
							<input type="text" class="form-control" id="email" name="user" required>
						</div>
						
				
						<div class="form-group">
							<label for="station">polling station:*</label>
							<input type="text" class="form-control" id="station" name="station" required>
						</div>
						<div class="form-group">
							<label for="location">Location:*</label>
							<input type="location" class="form-control" id="location"  name="location" required>
						</div>	
						<div>
							<button class="btn btn-primary" type="submit" name="btnSub">Submit</button>
						</div>						
					</form>					
				</div>							
			</div>							
		</div>
	 </div>
	 <!-- footer -->
	 <div>	 		
		<footer class="text-center text-muted mb-2 small">With love<a href="twitter">@Jeff</a></footer>
	 </div>
</body>
</html>


<?php 
if (isset($_POST['btnSub'])) {
	extract($_POST);
	// Query to save to dbconnection

	$query = "INSERT INTO voters VALUES ('$idnumber', '$user', '$station', '$location');";

	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Query failed. " . mysqli_error($conn));
	}else {
	
	header("location: index.php");
	echo "<strong>Query successful</strong>";
	
}
}
 ?>

