<?php
/**
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class member{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	function signup(){
	}

	static function signin(){
		if(isset($_POST["signin"])){
			echo "<script>location.href='inc/mem.inc'</script>";
		}
	}
}

#new pus();
#pus::f();

