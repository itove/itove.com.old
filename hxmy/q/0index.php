<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */
$num = $_POST['num'];
var_dump($num);

// write to redis;

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->time();
var_dump($redis);
 
echo $num;
