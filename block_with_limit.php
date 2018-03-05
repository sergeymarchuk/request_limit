<?php 
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$ip = str_replace(":", "", $ip);
	$path = "urls".DIRECTORY_SEPARATOR."{$ip}.txt";

	echo "$path";
	