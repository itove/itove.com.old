<?php
if($_POST){
	//var_dump($_POST);
	foreach($_POST as $v){
		if(empty($v)){
			$v=0;
			break;
		}
	}
	// if anyone in $_POST is empty, not do this
	if($v){
		// valiate uname
		$newuser = $_POST['uname'];
		$newpass = $_POST['passwd'];
		$o = ['options' => ['regexp' => '/^[[:alpha:]]\w{2,9}$/']];
		if(filter_var($newuser, FILTER_VALIDATE_REGEXP, $o)){
			// we only allow lower case
			$newuser = strtolower($newuser);
			// if uname not duplicate
			$sql = "select uname from users where uname='$newuser'";
			if((new Db)->query($sql)==null){
				$sql="insert into users (uname, passwd, oid, rid) values(" . '"' . $newuser  . '", "' . md5($_POST['passwd']) . '", "' . $_POST['oid'] . '", "' . $_POST['rid'] . '")';
				//echo $sql;
				(new Db)->query($sql);
			}
			else{
				$alert = 2;
			}
		}
		else{
			$alert = 1;
		}
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
<?php if($alert): ?>
		  <div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php if($alert == 1): ?>
		  用户名由字母和数字组成，不能包含特殊字符，长度3至10位。第一位不能是数字！
<?php endif ?>
<?php if($alert == 2): ?>
		  用户名<?= $newuser ?>已存在，试试别的！
<?php endif ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>
<?php endif ?>

		  <div class="row mb-3">
			  <form class="form-row col-sm" method="post">
				  <div class="col-sm">
					  <input type="text" class="form-control" name="uname" placeholder="用户名" required>
				  </div>
				  <div class="col-sm">
					  <input type="password" class="form-control" name="passwd" placeholder="密 码" required>
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
