<!DOCTYPE html>
<html>

<body>

	<?php

		$file = fopen("file.txt", "r") or die("Unable to open file");
		echo fread($file, filesize("file.txt"));
		fclose($file);

		echo "<br>";

		$file = fopen("file.txt", "r") or die("Failed to open file");

		while(!feof($file)){
			echo fgets($file)."<br>";
		}

		echo fgets($file);  //reads a single line
		echo fgets($file);

		fclose($file);

		echo "Reading characters<br>";

		$file = fopen("file.txt", "r") or die("Failed to open file");

		while(!feof($file)){
			echo fgetc($file);
		}
		fclose($file);

		echo "<br>Creating a new file<br>";

		$file = fopen("file2.txt", "w") or die("Unable to open file");

		$str = $_POST["user"]."\n";
		fwrite($file, $str);
		$str2 = $_POST["pwd"]."\n";
		fwrite($file, $str2);

		fclose($file);

		$file = fopen("file2.txt", "r") or die("Failed");

		echo fgets($file);

		fclose($file);
	?>

</body>
</html>