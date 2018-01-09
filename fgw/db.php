<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class db{
	private $a;
	private $b;
	private $c;
	function __destruct(){
	}

	function __construct($host,$user, $pass, $db){
		$mysqli=new mysqli($host,$user, $pass, $db);
		if($mysqli->connect_errno){
			echo $mysqli->connect_errno. "\n";
			echo $mysqli->connect_error. "\n";
			exit;
		}
		//else echo 'success';
	}
}

$a=new db('localhost','root','dot','fgw');
