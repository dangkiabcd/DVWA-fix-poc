<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'ip' ];
	
	/*
	 * Hàm fix Command Injection, lọc các biến truyền vào sheel_exec
	 */
	$target = escapeshellarg($target);
	/*
	 * 
	 */

	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		system('ping '.escapeshellarg($target));
		// $cmd = shell_exec( 'ping  ' . $target );
	}
	else {
		// *nix
		system('ping -c 4'.escapeshellarg($target));
		// $cmd = shell_exec( 'ping  -c 4 ' . $target );
	}

	// Feedback for the end user
	$html .= "<pre>{$cmd}</pre>";
}

?>
