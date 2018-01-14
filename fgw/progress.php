<?php
$mysqli=new mysqli('localhost','root','dot','fgw');
if(!$mysqli->connect_errno){
	$mysqli->set_charset('utf8');
	$sql="select pname from projects where pid=$page";
	if($res=$mysqli->query($sql)){
		$numrows=$res->num_rows;
		$row=$res->fetch_assoc();
		$res->free();
		$mysqli->close();
	}
}
?>
  <body>

	  <div class="container" id="progress">
		  <nav aria-label="breadcrumb" class="position-relative">
				  <ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="./">茅箭区资产投资管理平台</a></li>
					  <li class="breadcrumb-item"><a href="projects">我的重点项目</a></li>
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
					  <thead class="">
						  <th colspan="6">项目信息</th>
					  </thead>
					  <tr>
						  <th scope="row">建设内容</th>
						  <td colspan="6">
							  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="ooksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfoksdafsafsaasg asdfsafasf sadfsa saf asfksdafsafsaasg asdfsafasf sadfsa saf asf" readonly></textarea>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">编 号</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">项目名称</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">建设性质</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
					  </tr>
					  <tr>
						  <th class="table-warning" scope="row">建设阶段</th>
						  <td class="table-warning">
							  <input placeholder="abc" type="text" class="form-control">
						  </td>
						  <th scope="row">开工时间</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">拟竣工时间</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">总投资</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">2018年计划投资</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">累计投资</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
					  </tr>
					  <tr>
						  <th scope="row">填报情况</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th class="table-warning" scope="row">填报人</th>
						  <td class="table-warning">
							  <input placeholder="abc" type="text" class="form-control">
						  </td>
						  <th class="table-warning" scope="row">联系电话</th>
						  <td class="table-warning">
							  <input placeholder="abc" type="text" class="form-control">
						  </td>
					  </tr> 
					  <tr>
						  <th scope="row">责任单位</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">实施单位</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
						  <th scope="row">包联领导</th>
						  <td>
							  <input placeholder="abc" type="text" class="form-control" readonly>
						  </td>
					  </tr> 
					  <tr class="table-warning">
						  <th scope="row">本月进展</th>
						  <td colspan="6">
							  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="abcaf sdaf asdf sadfas"></textarea>
						  </td>
					  </tr>
					  <tr class="table-warning">
						  <th scope="row">困难和问题</th>
						  <td colspan="6">
							  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="dsafas fsadf sadfaf asdfd"></textarea>
						  </td>
					  </tr>
				  </tbody>
			  </table>

			  <button type="submit" class="btn btn-success">提 交</button>
		  </form>

		  </main>
