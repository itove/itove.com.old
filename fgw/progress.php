<?php
$month = date('Y-m');

// handle form submission
if($_POST){
	foreach($_POST as $k => $v){
		if($_POST[$k]){
			$cols .= "$k='$v',";
		}
	}
	$sql = "select * from progress where pid='$pid' and date like '${month}%'";
	$prog = (new Db)->query($sql);
	// if not have any data of this month yet, copy it from previous month
	if(!$prog){
		$sql="insert into progress (pid,fill_state,phase,fillby,phone,progress,problem) select pid,fill_state,phase,fillby,phone,progress,problem from progress where pid='$pid' order by date desc limit 1";
		(new Db)->query($sql);
	}

	if($cols){
		$cols = rtrim($cols, ',');
		$sql="update progress set $cols where pid='$pid' and date like '${month}%'";
		(new Db)->query($sql);
	}
	
}

// prepare data
$sql = "select * from projects where projects.pid='$pid'";
$pj_row=(new Db)->query($sql);

//$sql = "select * from progress where pid='$pid' and date like '${month}%'";
$sql = "select * from progress where pid='$pid' order by date DESC LIMIT 2";
$pg_rows=(new Db)->query($sql, 1);

$sql="select value from setting where s_key='lockday' or s_key='remind_days'";
$s_row=(new Db)->query($sql);
$lockday=$s_row[0]['value'];
$remind_days=$s_row[1]['value'];
$dayleft=$lockday - date('d');


session_name('SID');
session_start();
//$uid=$_SESSION['uid'];
$oid=$_SESSION['oid'];
if($oid != $pj_row['oid'] || $dayleft <= 0){
	$disabled='disabled';
	$class='';
}
else{
	$disabled="";
	$class='writable';
}
?>

	  <div class="container" id="progress">
		  <nav aria-label="breadcrumb" class="position-relative">
				  <ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="<?= $root ?>">首 页</a></li>
				  <li class="breadcrumb-item"><a href="<?= $root . "/project" ?>">重点项目</a></li>
					  <li class="breadcrumb-item active" aria-current="page"><?= $pj_row['pname'] ?></li>
				  </ol>
				  <div class="dropdown position-absolute" id="dates">
					  <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <?= date('Y-m') ?>
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?php for($i=date('n'); date('n') - $i < 12; $i--): ?>
						<a class="dropdown-item <?php if(date('n') == $i) echo 'active' ?>" href="#"><?= date('Y-m', mktime(0,0,0,$i,1)) ?></a>
<?php endfor ?>
					  </div>
				  </div>
		  </nav>

		  <main>
		  <div class="alert alert-warning alert-dismissible fade show" role="alert">
			  默认显示前一次提交的数据，以供参考。内容与上月相同的单元格以黄色背景提醒。
		 </div>
<?php if($dayleft < $remind_days && $dayleft > 0): ?>
		  <div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>即将锁定！</strong> 请及时完善本月数据！每月<?= $lockday ?>日锁定，届时将无法再修改。
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>
<?php endif ?>

		  <div id="nodata" class="alert alert-danger alert-dismissible fade show d-none" role="alert">
			  没有数据！
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>

<?php if(0): ?>
		  <div class="alert bg-danger alert-dismissible fade show" role="alert">
			  <strong>您上月的数据未提交！</strong> 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>
<?php endif ?>

		  <form method="post">
			  <table class="table table-bordered">
				  <tbody>
<!-- data from table projects start-->
					  <tr>
						  <th scope="row">建设内容</th>
						  <td colspan="6">
						  <textarea class="form-control" rows="5" placeholder="<?= $pj_row['intro'] ?>" disabled></textarea>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">编 号</th>
						  <td>
						  <input id="pid" placeholder="<?= $pj_row['pid'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">项目名称</th>
						  <td>
						  <input placeholder="<?= $pj_row['pname'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">建设性质</th>
						  <td>
							<select class="custom-select" disabled>
								<option value="">新建</option>
								<option value="">续建</option>
							</select>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">实际开工时间</th>
						  <td>
							  <input placeholder="<?= $pj_row['start'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">拟竣工时间</th>
						  <td>
							  <input placeholder="<?= $pj_row['finish'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">总投资</th>
						  <td>
							  <input placeholder="<?= $pj_row['investment'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">投资主体</th>
						  <td>
						  <select class="custom-select" disabled>
								<option value="">市级政府</option>
								<option value="">区级政府</option>
								<option value="">企业</option>
							</select>
						  </td>
						  <th scope="row">今年计划投资</th>
						  <td>
							  <input placeholder="<?= $pj_row['invest_plan'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">今年累计完成投资</th>
						  <td>
							  <input placeholder="<?= $pj_row['z'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">责任单位</th>
						  <td>
							  <input placeholder="<?= $pj_row['o_incharge'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">实施单位</th>
						  <td>
							  <input placeholder="<?= $pj_row['z'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">包联领导</th>
						  <td>
							  <input placeholder="<?= $pj_row['p_incharge'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr> 
					  <tr>
						  <th scope="row">项目类型</th>
						  <td>
						  <select class="custom-select" disabled>
								<option value="">基建</option>
								<option value="">工业</option>
								<option value="">商业</option>
							</select>
						  </td>
						  <th scope="row">施工照片</th>
						  <td>
							<img src="/fgw/p1.png" class="img-fluid rounded float-left mr-1" alt="...">
							<img src="/fgw/p2.jpg" class="img-fluid rounded float-left mr-1" alt="...">
