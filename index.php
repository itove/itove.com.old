<?php
/**
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */
require 'autoload.php';
$inc = 'inc';
$pages=['product0','faq0','more','contact','si'];
$t = $_GET["t"];

require $inc . '/header.inc';


if(in_array($t, $pages))
	require $inc.'/'.$t.'.inc';
else
	require $inc.'/index.inc';

require $inc . '/footer.inc';
