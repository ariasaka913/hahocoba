<?php 

// $siswa=[
// 	[
// 		"nama"=>"cjdw",
// 		"umur"=>17,
// 		"nrp"=>"51411040022",
// 		"lulus"=>true
// 	],
// 	[
// 		"nama"=>"cjdw1",
// 		"umur"=>17,
// 		"nrp"=>"51411040022",
// 		"lulus"=>true
// 	],
// 	[
// 		"nama"=>"cjdw2",
// 		"umur"=>17,
// 		"nrp"=>"51411040022",
// 		"lulus"=>true
// 	]
// ];
// $data=json_encode($siswa);
// echo $data;


$db=new PDO('mysql:host=localhost;dbname=cjdw','root','');
$db=$db->prepare('SELECT*FROM user');
$db->execute();
$user=$db->fetchAll(PDO::FETCH_ASSOC);
$data=json_encode($user);
echo $data;
?>