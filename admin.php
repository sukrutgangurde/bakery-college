<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php' ?>
	<title></title>
</head>

<body>
	<?php

	if (isset($_POST["btnsave"])) {
		extract($_POST);
		pg_query("insert into tbluser(uname,upass,email) values ('$txtname','$txtpass','$txtemail')");
	}
	?>
	<?php include 'menu.php' ?>
	<?php include 'bg1.php' ?>

	<div class="row">
		<div class="col-md-6">
			<form method="post">
				<table class="table">
					<tr>
						<td>
							Name
						</td>
						<td>
							<input type="text" name="txtname" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="txtpass" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="text" name="txtemail" class="form-control">
						</td>
					</tr>
					<tr>
						<Td colspan=2 align="center">
							<input type="submit" class="btn btn-success" name="btnsave" value="Sign Up">
						</Td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-md-6">
			<img src="proimages/register.jpg" width="100%">
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>

</html>