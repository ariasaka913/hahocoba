<?php 
$data=file_get_contents('json.json');
$user=json_decode($data,true);
var_dump($user);
echo $user[0]["guru"]['guru1'];
?>