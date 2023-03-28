<?php
	// Create connection
	$con = new mysqli("localhost", "root", "", "sisDB");
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: ".$con->connect_error);
    }
    echo "";

	$id = $name = $program = $gpa = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST["id"];
		$name = $_POST["name"];
		$program = $_POST["program"];
		$gpa = $_POST["gpa"];
		
		$sql = "INSERT INTO Students(id,name,program,gpa) VALUES ('$id','$name','$program','$gpa')";
		if($con->query($sql) === TRUE) {
			echo "Record created successfully";
		}
		else {
			echo ($con->error);
		}

		$con->close();
	}
?>

