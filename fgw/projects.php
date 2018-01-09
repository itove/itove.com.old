<?php
$mysqli=new mysqli('localhost','root','dot','fgw');
$mysqli->set_charset('utf8');
$sql="select pid,pname,b,g from projects";
$res=$mysqli->query($sql);
$numrows=$res->num_rows;
$rows=$res->fetch_all(MYSQLI_ASSOC);
$res->free();
$mysqli->close();
?>
  <body>

	  <div class="container" id="projects">
		  <nav aria-label="breadcrumb" class="">
			  <div class="">
				  <ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="./">茅箭区资产投资管理平台</a></li>
					  <li class="breadcrumb-item active" aria-current="page">我的重点项目</li>
				  </ol>
			  </div>
		  </nav>

		  <main>
		  <div class="row mb-3 position-relative">
			  <div class="col">
				  <span class="badge badge-success">已完成</span>
				  <span class="badge badge-warning">数据与上月雷同</span>
				  <span class="badge badge-danger">上个月未提交</span>
			  </div>
			  <form class="form-row col-3 position-absolute" id="search">
				  <input class="col form-control mr-sm-2" type="text" placeholder="搜索项目" aria-label="Search">
			  </form>
		  </div>
		  <table class="table table-hover">
			  <thead>
				  <tr>
					  <th scope="col">#</th>
					  <th scope="col">项目名称</th>
					  <th scope="col">总投资</th>
					  <th scope="col">责任单位</th>
				  </tr>
			  </thead>
			  <tbody>
<!--
				  <tr class="bg-success">
					  <th scope="row">1</th>
					  <td>Mark</td>
					  <td>Otto</td>
					  <td>@mdo</td>
				  </tr>
				  <tr class="bg-danger">
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
				  <tr class="bg-warning">
					  <th scope="row">1</th>
					  <td>Mark</td>
					  <td>Otto</td>
					  <td>@mdo</td>
				  </tr>
-->

<?php foreach($rows as $v): ?>
<?php
$i=rand(1,4);
$a=['','bg-danger','bg-warning','bg-success'];
?>
	<tr class="<?= $a[$i] ?>">
				  <th scope="row"><?= $v['pid'] ?></th>
					  <td><?= $v['pname'] ?></td>
					  <td><?= $v['b'] ?></td>
					  <td><?= $v['g'] ?></td>
				  </tr>
<?php endforeach; ?>
			  </tbody>
		  </table>

		  </main>
