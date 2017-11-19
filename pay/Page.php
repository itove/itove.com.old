<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class Page{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	static function load($page){
		require 'header.php';
		require $page;
		//require 'footer.php';
	}
}

#new pus();
#pus::f();

