<?php 

$pages = ['about', 'addiction', 'responsibility', 'resources', 'contact'];

function titlePage() {
	$self = explode('/', $_SERVER['PHP_SELF']);
	$self = explode('.', end($self));
	return ucfirst($self[0]);
}


function check_page($page) {
	$end = explode('/', $_SERVER['PHP_SELF']);
	$end = end($end);
	if ($end == ($page . ".php")) {
		return TRUE;
	} else {
		return FALSE;
	}
}
?>