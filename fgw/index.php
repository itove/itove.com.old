<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

require 'vendor/autoload.php';
require 'Db.php';

$root="/fgw";
$inc="./";
$static="./";

$path = explode("/", $_SERVER['PATH_INFO']);
$controller=$path[1];
$method=$path[2];
$parameter=$path[3];


require $inc . "header.php";

if(0){
	$controller = 'login';
	require $inc . $controller . ".php";
}
else{
	$controller ? : $controller='home';

	if($controller=='project' && is_numeric($method)){
		$pid=$method;
		require $inc . "progress.php";
	}
	else if($controller=='setting') {
		require $inc . "nav.php";
		$method ? : $method='chpwd';
		require $inc . $method. ".php";
	}
	else{
		require $inc . $controller . ".php";
		//require $inc . "404.php";
	}
}

require $inc . "footer.php";
