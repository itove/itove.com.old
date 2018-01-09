<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

require 'vendor/autoload.php';
//use Dotcra/

$root="./";
$inc="./";
$static="./";

$page=$_SERVER['PATH_INFO'];
$page=ltrim($page, '/');
$page ? : $page='home';

require $inc . "header.php";
require $inc . $page . ".php";
require $inc . "footer.php";