<!--
							<button type="button" class="btn btn-outline-primary btn-sm">
								<i class="fa fa-cloud-upload" aria-hidden="true"></i>
							</button>
-->
						  </td>
						  <th class="" colspan="4" scope="row"></th>
					  </tr> 
<!-- data from table projects end-->

<!-- data from table progress start-->
					  <tr>
<?php
if($pg_rows[0]['phone']==$pg_rows[1]['phone'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
						  <th class="<?= $tdclass ?>" scope="row">建设阶段</th>
						  <td class="<?= $tdclass ?>">
						  <select class="custom-select <?= $class ?>" name="phase" <?= $disabled ?>>
								<option value="">开工</option>
								<option value="">前期准备</option>
								<option value="">完工</option>
							</select>
						  </td>
<?php
if($pg_rows[0]['fillby']==$pg_rows[1]['fillby'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
						  <th class="<?= $tdclass ?>" scope="row">填报人</th>
						  <td class="<?= $tdclass ?>">
							  <input id="fillby" name="fillby" placeholder="<?= $pg_rows[0]['fillby'] ?>" type="text" class="form-control <?= $class ?>" <?= $disabled ?>>
						  </td>
<?php
if($pg_rows[0]['phone']==$pg_rows[1]['phone'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
						  <th class="<?= $tdclass ?>" scope="row">联系电话</th>
						  <td class="<?= $tdclass ?>">
							  <input id="phone" name="phone" placeholder="<?= $pg_rows[0]['phone'] ?>" type="text" class="form-control <?= $class ?>" <?= $disabled ?>>
						  </td>
					  </tr> 
					  <tr>
<?php
if($pg_rows[0]['phase']==$pg_rows[1]['phase'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
						  <th class="<?= $tdclass ?>" scope="row">实际建设期限</th>
						  <td class="<?= $tdclass ?>">
						  <input name="" placeholder="<?= $pg_rows[0]['phase'] ?>" type="text" class="form-control pickmonth <?= $class ?>" <?= $disabled ?>>
						  </td>
<?php
if($pg_rows[0]['fillby']==$pg_rows[1]['fillby'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
						  <th class="<?= $tdclass ?>" scope="row">至</th>
						  <td class="<?= $tdclass ?>">
							  <input name="" placeholder="<?= $pg_rows[0]['fillby'] ?>" type="text" class="form-control pickmonth <?= $class ?>" <?= $disabled ?>>
						  </td>
<?php
if($pg_rows[0]['fillby']==$pg_rows[1]['fillby'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
						  <th class="<?= $tdclass ?>" scope="row">本月完成投资</th>
						  <td class="<?= $tdclass ?>">
							  <input name="" placeholder="<?= $pg_rows[0]['fillby'] ?>" type="text" class="form-control <?= $class ?>" <?= $disabled ?>>
						  </td>
					  </tr> 
<?php
if($pg_rows[0]['progress']==$pg_rows[1]['progress'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
					  <tr class="<?= $tdclass ?>">
						  <th scope="row">本月进展</th>
						  <td colspan="6">
						  <textarea id="prog" class="form-control <?= $class ?>" name="progress" rows="3" placeholder="<?= $pg_rows[0]['progress'] ?>" <?= $disabled ?>></textarea>
						  </td>
					  </tr>
<?php
if($pg_rows[0]['problem']==$pg_rows[1]['problem'])
	$tdclass='table-warning dup';
else
	$tdclass='';
?>
					  <tr class="<?= $tdclass ?>">
						  <th scope="row">存在的困难和问题以及下一步工作建议和安排</th>
						  <td colspan="6">
						  <textarea id="problem" class="form-control <?= $class ?>" name="problem" rows="6" placeholder="<?= $pg_rows[0]['problem'] ?>" <?= $disabled ?>></textarea>
						  </td>
					  </tr>
<!-- data from table progress end-->
				  </tbody>
			  </table>
<?php if($oid == $pj_row['oid'] && $dayleft > 0): ?>
			  <button type="submit" class="btn btn-success" name="submit">提 交</button>
<?php endif ?>
		  </form>
		  </main>

<!-- click and popup image start-->
			<div id="layer" class="d-none position-fixed w-100 h-100 fade show">
			</div>

			<div id="popimg" class="w-75 position-fixed d-none fade show">
			  <img src="" class="rounded">
			  <button type="button" class="close position-absolute" id="popimgclose" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
			</div>
<!-- click and popup image end-->

			<div class="d-none" id="monthpicker">
				<div class="month">
					<select class="custom-select">
						<option>2015</option>
						<option>2014</option>
						<option selected>2013</option>
						<option>2012</option>
						<option>2011</option>
					</select>
				</div>
				<table class="table border rounded mb-0 date">
				  <tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
				  </tr>
				  <tr>
					<td class="bg-secondary">5</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
				  </tr>
				  <tr>
					<td>9</td>
					<td>10</td>
					<td>11</td>
					<td>12</td>
				  </tr>
				</table>
			</div>
		  </div>
