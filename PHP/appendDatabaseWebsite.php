<!DOCTYPE html>

<html>
    
<head>
        
		<title>
			Index Page
		</title>
  
	<link rel="stylesheet" href="styles.css">

	</head>
  
<body>

<header>
		<h1>Student Information System - SIS</h1>
</header>

	<nav>
	<ul>
		<li><a href="appendDatabaseWebsite.php">Append to</a></li>
		<li><a href="createDatabaseWebsite.php">Create database</a></li>
		<li><a href="searchDatabaseWebsite.php">Search database</a></li>
		<li><a href="saveDatabaseWebsite.php">Save to File</a></li>
	</ul>
	</nav>
	<form action ="databaseAppend.php" method="post">
			<p>ID: <input type="text" name="id"></p>
			<p>Name: <input type="text" name="name"></p>
			<p>ID: <input type="text" name="program"></p>
			<p>Name: <input type="text" name="GPA"></p>
			<p><input type="submit" name="submit" value="Submit"></p>
	</form>


</body> 
</html>