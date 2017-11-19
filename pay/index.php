<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

require 'autoload.php';

if(isset($_COOKIE['user']) && isset($_COOKIE['pw'])){
	$user=$_COOKIE['user'];
	$pw=$_COOKIE['pw'];
	$pw0=User::pw();
	if($pw==$pw0){
		$title='工资明细 - '. $user;
		$page='info.php';
	}
	else{
		$title='登 陆';
		$page='signin.php';
	}
}
else{
	$title='登 陆';
	$page='signin.php';
}

Page::load($page);
