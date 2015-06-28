<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$data = $db->escapeString("name5@email.com"); // Escape any input before insert
$db->insert('products',array('prod_id'=>$_POST['prod_id'],'vend_id'=>$_POST['vend_id'],'prod_name'=>$_POST['prod_name'],'prod_price'=>$_POST['prod_price'],'prod_desc'=>$_POST['prod_desc']));  // Table name, column names and respective values
$res = $db->getResult();
if ($res) {
  echo "insert Success";
  header('location:select.php');
}
//print_r($res);//print_r = echo
?>
