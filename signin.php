<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */
$p=55;
$u='fuck';

$user=$_POST['user'];
$pw=$_POST['pw'];

if($_COOKIE['pw']==$p && $_COOKIE['user']==$u)
	require 'inc/mem.inc';
else if ($user==$u && $pw==$p){
	require 'inc/mem.inc';
	setcookie('user', $user, time()+60*60*24*7);
	setcookie('pw', $pw, time()+60*60*24*7);
}
else
	require 'inc/signin.inc';
