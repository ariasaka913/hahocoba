<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
	<link rel="stylesheet" type="text/css" href="aset/bootstrap.css">
</head>
<body>
	<div class="container">
		<br>
		<br>
		<div class="pull-right">
			<!-- <label class="btn btn-default" id="btn-cek">cek</label> -->
		</div>
		<div class="input-group" style="width: 50%;">
			<input type="text" class="form-control" placeholder="Search record" id="txt-show">
			<div class="input-group-btn">
				<label class="btn btn-default" data-toggle="modal" data-target=".modal-show" id="btn-show">modalShow</label>
			</div>
		</div>	
		<div class="modal fade modal-show">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<span>Data</span>
						<div class="pull-right">
							<label class="btn btn-default" data-dismiss="modal">x</label>
						</div>
					</div>
					<div class="modal-body">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search record" id="txt-search">
							<div class="input-group-btn">
								<label class="btn btn-default" id="btn-search">find</label>
							</div>
						</div>	
						<br>					
						<div class="table-responsive">
							<table class="table" style="width: 100%">
								<thead>
									<tr>
										<th>iUser</th>
										<th>nUser</th>
										<th>pasUser</th>
										<th>typeUser</th>
										<th>tglAdd</th>
									</tr>
								</thead>
								<tbody id="tbody"></tbody>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-default" id="btn-add">AddRow</label>
					</div>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table" style="width: 100%">
				<thead>
					<tr>
						<th>iUser</th>
						<th>nUser</th>
						<th>pasUser</th>
						<th>typeUser</th>
						<th>tglAdd</th>
					</tr>
				</thead>
				<tbody id="tbody1"></tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="aset/jquery.js"></script>
	<script type="text/javascript" src="aset/bootstrap.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			// $.ajax({
			// 	type:'get',url:'data.php?even=getData',success:function(output){
			// 		console.log(output);var row='';
			// 		$.each(output.data,function(i,b){
			// 			row +=`
			// 			<tr>
			// 			<td><input type="checkbox" class="nomer" value="`+b.iUser+`">`+b.iUser+`</td>
			// 			<td>`+b.nUser+`</td>
			// 			<td>`+b.pasUser+`</td>
			// 			<td>`+b.typeUser+`</td>
			// 			<td>`+b.tglAdd+`</td>
			// 			</tr>
			// 			`;
			// 		});$('#tbody').append(row);
			// 	}
			// })

			// $.getJSON("data.php?even=getData", function(output) {
			// 	console.log(output);var row='';
			// 	$.each(output.data,function(i,b){
			// 		row +=`
			// 		<tr>
			// 			<td><input type="checkbox" class="nomer" value="` + b.iUser + `">` + b.iUser + `</td>
			// 			<td>` + b.nUser + `</td>
			// 			<td>` + b.pasUser + `</td>
			// 			<td>` + b.typeUser + `</td>
			// 			<td>` + b.tglAdd + `</td>
			// 		</tr>
			// 		`;
			// 	});$('#tbody').append(row);
			// },'json');

			$("#btn-show").click(function(){
				$.post('data.php?even=getData1',{typeUser:$('#txt-show').val()},function(output){
					console.log(output);
					var row='';$("#tbody").empty();var kosong='<tr><td colspan="4">--hasil pencarian kosong--</td></tr>';
					$.each(JSON.parse(output),function(i,b){
						row+=`
						<tr>
							<td><input type="checkbox" class="nomer" value="` + b.iUser + `">` + b.iUser + `</td>
							<td>` + b.nUser + `</td>
							<td>` + b.pasUser + `</td>
							<td>` + b.typeUser + `</td>
							<td>` + b.tglAdd + `</td>
						</tr>
						`;
					});$('#tbody').append(row);
				});
			});
			$('#btn-search').on('click', function () {
				var value = $('#txt-search').val().toLowerCase();
				$('#tbody tr').filter(function () { $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); })
			});
			
			var jsonxx = [];
			function apm(){
				tableTampungan = "";
				console.log(jsonxx.length);
				for(var i=0;i<jsonxx.length;i++){
					a=i+1;
					tableTampungan+=`
					<tr>
						<td><label class="btn btn-default btn-sm btn-del" datac="`+i+`">del</label><span>`+jsonxx[i].iUser+`</span> - `+a+`</td>
						<td>`+jsonxx[i].nUser+`</td>
						<td>`+jsonxx[i].pasUser+`</td>
						<td>`+jsonxx[i].typeUser+`</td>
						<td>`+jsonxx[i].tglAdd+`</td>
					</tr>`;
				}
				$('#tbody1').html(tableTampungan);
			}
			$("#btn-add").click(function(){
				$('#tbody input[type="checkbox"]:checked').each(function(){
					var getRow = $(this).parents('tr'); 
					var iUser = getRow.find('.nomer').val(); 
					var nUser = getRow.find('td:eq(1)').html(); 
					var pasUser = getRow.find('td:eq(2)').html(); 
					var typeUser = getRow.find('td:eq(3)').html(); 
					var tglAdd = getRow.find('td:eq(4)').html(); 
					var row = { iUser:iUser,nUser:nUser,typeUser:typeUser,pasUser:pasUser,tglAdd:tglAdd};
					//row=;
					//$('#tbody1').append(row);
					jsonxx.push(row);
					apm();
					$(".modal-show").modal('hide');
					$(this).removeAttr('checked');					
				});
				cek('span');
			});
			$('#tbody1').on('click','.btn-del',function(){
					// $(this).parent().parent().remove();
					console.log($(this).attr("datac"))
					var index = $(this).attr("datac");
					if (index !== undefined) jsonxx.splice(index, 1);

					console.log("After removal:", jsonxx);
					apm();
				});
			function cek(span){
				var contents={},text;
				$('#tbody1 '+span).each(function(){
					text=$(this).text();
					if(!(text in contents)){
						contents[text] = true;
					}else{
						$(this).parent().parent().remove();
					}
				});
			}
		});
	</script>
</body>
</html>