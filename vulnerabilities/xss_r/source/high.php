<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET[ 'name' ] );
	$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	// Feedback for end user
	$html .= "<pre>Hello ${name}</pre>";
}

?>
