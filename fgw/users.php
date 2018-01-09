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
		  <div class="row mb-3 position-relative">
			  <form class="form-row col-6">
				  <div class="col-5">
					  <input type="text" class="form-control" placeholder="用户名">
				  </div>
				  <div class="col-5">
					  <input type="password" class="form-control" placeholder="密 码">
				  </div>
				  <div class="col-1">
					  <button type="submit" class="btn btn-success">添加用户</button>
				  </div>
			  </form>

			  <form class="form-row col-3 position-absolute" id="search">
				  <input class="col form-control mr-sm-2" type="text" placeholder="搜索用户" aria-label="Search">
			  </form>
		  </div>
		  <table class="table table-striped table-hover">
			  <thead>
				  <tr>
					  <th scope="col">#</th>
					  <th scope="col">用户名</th>
					  <th scope="col">机 构</th>
					  <th scope="col">Handle</th>
				  </tr>
			  </thead>
			  <tbody>
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
			  </tbody>
		  </table>

		  </main>
