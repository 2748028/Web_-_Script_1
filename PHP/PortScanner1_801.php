
<form method="post" >
    Domain/IP: <input type="text" name="domain" /><br>
    Port Range: min <input type="text" name="min"/>
    max <input type="text" name="max"/><br>
        <input type="submit" value="Scan" />
</form>
<br />
 
<?php
if(!empty($_POST['domain'])) {	
        for ($port = $_POST['min']; $port<=$_POST['max']; $port++) {
		if($pf = @fsockopen($_POST['domain'], $port, $err, $err_string, 0.050)) {
                        $prot = getservbyport($port, "tcp");
                        echo "Port $port ($prot): <span style=\"color:green\">OK</span><br/>";
			fclose($pf);
		} else {
                        $prot = getservbyport($port, "tcp");
                        echo "Port $port ($prot): <span style=\"color:red\">Inaccessible</span><br/>";
		}
	}
}

?>