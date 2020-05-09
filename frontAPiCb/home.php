<?php echo'';?>
<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
	<link rel="stylesheet" type="text/css" href="aset/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="aset/datatable.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style>
		body,table { font-size: 12px; background-color:#EDECEC;}
		.panel{background-color: #DCD9D9;}
		.panel-body{padding: 4px 4px;}
		.input-xs {height: 22px;font-size: 12px;}
		.table>tbody>tr>th,.table>tbody>tr>td{padding: 2px;}
		.boxShadow{box-shadow: 5px 0px 15px rgba(0,0,0,0.2);}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="boxShadow">
			<div class="row">
				<div class="col-xs-3">iUserN : <span id="iUserN"></span></div>
				<div class="col-xs-3">nUserN : <span id="nUserN"></span></div>
				<div class="col-xs-3">typeUserN : <span id="typeUserN"></span></div>
				<div class="col-xs-3"><label class="btn btn-default btn-xs" id="btn-logout">logout</label></div>
			</div>
		</div><div style="padding:2px"></div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default boxShadow">
					<div class="panel-body">
						<span><b>Data User</b></span>
						<div class="pull-right">
							<span id="iUser"></span>
							<label class="btn btn-default btn-xs" data-toggle="collapse" data-target="#collapse-user">form</label>
						</div>
						<div style="width: 100%;height: 1px;background-color: #BFBEBE; padding: 1px;"></div>
						<div style="padding:2px"></div>
						<div class="collapse" id="collapse-user">
							<div class="row">
								<div class="col-md-4 col-xs-5">nUser</div>
								<div class="col-md-8 col-xs-7">
									<input type="text" class="form-control input-xs" id="nUser">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-md-4 col-xs-5">pasUser</div>
								<div class="col-md-8 col-xs-7">
									<input type="text" class="form-control input-xs" id="pasUser">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-md-4 col-xs-5">typeUser</div>
								<div class="col-md-8 col-xs-7">
									<input type="text" class="form-control input-xs" id="typeUser">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-xs-6">
									<span id="msg-user">validation value</span>
								</div>
								<div class="col-xs-6 text-right">
									<div class="input-group">
										<input type="text" class="form-control input-xs" id="search-user" placeholder="search...">
										<div class="input-group-btn">
											<label class="btn btn-default btn-xs" id="clear-user">clear</label>
											<label class="btn btn-default btn-xs" id="save-user">save</label>
										</div>
									</div>
								</div>
							</div><div style="padding:2px"></div>
							<table class="table" style="width: 100%;">
								<th>even</th>
								<th>nUser</th>
								<th>pasUser</th>
								<th>typeUser</th>
								<th>tglAdd</th>
								<tbody class="data-user"></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default boxShadow">
					<div class="panel-body">
						<span><b>Data Barang</b></span>
						<div class="pull-right">
							<span id="iBarang"></span>
							<label class="btn btn-default btn-xs" data-toggle="collapse" data-target="#collapse-barang">form</label>
						</div>
						<div style="width: 100%;height: 1px;background-color: #BFBEBE; padding: 1px;"></div>
						<div style="padding:2px"></div>
						<div class="collapse" id="collapse-barang">
							<div class="row">
								<div class="col-md-4 col-xs-5">nBarang</div>
								<div class="col-md-8 col-xs-7">
									<input type="text" class="form-control input-xs" id="nBarang">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-md-4 col-xs-5">stockBarang</div>
								<div class="col-md-8 col-xs-7">
									<input type="number" class="form-control input-xs" id="stockBarang">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-md-4 col-xs-5">hargaBarang</div>
								<div class="col-md-8 col-xs-7">
									<input type="number" class="form-control input-xs" id="hargaBarang">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-xs-6">
									<span id="msg-barang">validation value</span>
								</div>
								<div class="col-xs-6 text-right">
									<div class="input-group">
										<input type="text" class="form-control input-xs" id="search-barang" placeholder="search...">
										<div class="input-group-btn">
											<label class="btn btn-default btn-xs" id="clear-barang">clear</label>
											<label class="btn btn-default btn-xs" id="save-barang">save</label>
										</div>
									</div>
								</div>
							</div><div style="padding:2px"></div>
							<table class="table" style="width: 100%;">
								<th>even</th>
								<th>nBarang</th>
								<th>stockBarang</th>
								<th>hargaBarang</th>
								<tbody class="data-barang"></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default boxShadow">
					<div class="panel-body">
						<span><b>Data Transaksi</b></span>
						<div class="pull-right">
							<label class="btn btn-default btn-xs" data-toggle="collapse" data-target="#collapse-transaksi">form</label>
						</div>
						<div style="width: 100%;height: 1px;background-color: #BFBEBE; padding: 1px;"></div>
						<div style="padding:2px"></div>
						<div class="collapse" id="collapse-transaksi">
							<table class="table" style="width: 100%;">
								<th>itransaksi</th>
								<th>iUser</th>
								<th><input type="text" class="form-control input-xs" id="search-transaksi" placeholder="search..."></th>
								<tbody class="data-transaksi"></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<table class="table boxShadow" id="tblProducts">
					<th>
						<label class="btn btn-default btn-xs" data-toggle="collapse" data-target="#collapse-total">subtotal</label>
					</th>
					<th>Quantity</th><th>Price</th><th>Sub-Total</th>
					<tbody class="collapse" id="collapse-total">
						<tr>
							<td><input type="text" class="form-control input-xs pnm" value="Product One" name="pnm" /></td>
							<td><input type="text" class="form-control input-xs qty" value="" name="qty"/></td>
							<td><input type="text" class="form-control input-xs price" value="220" name="price"/></td>
							<td><input type="text" class="form-control input-xs subtot" value="0" name="subtot"/></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control input-xs pnm" value="Product Two" name="pnm" /></td>
							<td><input type="text" class="form-control input-xs qty" value="" name="qty"/></td>
							<td><input type="text" class="form-control input-xs price" value="18.32" name="price"/></td>
							<td><input type="text" class="form-control input-xs subtot" value="0" name="subtot"/></td>
						</tr>
						<tr>
							<td></td><td></td><td></td>
							<td><input type="text" class="form-control input-xs grdtot" value="" name=""/></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<table class="table boxShadow">
					<th><label class="btn btn-default btn-xs" id="btn-add">add</label></th>
					<th><label class="btn btn-default btn-xs" id="btn-delAdd">delAll</label></th>
					<th>stockBarang</th>
					<th>hargaBarang</th>
					<th>
						<div class="input-group">
							<input type="text" class="form-control input-xs" id="search-detail" placeholder="search nBarang ...">
							<div class="input-group-btn"><label class="btn btn-default btn-xs" id="btn-detail">find</label></div>
						</div>
					</th>
					<tbody class="data-add"></tbody>
				</table>
			</div>
			<div class="col-md-4">
				<form id="form-transaksi" autocomplete="off">
					<table class="table boxShadow" style="width: 100%;">
						<th><label class="btn btn-default btn-xs" id="btn-delDetail">delAll</label></th>
						<th>
							<span id="msg-transaksi"></span>.<span id="iTransaksi"></span>. 
							<input type="text" name="iTransaksi" style="display: none;">
						</th>
						<th><input type="text" class="form-control input-xs" name="iUser" placeholder="iUser"></th>
						<th><label class="btn btn-default btn-xs" id="clear-transaksi">clear</label></th>
						<th><button type="submit" class="btn btn-default btn-xs" id="save-transaksi">save</button></th>
						<th><span id="totalHarga"></span></th>
						<tbody class="data-detail"></tbody>
					</table>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-6">
						<label class="btn btn-default btn-xs btn-block" data-toggle="collapse" data-target="#collapse-datatable">datatable with parameter</label>
					</div>
					<div class="col-xs-6">
						<label class="btn btn-default btn-xs btn-block" data-toggle="collapse" data-target="#collapse-exel">import exel to database</label>
					</div>
				</div>
				<div class="panel panel-default collapse boxShadow" id="collapse-datatable">
					<div class="panel-body">
						<form id="form-exel" enctype="multipart/form-data">
							<div class="collapse" id="collapse-exel">
								<div class="row">
									<div class="col-md-4 col-xs-5">file exel to import</div>
									<div class="col-md-8 col-xs-7">
										<div class="input-group">
											<input type="file" class="form-control input-xs" name="fileExel">
											<div class="input-group-btn">
												<button class="btn btn-default btn-xs" id="save-exel">save</button>
											</div>
										</div>
									</div>
								</div><div style="padding:2px"></div>
							</div>
						</form>
						<form id="form-datatable">
							<div class="row">
								<div class="col-md-4">
									<input type="text" class="form-control input-xs" name="nUser" placeholder="iUser">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control input-xs" name="pasUser" placeholder="pasUser">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control input-xs" name="typeUser" placeholder="typeUser">
								</div>
							</div><div style="padding:2px"></div>
							<div class="row">
								<div class="col-xs-4">
									<div class="input-group">
										<div class="input-group-btn">
											<label class="btn btn-default btn-xs" id="find-report">report</label>
											<label class="btn btn-default btn-xs" onclick="exportTableToExcel('table-report','data-Report')">exel
											</label>
											<label class="btn btn-default btn-xs" onclick="jQuery('#table-report').print()">pdf</label>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center"><span id="msg-datatable"></span></div>
								<div class="col-xs-4 text-right">
									<div class="input-group">
										<input type="text" name="iUser" style="display: none;">
										<span id="id-datatable"></span>
										<div class="input-group-btn">
											<label class="btn btn-default btn-xs" id="clear-datatable">clear</label>
											<label class="btn btn-default btn-xs" id="find-datatable">find</label>
											<label class="btn btn-default btn-xs" id="save-datatable">save</label>
										</div>
									</div>
								</div>
							</div><div style="padding:2px"></div>
							<div class="table-datatable" style=" display: none;">
								<table class="table" id="table-datatable" style="width: 100%;">
									<thead>
										<tr>
											<th>even</th>
											<th>iUser</th>
											<th>nUser</th>
											<th>passUser</th>
											<th>typeUser</th>
											<th>tglAdd</th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
							<table class="table" id="table-report" style="display: none;">
								<thead>
									<tr>
										<th>iUser</th>
										<th>nUser</th>
										<th>passUser</th>
										<th>typeUser</th>
										<th>tglAdd</th>
									</tr>
								</thead>
								<tbody id="data-report"></tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="loader" style="display: none;">
		<h3><i class="fa fa-spinner fa-spin"></i></h3> prosesing execution
	</div>
	<script type="text/javascript" src="aset/jquery.js"></script>
	<script type="text/javascript" src="aset/bootstrap.js"></script>
	<script type="text/javascript" src="aset/datatable.js"></script>
	<script type="text/javascript" src="aset/exelFunction.js"></script>
	<script type="text/javascript" src="aset/print.js"></script>
	<script type="text/javascript" src="aset/block.ui.js"></script>
	<script type="text/javascript">
		var loader = $('#loader');
		$(document).ajaxStart(function () {
			$.blockUI({baseZ: 1500,message: loader})
		}).ajaxStop($.unblockUI);
		$(document).ajaxStop($.unblockUI);

		$(document).ready(function(){
			$('#iUserN').text(window.localStorage.getItem('iUser'));
			$('#nUserN').text(window.localStorage.getItem('nUser'));
			$('#typeUserN').text(window.localStorage.getItem('typeUser'));

			$('#btn-logout').click(function(){
				window.localStorage.removeItem('iUser');
				location.replace('front.php');
			});

			$('.pnm, .price, .subtot, .grdtot').prop('readonly', true);
			var $tblrows = $("#tblProducts tbody tr");
			$tblrows.each(function (index) {
				var $tblrow = $(this);
				$tblrow.find('.qty').on('change', function () {
					var qty = $tblrow.find("[name=qty]").val();
					var price = $tblrow.find("[name=price]").val();
					var subTotal = parseInt(qty, 10) * parseFloat(price);
					if (!isNaN(subTotal)) {
						$tblrow.find('.subtot').val(subTotal.toFixed(2));
						var grandTotal = 0;
						$(".subtot").each(function () {
							var stval = parseFloat($(this).val());
							grandTotal += isNaN(stval) ? 0 : stval;
						});
						$('.grdtot').val(grandTotal.toFixed(2));
					}
				});
			});
			// transaksi ____________
			function transaksiData(){
				$.getJSON('back.php?even=transaksiData',function(output){
					var row=''; var a=1;
					if(output.valid==true){
						$.each(output.data,function(i,b){
							row+=`
							<tr>
								<td>
									<div class="input-group-btn">
										<label class="btn btn-default btn-xs btn-edit" 
										iTransaksi="`+b.iTransaksi+`" iUser="`+b.iUser+`" 
										>e</label>
										<label class="btn btn-default btn-xs btn-delet" iTransaksi="`+b.iTransaksi+`">d</label>
									</div>
								</td>
								<td>`+b.iTransaksi+` . `+b.iUser+`</td>
								<td>`+b.tglAdd+`</td>
							</tr>
							`;
						});
					}
					$('.data-transaksi').html(row);
				},'json');
			}transaksiData();
			$('#search-transaksi').on('keyup', function(){
				var value = $(this).val().toLowerCase();
				$('.data-transaksi tr').filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);})
			});
			function transaksiClear(){
				$('#iTransaksi').text('');$('#msg-transaksi').text('validation value');
				$('.data-detail').html('');$('#form-transaksi')[0].reset();
			}
			$('#clear-transaksi').click(function(){
				transaksiClear();
			});
			$('#btn-detail').click(function(){
				$.post('back.php?even=barangLike',{nBarang:$('#search-detail').val()},function(output){
					var row='';
					if(output.valid==true){
						$.each(output.data,function(i,b){
							row+=`
							<tr>
								<td>
									<input type="checkbox" class="nomer" value="` + b.iBarang + `">
								</td>
								<td>`+b.nBarang+`</td>
								<td>`+b.stockBarang+`</td>
								<td>`+b.hargaBarang+`</td>
								<td><input type="number" class="form-control input-xs"></td>
							</tr>
							`;
						});
						$('.data-add').html(row);
					}
				},'json');
			});
			$('#btn-delAdd').click(function(){
				$('.data-add').html('');
			});
			function cekData(value){
				var contents={},text;$(value).each(function(){
					text=$(this).text();if(!(text in contents)){contents[text]=true;}else{$(this).parent().parent().remove();}
				});
			}
			function totalHarga(){
				var total=0;$('.data-detail').find('.total').each(function(){var stval=parseFloat($(this).html());total+=stval;});
				$('#totalHarga').text(total);
			}
			var rowArray=[];function dataDetail(){
				var row='';for(var i=0;i<rowArray.length;i++){
					var total=parseFloat(rowArray[i].hargaBarang)*parseFloat(rowArray[i].qtyDetail);
					row+=`
					<tr>
						<td>
							<label class="btn btn-default btn-xs" title="delet">d</label>
							<input type="text" name="iDetail[]" value="`+rowArray[i].iDetail+`" style="display:none;">
							<input type="text" name="iBarang[]" value="`+rowArray[i].iBarang+`" style="display:none;">
							<input type="number" name="hargaBarang[]" value="`+rowArray[i].hargaBarang+`" style="display:none;">
							<input type="number" name="qtyDetail[]" value="`+rowArray[i].qtyDetail+`" style="display:none;">
						</td>
						<td><span>`+rowArray[i].iBarang+`</span></td>
						<td>`+rowArray[i].nBarang+`</td>
						<td>`+rowArray[i].hargaBarang+`</td>
						<td>`+rowArray[i].qtyDetail+`</td>
						<td class="total">`+total+`</td>
					</tr>`;
				}
				$('.data-detail').html(row);
			}
			$('#btn-add').click(function(){
				$('.data-add input[type="checkbox"]:checked').each(function(){
					var iDetail=''; 
					var iBarang=$(this).parents('tr').find('.nomer').val(); 
					var nBarang=$(this).parents('tr').find('td:eq(1)').html(); 
					var hargaBarang=$(this).parents('tr').find('td:eq(3)').html(); 
					var qtyDetail=$(this).parents('tr').find('.input-xs').val(); 
					var arrays={iDetail:iDetail,iBarang:iBarang,nBarang:nBarang,hargaBarang:hargaBarang,qtyDetail:qtyDetail};
					rowArray.push(arrays);dataDetail();
				});
				cekData('.data-detail span');totalHarga();
			});
			$('.data-detail').on('click','label',function(){
				$(this).parent().parent().remove();totalHarga();
			});
			$('#btn-delDetail').click(function(){
				$('.data-detail').html('');
			});
			$('#save-transaksi').click(function(){
				if($('#iTransaksi').text()==''){
					$.ajax({
						url:'back.php?even=transaksiAdd',data:$('#form-transaksi').serialize(),type:'post',dataType:'json',cache:false,
						success: function(output){
							if(output.valid==true){$('#msg-transaksi').text('add success');transaksiData();transaksiClear();}
						}
					});return false;
				}else{
					$.ajax({
						url:'back.php?even=transaksiEdit',data:$('#form-transaksi').serialize(),type:'post',dataType:'json',cache:false,
						success: function(output){
							console.log(output.data);
							console.log(output.id);
							if(output.valid==true){$('#msg-transaksi').text('edit success');transaksiData();transaksiClear();}
						}
					});return false;
				}
			});
			$('.data-transaksi').on('click','.btn-edit',function(){
				$('#form-transaksi #iTransaksi').text($(this).attr('iTransaksi'));
				$('#form-transaksi [name="iTransaksi"]').val($(this).attr('iTransaksi'));
				$('#form-transaksi [name="iUser"]').val($(this).attr('iUser'));
				$.post('back.php?even=transaksiWhere',{id:$('#form-transaksi #iTransaksi').text()},function(output){
					var row='';
					if(output.valid==true){
						$.each(output.data,function(i,b){
							var iDetail=b.iDetail; 
							var iBarang=b.iBarang; 
							var nBarang=b.nBarang;
							var hargaBarang=b.hargaBarang;
							var qtyDetail=b.qtyDetail;
							var arrays={iDetail:iDetail,iBarang:iBarang,nBarang:nBarang,hargaBarang:hargaBarang,qtyDetail:qtyDetail};
							rowArray.push(arrays);dataDetail();
						});
						cekData('.data-detail span');totalHarga();
					}
				},'json');
			});
			$('.data-transaksi').on('click','.btn-delet',function(){
				$.post('back.php?even=transaksiDelet',{iTransaksi:$(this).attr('iTransaksi')},function(output){
					if(output.valid==true){barangData();userClear();$('#msg-transaksi').text('delet success');}
				},'json');
			});

			$('#form-exel').submit(function(event){
				event.preventDefault();
				var fileExtension = ['xls'];
				if ($.inArray($('[name="fileExel"]').val().split('.').pop().toLowerCase(), fileExtension) == -1) {
					$('#msg-datatable').text('format file harus : '+fileExtension.join(', '));return false;
				}
				$.ajax({
					method:'POST',url:'back.php?even=userImport',data:new FormData(this),contentType:false,cache:false,processData:false,
					success:function(output){
						output = JSON.parse(output);
						if(output.valid==true){
							$('#msg-datatable').text('import success');clearDatatable();
						}else{
							$('#msg-datatable').text('import error');clearDatatable();
						}
					}
				})
			});
			$('#find-report').click(function(){
				$('#table-report').show();
				$.ajax({
					url:'back.php?even=userLike',data:$('#form-datatable').serialize(),type:'post',cache:false,dataType:'json',
					success:function(output){
						var row='';//var output=json.parse(output);
						if(output.valid==true){
							$.each(output.data,function(i,b){
								row+=`
								<tr>
									<td>`+b.iUser+`</td>
									<td>`+b.nUser+`</td>
									<td>`+b.pasUser+`</td>
									<td>`+b.typeUser+`</td>
									<td>`+b.tglAdd+`</td>
								</tr>
								`;
							});
						}
						$('#data-report').html(row);
					}
				});return false;
			});
			$('#find-datatable').click(function(){
				$('#table-datatable').DataTable().clear().draw();
				$.ajax({
					url:'back.php?even=userLike',data:$('#form-datatable').serialize(),type:'post',cache:false,dataType:'json',
					success:function(output){
						//var output = JSON.parse(output); /*jika tidak pakai dataType:'json';*/
						var row=[];$('.table-datatable').show();
						if(output.valid==true){
							$.each(output.data,function(i,b){
								var even=`
								<div class="input-group-btn">
									<label class="btn btn-default btn-xs btn-edit" title="edit" 
									iUser="`+b.iUser+`" nUser="`+b.nUser+`" pasUser="`+b.pasUser+`" typeUser="`+b.typeUser+`"
									>e</label>
									<label class="btn btn-default btn-xs btn-delet" title="delet"  iUser="`+b.iUser+`">d</label>
								</div>
								`;
								row.push([
									even,b.iUser,b.nUser,b.pasUser,b.typeUser,b.tglAdd
									]);
							});
						}
						$('#table-datatable').DataTable().rows.add(row).draw();
					}
				});return false;
			});
			function clearDatatable(){
				$('#table-datatable').DataTable().clear().draw();$('.table-datatable').hide();$('#data-report').html('');
				$('#table-report').hide();$('#form-datatable #id-datatable').text('');$('#form-datatable')[0].reset();
			}
			$('#clear-datatable').click(function(){
				clearDatatable();
			});
			$('#save-datatable').click(function(){
				if($('#id-datatable').text()==''){
					$.ajax({
						url:'back.php?even=userAdd',data:$('#form-datatable').serialize(),type:'post',cache:false,dataType:'json',
						success:function(output){
							if(output.valid==true){
								$('#msg-datatable').text('add success');clearDatatable();
							}else{
								$('#msg-datatable').text('add error');clearDatatable();
							}
						}
					});return false;
				}else{
					$.ajax({
						url:'back.php?even=userEdit',data:$('#form-datatable').serialize(),type:'post',cache:false,dataType:'json',
						success:function(output){
							if(output.valid==true){
								$('#msg-datatable').text('edit success');clearDatatable();
							}else{
								$('#msg-datatable').text('edit error');clearDatatable();
							}
						}
					});return false;
				}
			});
			$('#table-datatable').on('click','.btn-edit',function(){
				$('#form-datatable #id-datatable').text('id:'+$(this).attr('iUser'));
				$('#form-datatable [name="iUser"]').val($(this).attr('iUser'));
				$('#form-datatable [name="nUser"]').val($(this).attr('nUser'));
				$('#form-datatable [name="pasUser"]').val($(this).attr('pasUser'));
				$('#form-datatable [name="typeUser"]').val($(this).attr('typeUser'));
			});
			$('#table-datatable').on('click','.btn-delet',function(){
				$.post('back.php?even=userDelet',{iUser:$(this).attr('iUser')},function(output){
					if(output.valid==true){$('#msg-datatable').text('delet success');clearDatatable();}
				},'json');
			});

			// user ____________
			function userData(){
				$.getJSON('back.php?even=userData',function(output){
					var row='';
					if(output.valid==true){
						$.each(output.data,function(i,b){
							row+=`
							<tr>
								<td>
									<div class="input-group-btn">
										<label class="btn btn-default btn-xs btn-edit" 
										iUser="`+b.iUser+`" nUser="`+b.nUser+`" pasUser="`+b.pasUser+`" typeUser="`+b.typeUser+`"
										>e</label>
										<label class="btn btn-default btn-xs btn-delet" iUser="`+b.iUser+`">d</label>
									</div>
								</td>
								<td>`+b.iUser+`.`+b.nUser+`</td>
								<td>`+b.pasUser+`</td>
								<td>`+b.typeUser+`</td>
								<td>`+b.tglAdd+`</td>
							</tr>
							`;
						});
					}
					$('.data-user').html(row);
				},'json');
			}userData();
			$('#search-user').on('keyup', function(){
				var value = $(this).val().toLowerCase();
				$('.data-user tr').filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);})
			});
			function userClear(){
				$('#iUser').text('');$('#nUser').val('');$('#pasUser').val('');$('#typeUser').val('');
				$('#msg-user').text('validation value');
			}
			$('#clear-user').click(function(){
				userClear();
			});
			$('#save-user').click(function(){
				if($('#iUser').text()==''){
					$.post('back.php?even=userAdd',{nUser:$('#nUser').val(),pasUser:$('#pasUser').val(),typeUser:$('#typeUser').val()},function(output){
						if(output.valid==true){userData();userClear();$('#msg-user').text('add success');}
					},'json');
				}else{
					$.post('back.php?even=userEdit',{iUser:$('#iUser').text(),nUser:$('#nUser').val(),pasUser:$('#pasUser').val(),typeUser:$('#typeUser').val()},function(output){
						if(output.valid==true){userData();userClear();$('#msg-user').text('edit success');}
					},'json');
				}
				
			});
			$('.data-user').on('click','.btn-edit',function(){
				$('#iUser').text($(this).attr('iUser'));
				$('#nUser').val($(this).attr('nUser'));
				$('#pasUser').val($(this).attr('pasUser'));
				$('#typeUser').val($(this).attr('typeUser'));
			});
			$('.data-user').on('click','.btn-delet',function(){
				$.post('back.php?even=userDelet',{iUser:$(this).attr('iUser')},function(output){
					if(output.valid==true){userData();userClear();$('#msg-user').text('delet success');}
				},'json');
			});
			// barang ____________
			function barangData(){
				$.getJSON('back.php?even=barangData',function(output){
					var row='';
					if(output.valid==true){
						$.each(output.data,function(i,b){
							row+=`
							<tr>
								<td>
									<div class="input-group-btn">
										<label class="btn btn-default btn-xs btn-edit" 
										iBarang="`+b.iBarang+`" nBarang="`+b.nBarang+`" 
										stockBarang="`+b.stockBarang+`" hargaBarang="`+b.hargaBarang+`"
										>e</label>
										<label class="btn btn-default btn-xs btn-delet" iBarang="`+b.iBarang+`">d</label>
									</div>
								</td>
								<td>`+b.iBarang+`.`+b.nBarang+`</td>
								<td>`+b.stockBarang+`</td>
								<td>`+b.hargaBarang+`</td>
							</tr>
							`;
						});
					}
					$('.data-barang').html(row);
				},'json');
			}barangData();
			$('#search-barang').on('keyup', function(){
				var value = $(this).val().toLowerCase();
				$('.data-barang tr').filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);})
			});
			function barangClear(){
				$('#iBarang').text('');$('#nBarang').val('');$('#stockBarang').val('');$('#hargaBarang').val('');
				$('#msg-barang').text('validation value');
			}
			$('#clear-barang').click(function(){
				barangClear();
			});
			$('#save-barang').click(function(){
				if($('#iBarang').text()==''){
					$.post('back.php?even=barangAdd',{nBarang:$('#nBarang').val(),stockBarang:$('#stockBarang').val(),hargaBarang:$('#hargaBarang').val()},function(output){
						if(output.valid==true){barangData();barangClear();$('#msg-barang').text('add success');}
					},'json');
				}else{
					$.post('back.php?even=barangEdit',{iBarang:$('#iBarang').text(),nBarang:$('#nBarang').val(),stockBarang:$('#stockBarang').val(),hargaBarang:$('#hargaBarang').val()},function(output){
						if(output.valid==true){barangData();barangClear();$('#msg-barang').text('edit success');}
					},'json');
				}
			});
			$('.data-barang').on('click','.btn-edit',function(){
				$('#iBarang').text($(this).attr('iBarang'));
				$('#nBarang').val($(this).attr('nBarang'));
				$('#stockBarang').val($(this).attr('stockBarang'));
				$('#hargaBarang').val($(this).attr('hargaBarang'));
			});
			$('.data-barang').on('click','.btn-delet',function(){
				$.post('back.php?even=barangDelet',{iBarang:$(this).attr('iBarang')},function(output){
					if(output.valid==true){barangData();userClear();$('#msg-barang').text('delet success');}
				},'json');
			});
		});
	</script>
</body>
</html>