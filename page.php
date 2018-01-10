<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class page{
	function load(){
		$inc = 'inc/';
		$pages=['product','faq','more','contact','signin','signup'];
		$page=$_SERVER['PATH_INFO'];
		$page=ltrim($page, '/');
		echo $page;

		require $inc . '/header.inc';

		if(in_array($page, $pages))
			require $inc . $page.'.inc';
		else
			require $inc . 'index.inc';

		require $inc . 'footer.inc';

	}

	function __construct(){
	}

	function __destruct(){
	}

}

//page::load();
