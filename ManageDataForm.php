<!DOCTYPE html>
<html lang="en">
<head>
	<title>ManagedataForm</title>
	<meta charset="UTF-8">
	<meta name="description" content="Dynamic Webpage">
	<meta name="keywords" content="HTML5,CSS,PHP">
	<meta name="author" content="Kielly Chrizza Mae Tojino">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: beige;
        }
    </style>
</head>


<div class="container">
	<div class="myheader">
		<h1>Manage Data Form</h1>
	</div>
	<br>
	
	<?php
		$db = mysqli_connect("localhost:3307", "root", "", "univdata");
		
		if (!$db) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$result = mysqli_query($db, "SELECT * FROM tblteacher");
		
		if (!$result) {
			die("Query failed: " . mysqli_error($db));
		}
		
		echo "<table border='1' width='100%'>";
		echo "<tr align='center'>
				<td><b> First Name </b></td>
				<td><b> Last Name </b></td>
				<td><b> Salary </b></td>
				<td colspan='2'><b> Manage </b></td></tr>";
				
		while ($myrow = mysqli_fetch_array($result))
		{
				echo "<form action='ManageData.php' method='post'>";
				echo "<tr>";
				echo "<input type='hidden' name='TchID' value='".$myrow['TchID']."'>";
				echo "<td>";
				echo "<input type='text' name='TchFName' value='".$myrow['TchFName']."'>";
				echo "<td>";
				echo "<input type='text' name='TchLName' value='".$myrow['TchLName']."'>";
				echo "<td>";
				echo "<input type='text' name='Salary' value='".$myrow['Salary']."'>";
				echo "<td>";
				echo "<center><input type='submit' name='upd_btn' value='UPDATE'>";
				echo "<td>";
				echo "<center><input type='submit' name='del_btn' value='DELETE'>";
				echo "</form>";
		}
		echo "</table>";
		echo "<a href='index.html'>BACK</a>";
	?>
</div>
</body>
</html>