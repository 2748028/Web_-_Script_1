<form method="post">
	Domain/IP;
	
	<input type="text" name="domain" /><br>
	Port Range: min <input type="text" name="min"/>
	max <input type="text" name="max"/><br>
	<input type="submit" value="scan"/>
</form>

<?php
	if(!empty($_POST['domain']))
		//$ports = array(21, 22, 25, 80, 442);
	{
		for($port = $_POST['min']; $port<=$_POST['max']; $port++)
		{
			if($sock = @fsockopen($_POST['domain'], $port, $err, $errstr, 0.1))
			{
				$prot = getservbyport($port, "top");
				echo "Port $port -$prot- : OK";
				fclose($sock);
			}
			else 
			{
				$prot = getservebyport($port, "top");
				echo "Port $port -$prot- : Closed";
			}
		}
	}
?>