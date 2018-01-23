<?php
$sql="select * from projects join progress on progress.pid=projects.pid where projects.pid=$pid";
$row=(new Db)->query($sql);
$sql="select value from setting where s_key='lockday' or s_key='remind_days'";
$rows=(new Db)->query($sql);
$lockday=$rows[0]['value'];
$remind_days=$rows[1]['value'];
$dayleft=$lockday - date('d');

session_name('SID');
session_start();
$uid=$_SESSION['uid'];
if($uid != $row['uid'] || $dayleft <= 0){
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
					  <li class="breadcrumb-item active" aria-current="page"><?= $row['pname'] ?></li>
				  </ol>
				  <div class="dropdown position-absolute" id="dates">
					  <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <?= date('Y年n月') ?>
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?php for($i=date('n'); date('n') - $i < 12; $i--): ?>
						<a class="dropdown-item <?php if(date('n') == $i) echo 'active' ?>" href="#"><?= date('Y年n月', mktime(0,0,0,$i)) ?></a>
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

<?php if(0): ?>
		  <div class="alert bg-danger alert-dismissible fade show" role="alert">
			  <strong>您上月的数据未提交！</strong> 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>
<?php endif ?>

		  <form>
			  <table class="table table-bordered">
				  <tbody>
					  <tr>
						  <th scope="row">建设内容</th>
						  <td colspan="6">
						  <textarea class="form-control" rows="5" placeholder="<?= $row['intro'] ?>" disabled></textarea>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">编 号</th>
						  <td>
						  <input placeholder="<?= $row['pid'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">项目名称</th>
						  <td>
						  <input placeholder="<?= $row['pname'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">建设性质</th>
						  <td>
							<select class="custom-select" name="" disabled>
								<option value="">新建</option>
								<option value="">续建</option>
							</select>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">实际开工时间</th>
						  <td>
							  <input placeholder="<?= $row['start'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">拟竣工时间</th>
						  <td>
							  <input placeholder="<?= $row['finish'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">总投资</th>
						  <td>
							  <input placeholder="<?= $row['investment'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">投资主体</th>
						  <td>
						  <select class="custom-select" name="" disabled>
								<option value="">市级政府</option>
								<option value="">区级政府</option>
								<option value="">企业</option>
							</select>
						  </td>
						  <th scope="row">今年计划投资</th>
						  <td>
							  <input placeholder="<?= $row['invest_plan'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">今年累计完成投资</th>
						  <td>
							  <input placeholder="<?= $row['z'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">责任单位</th>
						  <td>
							  <input placeholder="<?= $row['o_incharge'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">实施单位</th>
						  <td>
							  <input placeholder="<?= $row['z'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">包联领导</th>
						  <td>
							  <input placeholder="<?= $row['p_incharge'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr> 
					  <tr>
						  <th scope="row">项目类型</th>
						  <td>
						  <select class="custom-select" name="" disabled>
								<option value="">基建</option>
								<option value="">工业</option>
								<option value="">商业</option>
							</select>
						  </td>
						  <th class="" colspan="4" scope="row"></th>
						  </td>
					  </tr> 
					  <tr>
						  <th class="table-warning" scope="row">建设阶段</th>
						  <td class="table-warning">
						  <select class="custom-select <?= $class ?>" name="" <?= $disabled ?>>
								<option value="">开工</option>
								<option value="">前期准备</option>
								<option value="">完工</option>
							</select>
						  </td>
						  <th class="table-warning" scope="row">填报人</th>
						  <td class="table-warning" id="fuck">
							  <input placeholder="<?= $row['fillby'] ?>" type="text" class="form-control <?= $class ?>" <?= $disabled ?>>
						  </td>
						  <th class="table-warning" scope="row">联系电话</th>
						  <td class="table-warning">
							  <input placeholder="<?= $row['phone'] ?>" type="text" class="form-control <?= $class ?>" <?= $disabled ?>>
						  </td>
					  </tr> 
					  <tr>
						  <th class="table-warning" scope="row">建设期限</th>
						  <td class="table-warning">
						  <input placeholder="<?= $row['phase'] ?>" type="text" class="form-control pickmonth <?= $class ?>" <?= $disabled ?>>
						  </td>
						  <th class="table-warning" scope="row">至</th>
						  <td class="table-warning">
							  <input placeholder="<?= $row['fillby'] ?>" type="text" class="form-control pickmonth <?= $class ?>" <?= $disabled ?>>
						  </td>
						  <th class="table-warning" scope="row">本月完成投资</th>
						  <td class="table-warning">
							  <input placeholder="<?= $row['fillby'] ?>" type="text" class="form-control <?= $class ?>" <?= $disabled ?>>
						  </td>
					  </tr> 
					  <tr class="table-warning">
						  <th scope="row">本月进展</th>
						  <td colspan="6">
						  <textarea class="form-control <?= $class ?>" rows="3" placeholder="<?= $row['progress'] ?>" <?= $disabled ?>></textarea>
						  </td>
					  </tr>
					  <tr class="table-warning">
						  <th scope="row">存在的困难和问题以及下一步工作建议和安排</th>
						  <td colspan="6">
						  <textarea class="form-control <?= $class ?>" rows="6" placeholder="<?= $row['problem'] ?>" <?= $disabled ?>></textarea>
						  </td>
					  </tr>
				  </tbody>
			  </table>
<?php if($uid == $row['uid'] && date('d') < $lockday): ?>
			  <button type="submit" class="btn btn-success">提 交</button>
<?php endif ?>
		  </form>
		  </main>


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
