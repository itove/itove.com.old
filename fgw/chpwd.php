<?php
if($parameter){
	$uname=$parameter;
}
else {
	session_name('SID');
	session_start();
	$uname=$_SESSION['uname'];
}
?>
		  <main>
		  <form method="post">
		  <div class="input-group mb-3 col-sm-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text">用户名</span>
			  </div>
			  <input type="text" placeholder="<?= $uname ?>" disabled class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <div class="input-group mb-3 col-sm-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text">原密码</span>
			  </div>
			  <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <div class="input-group mb-3 col-sm-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text">新密码</span>
			  </div>
			  <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <div class="input-group mb-3 col-sm-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text">密码确认</span>
			  </div>
			  <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <button type="submit" class="btn btn-success d-block mx-auto">提 交</button>
		  </form>


		  </main>
		</div>
