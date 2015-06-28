<html>
	<head>
		<meta charset="utf-8">
			<title>Select Bootstrap</title>

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
			<!-- Optional theme -->
			<link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.min.css">
			<!-- Latest compiled and minified JavaScript -->
			<script src="asset/bootstrap/js/bootstrap.min.js"></script>

<!-- border="1" style="border:5px #ff8383 solid;border-collapse:collapse;   /// navbar-fixed-top"-->

	</head>
			<body>
				<div class="container theme-showcase" role="main">


					<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Shop</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


				<div class="jumbotron" style="margin-top : 70px">
        <h1>Select Bootstrap</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
      </div>

				<?php
				include('class/mysql_crud.php');
				$db = new Database();
				$db->connect();
				//public function select($table, $rows = '*', $join = null, $where = null,
				//$order = null, $limit = null){
				$db->select('products'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
				$res = $db->getResult();
				//echo "<pre>";
				//print_r($res);

				?>

				<a href="frm_insert.php?prod_id=<?=$value['prod_id']?>" class="btn btn-success btn-lg text-right" role="button">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> INSERT</a><br><br>

				<table class="table table-hover">
							<tr class="success">
								<td ><strong>prod_id</strong></td>
								<td ><strong>vend_id</strong></td>
								<td ><strong>prod_name</strong></td>
								<td ><strong>prod_price</strong></td>
								<td ><strong>prod_desc</strong></td>
								<td ><strong>edit</strong></td>
								<td ><strong>delete</strong></td>
							</tr>

				<?php

				foreach($res as $key => $value){?>
						<tr>
							<td><?=$value['prod_id']?></td>
							<td><?=$value['vend_id']?></td>
							<td><?=$value['prod_name']?></td>
							<td ><?=$value['prod_price']?></td>
							<td><?=$value['prod_desc']?></td>



							<td><button type="button" class="btn btn-outline-inverse btn-lg" aria-label="Left Align"><a href="frm_edit.php?prod_id=<?=$value['prod_id']?>"><span class="glyphicon glyphicon-pencil" ></span></a></button></td>
							<td><button type="button" class="btn btn-outline-inverse btn-lg" aria-label="Left Align"><a href="delete.php?prod_id=<?=$value['prod_id']?>"><span class="glyphicon glyphicon-trash" ></span></a></button></td>
						</tr>
						<?php
				}
				?>
				</table>

			</div>
			</body>
</html>
