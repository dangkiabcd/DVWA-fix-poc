<?php

$html = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$cookie_value = time();
	/*
	* Fix Cookie Sercurity HTTP Only not set 
	*/
	setcookie("dvwaSession", $cookie_value,$httponly = TRUE);
	/*
	*/

}
?>
