<?php
$sql="select users.uid,username,organization.oname,date from users join organization on organization.oid=users.oid";
$rows=(new Db)->query($sql);
?>
		  <main>
		  <div class="row mb-3">
			  <form class="form-row col-sm">
				  <div class="col-3">
					  <input type="text" class="form-control" placeholder="用户名">
				  </div>
				  <div class="col-3">
					  <input type="password" class="form-control" placeholder="密 码">
				  </div>
				  <div class="col-2">
					  <select class="form-control">
						<option selected>一级管理员</option>
						<option>普通管理员</option>
					  </select>
				  </div>
				  <div class="col-auto">
					  <button type="submit" class="btn btn-success">添加用户</button>
				  </div>
			  </form>

			  <div class="col-sm-3">
				  <input class="form-control" id="search" type="text" placeholder="搜索用户" aria-label="Search">
			  </div>
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
<?php foreach($rows as $v): ?>
				  <tr class="searchable">
				  <th scope="row"><?= $v['uid'] ?></th>
					  <td><?= $v['username'] ?></td>
					  <td><?= $v['oname'] ?></td>
					  <td><?= $v['date'] ?></td>
				  </tr>
<?php endforeach; ?>
			  </tbody>
		  </table>
		  </main>
