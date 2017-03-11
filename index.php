<?php
/**
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */
require_once 'autoload.php';
$inc = 'inc';
$t = $_GET["t"];
require_once $inc . '/header.inc';
switch($t){
case "product":
	require_once $inc.'/'.$t.'.inc';
	break;
case "faq":
	require_once $inc.'/'.$t.'.inc';
	break;
case "more":
	require_once $inc.'/'.$t.'.inc';
	break;
case "contact":
	require_once $inc.'/'.$t.'.inc';
	break;
default:
	require_once $inc.'/index.inc';
}
require_once $inc . '/footer.inc';
