    <div class="container">
      <form class="form-signin" method="post">
	  	<h4 class="form-signin-heading text-muted"><?= $row['value'] ?></h4>
        <label for="inputUsername" class="sr-only">Email address</label>
        <input type="text" id="inputUsername" class="form-control mb-3" placeholder="用户名" name="uname" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-3" placeholder="密  码" name="passwd" required>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="customCheck1" checked>
			<label class="custom-control-label" for="customCheck1">记住我</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
	  </form>
	</div>
