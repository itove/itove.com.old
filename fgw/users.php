<?php
if(!empty($_POST)){
	//var_dump($_POST);
	foreach($_POST as $v){
		if(empty($v)){
			$v=0;
			break;
		}
	}
	// if anyone in $_POST is empty, not do this
	if($v){
		$sql="insert into users (uname, passwd, oid, rid) values(" . '"' . $_POST['uname']  . '", "' . md5($_POST['passwd']) . '", "' . $_POST['oid'] . '", "' . $_POST['rid'] . '")';
		//echo $sql;
		(new Db)->query($sql);
	}
}

$sql="select rid,rname from role";
$r_rows=(new Db)->query($sql);

$sql="select oid,oname from organization";
$o_rows=(new Db)->query($sql);

$sql="select users.uid,uname,organization.oname,role.rname from users join (organization,role) on (organization.oid=users.oid and users.rid=role.rid) order by uid";
$u_rows=(new Db)->query($sql);
?>
		  <main>
		  <div class="row mb-3">
			  <form class="form-row col-sm" method="post">
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
<?php foreach($u_rows as $row): ?>
				  <tr class="searchable">
				  <th scope="row"><?= $row['uid'] ?></th>
					  <td><?= $row['uname'] ?></td>
					  <td><?= $row['oname'] ?></td>
					  <td><?= $row['rname'] ?></td>
				  </tr>
<?php endforeach; ?>
			  </tbody>
		  </table>
		  </main>
		</div>
