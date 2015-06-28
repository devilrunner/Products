<center>
<form action="insert.php" name="frm_insert" method="POST">
	<title>:: สั่งซื้อสินค้า ::</title>

	<body>
	<tbody>
		<table border="1" bordercolor="#e85426" cellpadding="0" cellspacing="0" >
			<tr>
				<td colspan="2" bgcolor="#ff8383"><center><b>:: สั่งซื้อสินค้า ::</b></center></td>
			</tr>
			<tr>
				<td >&nbsp;หมายเลขผลิตภัณฑ์ : </td>
				<td ><input type="text" name="prod_id"></td>
			</tr>
			<tr>
				<td>&nbsp;หมายเลขลูกค้า : </td>
				<td><input type="text" name="vend_id"></td>
			</tr>
			<tr>
				<td>&nbsp;ชื่อลูกค้า : </td>
				<td><input type="text" name="prod_name"></td>
			</tr>
			<tr>
				<td>&nbsp;ราคาสินค้า : </td>
				<td><input type="text" name="prod_price"></td>
			</tr>
			<tr>
				<td>&nbsp;รายละเอียดสินค้า : </td>
				<td><textarea rows="4" cols="30" name="prod_desc" ></textarea></td>
			</tr>
			<tr>
				<td colspan="2" bgcolor="#ff8383"><center>
					<button type="submit" name="btm_submit"><img src="./img/check_01.png" width="24" height="24" align="absmiddle" /></button>
					<button type="reset" name="btm_reset"><img src="./img/reset_01.png" width="24" height="24" align="absmiddle" /></button>
				</center></td>
			</tr>
</table>
<br>

</tbody>
</body>
</form>
</center>
