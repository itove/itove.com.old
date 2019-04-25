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

if (isset($_POST['oc']) && isset($_POST['rsv']) && isset($_POST['key']) && $_POST['key'] == 'fuck'){
	$oc = $_POST['oc'];
	$rsv = $_POST['rsv'];
	$client->set('oc', $oc);
	$client->set('rsv', $rsv);
	$client->set('min', date('i'));
}
else {
	$a = [
		'oc' => $client->get('oc'),
		'rsv' => $client->get('rsv'),
		'min' => $client->get('min')
	];
	echo json_encode($a, JSON_UNESCAPED_UNICODE);
}
