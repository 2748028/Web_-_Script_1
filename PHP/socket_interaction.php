<form method="post">
	Domain/IP: <input type="text" name="domain">
	<input type="submit" value="submit"/>
</form>

<?php
	function ping($host, $port=80, $timeout=1)
	{
		$sock = @fsockopen($host, $port, $errno, $errstr, $timeout);
		
		if(!$sock)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	$host = 'www.uoit.ca';
	$host = $_POST['domain'];
	$start = microtime(true);
	$result = ping($host);
	$stop = microtime(true);
	
	if ($result)
	{
		echo "Ping: " . floor(($stop-$start)*1000) . " ms<br>";
	}
	else
	{
		echo "Server is DOWN";
	}
?>