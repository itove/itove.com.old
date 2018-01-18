<?php
if(!empty($_GET)){
	//var_dump($_GET);
	foreach($_GET as $v){
		//var_dump($v);
	}
	if(1){
		$sql="insert into users () values()";
	}
}

$sql="select rid,rname from role";
$r_rows=(new Db)->query($sql);

$sql="select oid,oname from organization";
$o_rows=(new Db)->query($sql);

$sql="select users.uid,uname,organization.oname,role.rname from users join (organization,role) on (organization.oid=users.oid and users.rid=role.rid)";
$rows=(new Db)->query($sql);
?>
		  <main>
		  <div class="row mb-3">
			  <form class="form-row col-sm" method="get">
				  <div class="col-sm">
					  <input type="text" class="form-control" name="uname" placeholder="用户名">
				  </div>
				  <div class="col-sm">
					  <input type="password" class="form-control" name="passwd" placeholder="密 码">
				  </div>
				  <div class="col-sm">
					  <select class="form-control" name="oid">
<?php foreach($o_rows as $row): ?>
<option value="<?= $row['oid'] ?>"><?= $row['oname'] ?></option>
<?php endforeach ?>
					  </select>
				  </div>
				  <div class="col-sm">
					  <select class="form-control" name="rid">
<?php foreach($r_rows as $row): ?>
<option value="<?= $row['rid'] ?>"><?= $row['rname'] ?></option>
<?php endforeach ?>
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
					  <th scope="col">角 色</th>
				  </tr>
			  </thead>
			  <tbody>
<?php foreach($rows as $v): ?>
				  <tr class="searchable">
				  <th scope="row"><?= $v['uid'] ?></th>
					  <td><?= $v['uname'] ?></td>
					  <td><?= $v['oname'] ?></td>
					  <td><?= $v['rname'] ?></td>
				  </tr>
<?php endforeach; ?>
			  </tbody>
		  </table>
		  </main>
