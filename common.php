<?php
	function displayHead(){ 
		$home = preg_match("/.*\/PicFood\//", $_SERVER[REQUEST_URI], $matches); 
		$val = $matches[0]; ?>
		<h1><a href="<?= "http://$_SERVER[HTTP_HOST]$val"; ?>">Pic-A-Food</a></h1> 
	<?php }
?>