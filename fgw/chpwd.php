<?php
if($parameter){
	$username=$parameter;
}
else $username='shangwu';
?>
		  <main>
		  <div class="input-group mb-3 col-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text" id="inputGroup-sizing-default">用户名</span>
			  </div>
			  <input type="text" placeholder="<?= $username ?>" disabled class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <div class="input-group mb-3 col-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text" id="inputGroup-sizing-default">原密码</span>
			  </div>
			  <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <div class="input-group mb-3 col-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text" id="inputGroup-sizing-default">新密码</span>
			  </div>
			  <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <div class="input-group mb-3 col-5 mx-auto">
			  <div class="input-group-prepend">
				  <span class="input-group-text" id="inputGroup-sizing-default">密码确认</span>
			  </div>
			  <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
		  <button type="submit" class="btn btn-success d-block mx-auto">提 交</button>


		  </main>
