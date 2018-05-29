<?php 
	$url = $_POST["urlString"];
	$ret = file_get_contents($url);
	echo $ret;
 ?>