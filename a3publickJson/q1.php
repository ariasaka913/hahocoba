<?php echo'';?>

<html>
<head>
	<title>workJson</title>
	<link rel="stylesheet" type="text/css" href="../aset/bootstrap.css">
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Publick Json</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="menu1 active"><a href="#">All</a></li>
				<li class="menu1"><a href="#">pizza</a></li>
				<li class="menu1"><a href="#">pasta</a></li>
				<li class="menu1"><a href="#">nasi</a></li>
				<li class="menu1"><a href="#">minuman</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<h1 id="nMenu">Movie</h1>
			<div class="input-group">
				<input type="text" id="textSearch" class="form-control input-lg">
				<span class="input-group-btn">
					<button class="btn btn-primary btn-lg" id="btnSearch">search</button>
				</span>
			</div>
		</div>
		<hr>
		<div class="row movie">
			
		</div>
	</div>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body" id="detail">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../aset/jquery.js"></script>
	<script type="text/javascript" src="../aset/bootstrap.js"></script>
	<script type="text/javascript">
		$('#btnSearch').on('click', function(){
			$.ajax({
				url:'http://omdbapi.com',
				type:'get',
				datatype:'json',
				data:{
					'apikey':'245fc017',
					's':$('#textSearch').val()
				},
				success:function(b){
					if(b.Response=="True"){
						let q=b.Search;
						$.each(q,function(i,b1){
							$('.movie').append(''+
								'<div class="col-md-4">'+
								'<div class="panel panel-primary">'+
								'<div class="panel-heading">'+
								'<span>'+b1.Title+'</span>'+
								'</div>'+
								'<div class="panel-body">'+
								'<img src="'+b1.Poster+'" style="width: 100%;">'+
								'<div style="padding: 3px;"></div>'+
								'<span>'+b1.imdbID+'</span>'+
								'<div style="padding: 3px;"></div>'+
								'<span><b>'+b1.Year+'</b></span>'+
								'</div>'+
								'<div class="panel-footer">'+
								'<button class="btn btn-xs btn-primary btn-block detail" data-toggle="modal" data-id="'+b1.imdbID+'" data-target="#myModal">detail</button>'+
								'</div>'+
								'</div>'+
								'</div>');
						});
						$('#textSearch').val('');
					}else{
						$('.movie').html(`<center>
							<h1>not found</h1>
							<br>
							<h1>`+b.Error+`</h1>
							</center>`)
					}
				}
			})
		});

		$('.movie').on('click','.detail', function(){
			$.ajax({
				url:'http://omdbapi.com',
				type:'get',
				datatype:'json',
				data:{
					'apikey':'245fc017',
					'i':$(this).data('id')
				},
				success:function(b){
					if(b.Response=="True"){
						$('#detail').html(`<div class="row">
							<div class="col-xs-6">
							<img src="`+b.Poster+`" style="width:100%">
							</div>
							<div class="col-xs-6">
							<ul class="list-group">
							<li class="list-group-item">`+b.Released+`</li>
							<li class="list-group-item">`+b.Runtime+`</li>
							<li class="list-group-item">`+b.Actors+`</li>
							</ul>
							</div>
							</div>`);
					}else{
						$('#detail').html('notfound');
					}
				}
			});
		});

	</script>
</body>


</html>