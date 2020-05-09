<?php echo'';?>
<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
	<link rel="stylesheet" type="text/css" href="aset/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div style="padding: 10%;"></div>
				<div class="panel panel-default" style="box-shadow: 5px 0px 15px rgba(0,0,0,0.2);">
					<div class="panel-body">
						<span style="font-size: 16px">login</span>
						<div class="pull-right">
							<span id="msg-login"></span>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-4 col-xs-5">username</div>
							<div class="col-md-8 col-xs-7">
								<input type="text" class="form-control input-sm" id="iUser">
							</div>
						</div><div style="padding:2px"></div>
						<div class="row">
							<div class="col-md-4 col-xs-5">password</div>
							<div class="col-md-8 col-xs-7">
								<input type="password" class="form-control input-sm" id="pasUser">
							</div>
						</div><div style="padding:7px"></div>
						<div class="row">
							<div class="col-xs-6">
								<label class="btn btn-default btn-sm btn-block" id="btn-clear">clear</label>
							</div>
							<div class="col-xs-6">
								<label class="btn btn-default btn-sm btn-block" id="btn-login">sign In</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<script type="text/javascript" src="aset/jquery.js"></script>
	<script type="text/javascript" src="aset/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-clear').click(function(){
				$('#iUser').val('');$('#pasUser').val('');
			});
			$('#btn-login').click(function(){
				$.post('back.php?even=login',{iUser:$('#iUser').val(),pasUser:$('#pasUser').val(),versi:'10'},function(output){
					if(output.valid==true){
						$('#msg-login').text('berhasil');
						$.each(output.data,function(i,b){
							window.localStorage.setItem('iUser',b.iUser);
							window.localStorage.setItem('nUser',b.nUser);
							window.localStorage.setItem('typeUser',b.typeUser);
							location.replace('home.php');
						});
					}else{
						$('#msg-login').text('gagal');
					}
				},'json');
			});
		});
	</script>
</body>
</html>