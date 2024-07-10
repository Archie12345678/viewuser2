<!DOCTYPE html>
<html lang="en">
<head>
	<title>List of Users</title>
	<meta charset="UTF-8">
	<meta name="description" content="Dynamic Webpage">
	<meta name="keywords" content="HTML5,CSS,PHP">
	<meta name="author" content="Kielly Chrizza Mae Tojino">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="printstyle.css">
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
		<h1>List of Users</h1>
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
				<td><b> Teacher ID </b></td>
				<td><b> FullName </b></td>
				<td><b> Salary </b></td></tr>";
				
		while ($myrow = mysqli_fetch_array($result)) {
			echo "<tr><td>";
			echo $myrow["TchID"];
			echo "</td><td>";
			echo $myrow["TchFName"] . " " . $myrow["TchLName"];
			echo "</td><td>";
			echo $myrow["Salary"];
			echo "</td></tr>";
		}
		echo "</table>";
		
		mysqli_close($db);
		
		echo "<span class='cssclsNoPrint'><b>
        <input type='button' onclick=\"window.location.href='index.html'\" value='BACK'>
        <input type='button' onclick=\"window.print()\" value='PRINT'>
        </b></span>";
	
	?>
</div>
</body>
</html>
