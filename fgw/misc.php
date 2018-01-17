<?php
if(!empty($_POST)){
	//var_dump($_POST);
	foreach($_POST as $k=>$v){
		if(!empty($v)){
			$sql="update setting set value=";
			$sql.="'". $v . "'" . " where s_key='" . $k . "'";
			//echo $sql . "\n";
			(new Db)->query($sql);
		}
	}
}

$sql='select * from setting';
$rows=(new Db)->query($sql);
?>


		  <main>
			<form method="post" action="">
<?php foreach($rows as $row): ?>
		  <div class="input-group mb-3 col-5 mx-auto">
			  <div class="input-group-prepend">
			  <span class="input-group-text"><?= $row['name'] ?></span>
			  </div>
			  <input type="text" placeholder="<?= $row['value'] ?>" class="form-control" name="<?= $row['s_key'] ?>" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  </div>
<?php endforeach ?>
		  <button type="submit" class="btn btn-success d-block mx-auto">提 交</button>
			</form>
		  </main>

<?php
?>
