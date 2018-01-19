<?php
$sql="select value from setting where s_key='sitename'";
$row=(new Db)->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

	<title><?= $row['value'] ?></title>

    <!-- Bootstrap core CSS -->
	<link type="text/css" href="<?= $root ?>/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
	<link type="text/css" href="<?= $root ?>/dot.css" rel="stylesheet">
  </head>
  <body>
