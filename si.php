<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class pus{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	function f(){
	}
}

#new pus();
#pus::f();

$p=55;
$u='fuck';

$user=$_GET['user'];
$pw=$_GET['pw'];

if($user==$u && $pw==$p){
	echo 'welcome';
	setcookie('pw', $pw, time()+60*60*24*7);
}
else
	echo 'fuck off';
