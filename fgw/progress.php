<?php
$sql="select * from projects join progress on progress.pid=projects.pid where projects.pid=$pid";
$row=(new Db)->query($sql);
$uid=10;
$uid != $row['uid'] ? $disabled='disabled' : $disabled="";
?>
  <body>

	  <div class="container" id="progress">
		  <nav aria-label="breadcrumb" class="position-relative">
				  <ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="<?= $root ?>">首 页</a></li>
				  <li class="breadcrumb-item"><a href="<?= $root . "/project" ?>">我的重点项目</a></li>
					  <li class="breadcrumb-item active" aria-current="page"><?= $row['pname'] ?></li>
				  </ol>
				  <div class="dropdown position-absolute" id="dates">
					  <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  2018年1月
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  <a class="dropdown-item active" href="#">2018年1月</a>
						  <a class="dropdown-item" href="#">2017年12月</a>
						  <a class="dropdown-item" href="#">2017年11月</a>
						  <a class="dropdown-item" href="#">2017年10月</a>
						  <a class="dropdown-item" href="#">2017年9月</a>
						  <a class="dropdown-item" href="#">2017年8月</a>
						  <a class="dropdown-item" href="#">2017年7月</a>
						  <a class="dropdown-item" href="#">2017年6月</a>
						  <a class="dropdown-item" href="#">2017年5月</a>
						  <a class="dropdown-item" href="#">2017年4月</a>
						  <a class="dropdown-item" href="#">2017年3月</a>
						  <a class="dropdown-item" href="#">2017年2月</a>
						  <a class="dropdown-item" href="#">2017年1月</a>
					  </div>
				  </div>
		  </nav>

		  <main>
		  <div class="alert alert-warning alert-dismissible fade show" role="alert">
			  默认显示前一次提交的数据，以供参考。内容与上月相同的单元格以黄色背景提醒。
		  </div>
		  <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>即将锁定！</strong> 请及时完善本月数据！每月25日锁定，届时将无法再修改。
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>
		  <div class="alert bg-danger alert-dismissible fade show" role="alert">
			  <strong>您上月的数据未提交！</strong> 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			  </button>
		  </div>

		  <form>
			  <table class="table table-bordered">
				  <tbody>
					  <tr>
						  <th scope="row">建设内容</th>
						  <td colspan="6">
						  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="<?= $row['intro'] ?>" disabled></textarea>
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
							  <input placeholder="<?= $row['property'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">填报情况</th>
						  <td>
							  <input placeholder="<?= $row['fill_state'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">开工时间</th>
						  <td>
							  <input placeholder="<?= $row['start'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">拟竣工时间</th>
						  <td>
							  <input placeholder="<?= $row['finish'] ?>" type="text" class="form-control" disabled>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">总投资</th>
						  <td>
							  <input placeholder="<?= $row['investment'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">2018年计划投资</th>
						  <td>
							  <input placeholder="<?= $row['invest_plan'] ?>" type="text" class="form-control" disabled>
						  </td>
						  <th scope="row">累计投资</th>
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
						  <th class="table-warning" scope="row">建设阶段</th>
						  <td class="table-warning">
						  <input placeholder="<?= $row['phase'] ?>" type="text" class="form-control" <?= $disabled ?>>
						  </td>
						  <th class="table-warning" scope="row">填报人</th>
						  <td class="table-warning">
							  <input placeholder="<?= $row['fillby'] ?>" type="text" class="form-control" <?= $disabled ?>>
						  </td>
						  <th class="table-warning" scope="row">联系电话</th>
						  <td class="table-warning">
							  <input placeholder="<?= $row['phone'] ?>" type="text" class="form-control" <?= $disabled ?>>
						  </td>
					  </tr> 
					  <tr class="table-warning">
						  <th scope="row">本月进展</th>
						  <td colspan="6">
						  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="<?= $row['progress'] ?>" <?= $disabled ?>></textarea>
						  </td>
					  </tr>
					  <tr class="table-warning">
						  <th scope="row">困难和问题</th>
						  <td colspan="6">
						  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="<?= $row['problem'] ?>" <?= $disabled ?>></textarea>
						  </td>
					  </tr>
				  </tbody>
			  </table>
<?php if($uid==$row['uid']): ?>
			  <button type="submit" class="btn btn-success">提 交</button>
<?php endif ?>
		  </form>

		  </main>
