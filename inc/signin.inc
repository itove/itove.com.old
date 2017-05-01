<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title></title>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div  id="wrapper">
<form action="signin" method="POST">
<input type="text" name="user" autofocus>
<input type="password" name="pw">
<input type="submit" value="fuck">
<?php 
if(isset($pw) && $pw!=$p) echo 'wrong pass';
?>
</form>
</div>

	<script src=""></script>
</body>
<!--
	vim:ft=html
-->
</html>
