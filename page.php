<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class page{
	function load(){
		$inc = 'inc';
		$pages=['product0','faq0','more','contact','signin','signup'];
		$t = $_GET['t'];

		if($t=='signin'){
			require 'signin.php';
			return $t;
		}

		if($t=='signup'){
			require 'inc/signup.inc';
			return $t;
		}

		require $inc . '/header.inc';

		if(in_array($t, $pages))
			require $inc.'/'.$t.'.inc';
		else
			require $inc.'/index.inc';

		require $inc . '/footer.inc';

		return $t;
	}

	function __construct(){
	}

	function __destruct(){
	}

}

//page::load();
