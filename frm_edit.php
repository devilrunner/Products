<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
//public function select($table, $rows = '*', $join = null, $where = null,
//$order = null, $limit = null){
$db->select('products', $rows = '*', $join = null, $where =" prod_id ='".$_GET['prod_id']."' ", $order = null, $limit = null); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
foreach ($res as $key => $value) {?>

<center>
<form action="update.php" name="frm_insert" method="POST">
	<title>:: แก้ไขการสั่งซื้อสินค้า ::</title>

	<body>


		<table border="1" style="border:5px #ff8383 solid;border-collapse:collapse; ">
			<tr>
				<td colspan="2" bgcolor="#ff8383"><center><b>:: แก้ไขการสั่งซื้อสินค้า ::</b></center></td>
			</tr>
			<tr>
				<td ><b>&nbsp;หมายเลขผลิตภัณฑ์ : </b></td>
				<td ><input type="text" name="prod_id" value="<?=$value['prod_id']?>"></td>
			</tr>
			<tr>
				<td><b>&nbsp;หมายเลขลูกค้า : </b></td>
				<td><input type="text" name="vend_id" value="<?=$value['vend_id']?>"></td>
			</tr>
			<tr>
				<td><b>&nbsp;ชื่อลูกค้า : </b></td>
				<td><input type="text" name="prod_name" value="<?=$value['prod_name']?>"></td>
			</tr>
			<tr>
				<td><b>&nbsp;ราคาสินค้า : </b></td>
				<td><input type="text" name="prod_price" value="<?=$value['prod_price']?>"></td>
			</tr>
			<tr>
				<td><b>&nbsp;รายละเอียดสินค้า : </b></td>
				<td><textarea rows="4" cols="30" name="prod_desc" ><?=$value['prod_desc']?></textarea></td>
				</tr>
				<tr>
					<td colspan="2" bgcolor="#ff8383"><center>
						<button type="submit" name="btm_submit"><img src="./img/check_01.png" width="24" height="24" align="absmiddle" /></button>
						<button type="back" name="btm_submit" onClick="window.history.back()"><img src="./img/back_01.png" width="24" height="24" align="absmiddle" /></button>
					</center></td>
				</tr>
</table>

<br>
</body>
</form>
</center>

<?php

}

?>
