<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->select('vendors'); // Table name
echo "<pre>";
$res = $db->getResult();
print_r($res);