<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class Sign{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	static function check(){
		//session_name('SID');
		//session_start();
		//echo session_id();
		//
		$sessiondir = session_save_path();

		if(is_readable($sessiondir . '/sess_' . $_COOKIE['SID'])){
			return 1;
		}
		else{
			return 0;
		}
	}
}
