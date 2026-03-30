<?php
$str = file_get_contents('data.json');
$json = json_decode($str, true);

$str2 = file_get_contents("page.json");
$json_page = json_decode($str2, true);

$admin_email = $json['email'];
$admin_password = $json['password'];
$page = $json_page["page"];


?>