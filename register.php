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
		pg_query("insert into tbcustomer(cname,cpass,cemail,caddr,ccon,cgender) values ('$txtname','$txtpass','$txtemail','$txtaddr','$txtccon','$rbgender')");
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
							<input type="text" required pattern="^[a-z]+$" name="txtname" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" required name="txtpass" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="text" name="txtemail" pattern="^[a-z]+[0-9]*@[a-z]+\.[a-z]{2,3}$" required class="form-control">
						</td>
					</tr>
					<Tr>
						<td>
							Address
						</td>
						<td>
							<textarea name="txtaddr" required></textarea>
						</td>
					</Tr>
					<tr>
						<td>
							Contact no.
						</td>
						<td>
							<input type="text" name="txtccon" pattern="^[0-9]{10}$" required class="form-control">
						</td>
					</tr>


					<tr>
						<td>
							Gender
						</td>
						<td>
							<input type="radio" name="rbgender" checked value="Male">Male
							<input type="radio" name="rbgender" value="Female">Female
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
			<img src="proimages/reg2.jpg" width="100%">
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>

</html>