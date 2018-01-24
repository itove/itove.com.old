<?php
if(!empty($_POST)){
	//var_dump($_POST);
	$uname=$_POST['uname'];
	$passwd=md5($_POST['passwd']);
	$sql='select uid,uname,passwd,oid,rid from users where uname=' . '"' . $uname. '" and passwd=' . '"' . $passwd .'"';
	//echo $sql;
	$user_row = (new Db)->query($sql);
	if($user_row){
		// session 
		session_name('SID');
		session_start();
		foreach($user_row as $k => $v){
			$_SESSION[$k] = $v;
		}
		//var_dump($_SESSION);

		// cookies
		setcookie('user',$_SESSION['uname']);

		require 'home.php';
		require 'footer.php';
		exit;
	}
	else{
		$wrong=1;
	}
}
?>
    <div class="container">
      <form class="form-signin" method="post">
	  	<h4 class="form-signin-heading text-muted"><?= $row['value'] ?></h4>
<?php if($wrong): ?>
		<div class="alert alert-danger">
			用户名或密码错误！
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		</div>
<?php endif ?>
        <label for="inputUsername" class="sr-only">uname</label>
		<input type="text" id="inputUsername" class="form-control mb-3" placeholder="用户名" name="uname" value="<?= $_COOKIE['user'] ?>" required autofocus>
        <label for="inputPassword" class="sr-only">passwd</label>
        <input type="password" id="inputPassword" class="form-control mb-3" placeholder="密  码" name="passwd" required>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" name="remember" id="customCheck1" checked>
			<label class="custom-control-label" for="customCheck1">记住我</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
	  </form>
	</div>
<!--
  <script src="<?= $root ?>/md5.js"></script>
-->
