<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
	//Dean Orchard.
	$connection = new mysqli("localhost", "root", "", "lab4");
	
	if ($connection->connect_error)
	{
		die("Failed To Connect: " . $connection->connection_error);
	}
	
	if ($_SERVER ["REQUEST_METHOD"] == "POST")
	{
		$sql = "SELECT * FROM Employees, Departments WHERE dept=debtID";
		
		$clientID = "\"" . $_POST["clientID"] . "\"";
		$firstName = "\"" . $_POST["firstName"] . "\"";
		$lastName = "\"" . $_POST["lastName"] . "\"";
		$dept = "\"" . $_POST["department"] . "\"";
		$floor = "\"" . $_POST["floor"] . "\"";
		
		if ($clientID !== "\"\"")
		{
			$sql = $sql . " AND clientid LIKE $clientID";
		}
		
		if ($firstName !== "\"\"")
		{
			$sql = $sql . " AND firstname LIKE $firstName";
		}
		
		if ($lastName !== "\"\"")
		{
			$sql = $sql . " AND lastname LIKE $lastname";
		}
		
		if ($dept !== "\"\"")
		{
			$sql = $sql . " AND department LIKE $dept";
		}
		
		if ($floor !== "\"\"")
		{
			$sql = $sql . " AND floor LIKE $floor";
		}
		
		$finalResult = $connection->query ($sql);
		
		while ($row = $secRes->fetch_assoc())
		{
			echo 
			"<br> User ID: " . $row ['Userid']
			. " | First Name: " . $row ['Firstname']
			. " | Last Name: " . $row ['Lastname']
			. " | Department: " . $row . ['Deptname']
			. " | Floor #: " . $row . ['Floor'] 
			. "<br>";
		}
		
		$connection->close();
		
	}
?>

<h1>Search The Employee Database.</h1>

	<p>Welcome To The Employee Searching Database.</p>
	
	<form method="post" style="width:500px;padding:20px;">
		
		<p>ID<input type="text" name="clientID" style = "float: right"></p>
		<p>First Name<input type="text" name="firstName" style = "float: right"></p>
		<p>Last Name <input type="text" name="lastName" style = "float: right"></p>
		
		<p>Department<select name = "department" style = "float: right">
			<option value = ""> Select a Department</option>
			<option value = "I.T Dept."> I.T_Dept</option>
			<option value = "Meme Police Dept."> Meme_Police_Dept</option>
			<option value = "Accounting Dept."> Accounting</option>
			<option value = "HR Dept."> HR</option>
		</select></p>
		
		<p style = "text-indent: 50px">Floor<select name = "floor" style = "float: right">
			<option value= ""> Select a Floor Number.</option>
			<option value= "1"> 1</option>
			<option value= "2"> 2</option>
			<option value= "3"> 3</option>
			<option value= "4"> 4</option>
		</select></p>
		
		<br>
		
		<input type="submit" name="submit" value="Search"></p>
	
	</form>
	
</body> 
</html>