<html>
    <p>
	<?php
	$arraySort = array(1,7,3,6,3,6,9);
	sort($arraySort);
	print join(",", $arraySort);
	?>
	</p>
	<p>
	<?php
	rsort($arraySort);
	print join(",", $arraySort);
	?>
	</p>
</html>