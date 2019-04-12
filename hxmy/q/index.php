<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */
require '../vendor/autoload.php';
// Predis\Autoloader::register();

$client = new Predis\Client();

if (isset($_POST['num']) && isset($_POST['key']) && $_POST['key'] == 'fuck'){
	$num = $_POST['num'];
	// $num = 6;
	// var_dump($num);
	$client->set('num', $num);
}
else {
	$num = $client->get('num');
	echo $num;
}


// echo $num . PHP_EOL;
// var_dump($client);
// echo $num . PHP_EOL;
