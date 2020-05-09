<?php 
$c=mysqli_connect('localhost','root','','cjdw');
if($_GET['even']=='login'){
	$response=array();$data=array();
	$iUser=$_POST['iUser'];
	$pasUser=$_POST['pasUser'];
	$q=mysqli_query($c,"SELECT*from aUser where iUser='$iUser' and pasUser='$pasUser' ");
	if(mysqli_num_rows($q)>0){
		while($b=mysqli_fetch_array($q)){
			$row=array(
				'iUser'=>$b['iUser'],
				'nUser'=>$b['nUser'],
				'typeUser'=>$b['typeUser'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
// user ______________________
if($_GET['even']=='userData'){
	$response=array();$data=array();
	$q=mysqli_query($c,"SELECT*from auser limit 3");
	if(mysqli_num_rows($q)>0){
		while($b=mysqli_fetch_array($q)){
			$row=array(
				'iUser'=>$b['iUser'],
				'nUser'=>$b['nUser'],
				'pasUser'=>$b['pasUser'],
				'typeUser'=>$b['typeUser'],
				'tglAdd'=>$b['tglAdd'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='userLike'){
	$response=array();$data=array();
	$nUser=$_POST['nUser'];
	$pasUser=$_POST['pasUser'];
	$typeUser=$_POST['typeUser'];
	$q="SELECT*from auser where 1";
	if($nUser!=''){
		$q.=" and nUser like '%".$nUser."%' ";
	}
	if($pasUser!=''){
		$q.=" and pasUser like '%".$pasUser."%' ";
	}
	if($typeUser!=''){
		$q.=" and typeUser like '%".$typeUser."%' ";
	}
	$q0=mysqli_query($c,$q);
	if(mysqli_num_rows($q0)>0){
		while($b=mysqli_fetch_array($q0)){
			$row=array(
				'iUser'=>$b['iUser'],
				'nUser'=>$b['nUser'],
				'pasUser'=>$b['pasUser'],
				'typeUser'=>$b['typeUser'],
				'tglAdd'=>$b['tglAdd'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='userImport'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	include'pluginImportExel.php';
	$target = basename($_FILES['fileExel']['name']) ;
	move_uploaded_file($_FILES['fileExel']['tmp_name'], $target);
	chmod($_FILES['fileExel']['name'],0777);
	$data = new Spreadsheet_Excel_Reader($_FILES['fileExel']['name'],false);
	$jumlah_baris = $data->rowcount($sheet_index=0);
	$berhasil = 0;
	for ($i=2; $i<=$jumlah_baris; $i++){
		$nUser     = $data->val($i, 1);
		$pasUser   = $data->val($i, 2);
		$typeUser  = $data->val($i, 3);
		$q=mysqli_query($c,"INSERT into auser values(null,'$nUser','$pasUser','$typeUser','$tglAdd')");
	}
	if($q){
		unlink($_FILES['fileExel']['name']);
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='userAdd'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$nUser=$_POST['nUser'];
	$pasUser=$_POST['pasUser'];
	$typeUser=$_POST['typeUser'];
	$q=mysqli_query($c,"INSERT into auser values(null,'$nUser','$pasUser','$typeUser','$tglAdd')");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	// for ($i=0; $i < 3000; $i++) { 
	// 	$n='n'.$i;
	// 	$q=mysqli_query($c,"INSERT into auser values(null,'$n','1','1','$tglAdd')");
	// }
	// $response['valid']=true;
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='userEdit'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$iUser=$_POST['iUser'];
	$nUser=$_POST['nUser'];
	$pasUser=$_POST['pasUser'];
	$typeUser=$_POST['typeUser'];
	$q=mysqli_query($c,"UPDATE auser set nUser='$nUser',pasUser='$pasUser',typeUser='$typeUser' where iUser='$iUser' ");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='userDelet'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$iUser=$_POST['iUser'];
	$q=mysqli_query($c,"DELETE from auser where iUser='$iUser' ");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
// barang ______________________
if($_GET['even']=='barangData'){
	$response=array();$data=array();
	$q=mysqli_query($c,"SELECT*from abarang");
	if(mysqli_num_rows($q)>0){
		while($b=mysqli_fetch_array($q)){
			$row=array(
				'iBarang'=>$b['iBarang'],
				'nBarang'=>$b['nBarang'],
				'stockBarang'=>$b['stockBarang'],
				'hargaBarang'=>$b['hargaBarang'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='barangLike'){
	$response=array();$data=array();$nBarang=$_POST['nBarang'];
	$q=mysqli_query($c,"SELECT*from abarang where nBarang like '%$nBarang%' ");
	if(mysqli_num_rows($q)>0){
		while($b=mysqli_fetch_array($q)){
			$row=array(
				'iBarang'=>$b['iBarang'],
				'nBarang'=>$b['nBarang'],
				'stockBarang'=>$b['stockBarang'],
				'hargaBarang'=>$b['hargaBarang'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='barangAdd'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$nBarang=$_POST['nBarang'];
	$stockBarang=$_POST['stockBarang'];
	$hargaBarang=$_POST['hargaBarang'];
	$q=mysqli_query($c,"INSERT into abarang values(null,'$nBarang','$stockBarang','$hargaBarang')");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='barangEdit'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$iBarang=$_POST['iBarang'];
	$nBarang=$_POST['nBarang'];
	$stockBarang=$_POST['stockBarang'];
	$hargaBarang=$_POST['hargaBarang'];
	$q=mysqli_query($c,"UPDATE abarang set nBarang='$nBarang',stockBarang='$stockBarang',
		hargaBarang='$hargaBarang' where iBarang='$iBarang' ");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='barangDelet'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$iBarang=$_POST['iBarang'];
	$q=mysqli_query($c,"DELETE from abarang where iBarang='$iBarang' ");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
// transaksi ______________________
if($_GET['even']=='transaksiData'){
	$response=array();$data=array();
	$q=mysqli_query($c,"SELECT*from atransaksi");
	if(mysqli_num_rows($q)>0){
		while($b=mysqli_fetch_array($q)){
			$row=array(
				'iTransaksi'=>$b['iTransaksi'],
				'iUser'=>$b['iUser'],
				'tglAdd'=>$b['tglAdd'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='transaksiAdd'){
	$response=array();$data=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$iUser=$_POST['iUser'];
	$iBarang=$_POST['iBarang'];
	$qtyDetail=$_POST['qtyDetail'];
	$hargaDetail=$_POST['hargaBarang'];
	$j=count($iBarang);
	$q=mysqli_query($c,"INSERT INTO aTransaksi values(null,'$iUser','$tglAdd')");
	if($q){
		$q0=mysqli_query($c,"SELECT max(iTransaksi) as id from aTransaksi");
		$b=mysqli_fetch_assoc($q0);
		$id=$b['id'];
		for ($i=0; $i < $j; $i++) { 
			$q1=mysqli_query($c,"INSERT into aDetail values(null,'$id','$iBarang[$i]','$qtyDetail[$i]','$hargaDetail[$i]')");
		}
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='transaksiWhere'){
	$response=array();$data=array();
	$id=$_POST['id'];
	$q=mysqli_query($c,"SELECT*from aDetail inner join abarang on aDetail.iBarang=abarang.iBarang where iTransaksi='$id' ");
	if(mysqli_num_rows($q)>0){
		while($b=mysqli_fetch_array($q)){
			$row=array(
				'iDetail'=>$b['iDetail'],
				'iBarang'=>$b['iBarang'],
				'nBarang'=>$b['nBarang'],
				'qtyDetail'=>$b['qtyDetail'],
				'hargaBarang'=>$b['hargaDetail'],
				);
			array_push($data, $row);
		}
		$response['valid']=true;$response['data']=$data;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='transaksiEdit'){
	$response=array();$response['id']=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$id=$_POST['iTransaksi'];
	$iUser=$_POST['iUser'];
	$iDetail=$_POST['iDetail'];
	$iBarang=$_POST['iBarang'];
	$qtyDetail=$_POST['qtyDetail'];
	$hargaDetail=$_POST['hargaBarang'];
	$j=count($iDetail);
	$q=mysqli_query($c,"UPDATE aTransaksi set iUser='$iUser' where iTransaksi='$id' ");
	if($q){
		$iDetailCek='';
		for ($i=0; $i < $j; $i++) { 
			if($iDetail[$i]==''){
				$q1=mysqli_query($c,"INSERT into aDetail values(null,'$id','$iBarang[$i]','$qtyDetail[$i]','$hargaDetail[$i]')");
				if($q1){
					$q10=mysqli_query($c,"SELECT max(iDetail) iDetail from aDetail where iTransaksi='$id' ");
					while($b10=mysqli_fetch_array($q10)){
						$iDetailCek.=" and iDetail!='".$b10['iDetail']."' ";
					}
				}
			}else{
				$q1=mysqli_query($c,"UPDATE aDetail set iBarang='$iBarang[$i]',qtyDetail='$qtyDetail[$i]',hargaDetail='$hargaDetail[$i]' 
					where iDetail='$iDetail[$i]' ");
				$iDetailCek.=" and iDetail!='".$iDetail[$i]."' ";
			}
		}
		$q2=mysqli_query($c,"SELECT iDetail from aDetail where iTransaksi='$id' ".$iDetailCek);
		while($b=mysqli_fetch_array($q2)){
			$q3=mysqli_query($c,"DELETE from aDetail where iDetail='".$b['iDetail']."' ");
		}
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
if($_GET['even']=='transaksiDelet'){
	$response=array();$tglAdd=gmdate('Y-m-d H:i:s',time()+(60*60*7));
	$iBarang=$_POST['iBarang'];
	$q=mysqli_query($c,"DELETE from abarang where iBarang='$iBarang' ");
	if($q){
		$response['valid']=true;
	}else{
		$response['valid']=false;
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
?>