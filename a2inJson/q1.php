<!DOCTYPE html>
<html>
<head>
	<title>workJson</title>
	<link rel="stylesheet" type="text/css" href="../aset/bootstrap.css">
</head>
<body>
	<?php 
	$data=file_get_contents('data/pizza.json');
	$menu=json_decode($data,true);
	$menu=$menu['menu'];
	// echo $menu[0]['nama'];
	?>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 50%;"></a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">All Menu</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<h1>&nbsp;&nbsp;All Menu</h1>
		</div>
		<div class="row">
			<?php 
			foreach ($menu as $b) {
				?>
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span><?=$b['nama'];?></span>
						</div>
						<div class="panel-body">
							<img src="img/menu/<?=$b['gambar'];?>" style="width: 100%;">
							<div style="padding: 3px;"></div>
							<span><?=$b['deskripsi'];?></span>
							<div style="padding: 3px;"></div>
							<span><b>Rp <?=number_format($b['harga']);?></b></span>
						</div>
						<div class="panel-footer">
							<a href="#" class="btn btn-xs btn-primary btn-block">detail</a>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			
		</div>
	</div>

	<script type="text/javascript" src="../aset/jquery.js"></script>
	<script type="text/javascript" src="../aset/bootstrap.js"></script>
</body>
</html>