<!DOCTYPE html>

<html>

<body>

	<?php
	
		$file = fopen ("file.txt", "r") or die("Unable to open file");
		echo fread($file, filesize("file.txt"));
		fclose($file);
		
		echo "<br>";
		
		$file = fopen("file.txt", "r") or die("Failed oto open file");
		
		while(!feof($file))
		{
			echo fgets($file)."<br>";
		}
		
		fclose($file);
		
		echo "<br>Creating a new file<br>";
		
		$file = fopen("file2.txt", "r") or die("Unable to open file");
		
		$str = "Networking I/n";
		fwrite($file, $str);
		$str2 = "Intro to programming\n";
		fwrite($file, $str2);
		
		fclose($file);
		
		////////////////////////
		$file = fopen("file2.txt", "r") or die("Failed to open file");
		
		echo fgets($file);
		
		fclose($file);
		
		echo fgets($file); //Retrieves a singular line
		echo fgets($file);
		fclose($file);
		
		echo "Reading characters<br>";
		
	?>
	
</body>

</html>