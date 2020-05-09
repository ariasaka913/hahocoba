<?php 
$c=mysqli_connect('localhost','root','','cjdw');
if($_GET['even']=='getData'){
	$data=array();
	$q=mysqli_query($c,"SELECT*from auser");
	while($b=mysqli_fetch_array($q)){
		$row=array(
			'iUser'=>$b['iUser'],
			'nUser'=>$b['nUser'],
			'typeUser'=>$b['typeUser'],
			'tglAdd'=>$b['tglAdd'],
			);
		array_push($data, $row);
	}
	$response['data']=$data;
	echo json_encode($response,JSON_PRETTY_PRINT);
}

if($_GET['even']=='getData1'){
	$typeUser=$_POST['typeUser'];
	$response=array();
	$q=mysqli_query($c,"SELECT*from auser where typeUser='$typeUser' ");
	while($b=mysqli_fetch_array($q)){
		$data['iUser']=$b['iUser'];
		$data['nUser']=$b['nUser'];
		$data['pasUser']=$b['pasUser'];
		$data['typeUser']=$b['typeUser'];
		$data['tglAdd']=$b['tglAdd'];
		array_push($response, $data);
	}
	echo json_encode($response,JSON_PRETTY_PRINT);
}
?>