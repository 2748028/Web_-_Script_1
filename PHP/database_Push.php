<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
	// Dean Orchard.
	$connection = new mysqli("localhost", "root", "", "lab4");
	
	if ($connection->connect_error)
	{
		die("Connection To Database Failed: " . $connection->connect_error);
	}
	
	if ($_SERVER ["REQUEST_METHOD"] == "POST")
	{
		$firstName = $_POST["firstname"];
		$lastName = $_POST["lastname"];
		$dept = $_POST["department"];
		
		$sql = "SELECT MAX(userid) AS maxid FROM employees";
		$finalResult = $connection->query($sql);
		
		while ($row = $finalResult->fetch_assoc())
		{
			$userID = $row ['maxid'] + 1;
		}	
		
		$sql = "INSERT INTO employees VALUES($userid,'$firstnme','$lastname',$department)";
		
		if (mysqli_query($connection, $sql))
		{
			echo "Thank-you For Adding Your Information!";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}
		$connection->query($sql);
		$connection->close();
		
	}
?>

<h1>Add An Employee To The Database.</h1>
	<p>Please Add Your Employee Information.</p>
	<form method="post" style="width:500px;padding:20px;">
		
		<p>First Name:<input type="text" name="firstname" style = "float: right"></p>
		
		<p>Last Name:<input type="text" name="lastname" style = "float: right"></p>
		
		<p>Department:<select name = "department" style = "float: right">
			<option value = ""> Select Your Department:</option>
			<option value = "100"> I.T_Dept</option>
			<option value = "200"> Meme_Police_Dept</option>
			<option value = "300"> Accounting</option>
			<option value = "400"> HR</option>
		</select></p>
		<br>
		
		<input type="submit" name="submit" value="Add Employee Info."></p>
	</form>
</body> 
</html>