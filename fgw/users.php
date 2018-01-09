<?php
$mysqli=new mysqli('localhost','root','dot','fgw');
if(!$mysqli->connect_errno){
	$mysqli->set_charset('utf8');
	$sql="select uid,username,organization.oname,date from users join organization on organization.oid=users.oid";
	$res=$mysqli->query($sql);
	$numrows=$res->num_rows;
	$rows=$res->fetch_all(MYSQLI_ASSOC);
	$res->free();
	$mysqli->close();
}
?>
  <body>
	  <div class="container" id="setting">
		  <nav aria-label="breadcrumb" class="position-relative">
			  <ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="./">茅箭区资产投资管理平台</a></li>
				  <li class="breadcrumb-item active" aria-current="page">设 置</li>
			  </ol>
			  <div id="settings" class="btn-group btn-group-sm position-absolute" role="group" aria-label="Basic example">
				  <a role="button" href="setting" class="btn btn-danger">修改密码</a>
				  <a role="button" href="users" class="btn btn-danger active">用户管理</a>
				  <a role="button" href="upload" class="btn btn-danger">上传报表</a>
				  <!--
				  <button type="button" class="btn btn-danger">用户管理</button>
				  <button type="button" class="btn btn-danger">上传报表</button>
				  -->
			  </div>
		  </nav>

		  <main>
		  <div class="row mb-3">
			  <form class="form-row col">
				  <div class="col-3">
					  <input type="text" class="form-control" placeholder="用户名">
				  </div>
				  <div class="col-3">
					  <input type="password" class="form-control" placeholder="密 码">
				  </div>
				  <div class="col-2">
					  <select class="form-control" id="exampleFormControlSelect1">
						<option selected>一级管理员</option>
						<option>普通管理员</option>
					  </select>
				  </div>
				  <div class="col">
					  <button type="submit" class="btn btn-success">添加用户</button>
				  </div>
			  </form>

			  <form class="form-row col-3" id="search">
				  <input class="col form-control mr-sm-2" type="text" placeholder="搜索用户" aria-label="Search">
			  </form>
		  </div>
		  <table class="table table-striped table-hover">
			  <thead>
				  <tr>
					  <th scope="col">#</th>
					  <th scope="col">用户名</th>
					  <th scope="col">机 构</th>
					  <th scope="col">创建时间</th>
				  </tr>
			  </thead>
			  <tbody>
<!--
				  <tr>
					  <th scope="row">1</th>
					  <td>Mark</td>
					  <td>路灯管理处</td>
					  <td>@mdo</td>
				  </tr>
				  <tr>
					  <th scope="row">2</th>
					  <td>Jacob</td>
					  <td>Thornton</td>
					  <td>@fat</td>
				  </tr>
				  <tr>
					  <th scope="row">1</th>
					  <td>Mark</td>
					  <td>Otto</td>
					  <td>@mdo</td>
				  </tr>
				  <tr>
					  <th scope="row">1</th>
					  <td>Mark</td>
					  <td>Otto</td>
					  <td>@mdo</td>
				  </tr>
-->
<?php foreach($rows as $v): ?>
				  <tr>
				  <th scope="row"><?= $v['uid'] ?></th>
					  <td><?= $v['username'] ?></td>
					  <td><?= $v['oname'] ?></td>
					  <td><?= $v['date'] ?></td>
				  </tr>
<?php endforeach; ?>
			  </tbody>
		  </table>
		  </main>
