<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php' ?>
	<title>Register</title>
	<style>
		form {
			position: relative;
		}

		form img {
			width: 100%;
			display: block;
			z-index: 4;
		}

		.table {
			width: max-content;
			border: 1px solid white;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 5;
		}

		#row {
			width: 100%;
			margin: 0;
			padding: 0;
		}
	</style>
</head>

<body>
	<?php
	if (isset($_POST["btnsave"])) {
		extract($_POST);
		pg_query("insert into tbcustomer(cname,cpass,cemail,caddr,ccon,cgender) values ('$txtname','$txtpass','$txtemail','$txtaddr','$txtccon','$rbgender')");
	}
	?>

	<?php include 'menu.php' ?>

	<div class="row">
		<form method="post">
			<img src="proimages/newwelcome.png">
			<table class="table">
				<tr>
					<td style="color: white;">Name</td>
					<td><input type="text" required pattern="^[a-z]+$" name="txtname" class="form-control"></td>
				</tr>
				<tr>
					<td style="color: white;">Password</td>
					<td><input type="password" required name="txtpass" class="form-control"></td>
				</tr>
				<tr>
					<td style="color: white;">Email</td>
					<td><input type="text" name="txtemail" pattern="^[a-z]+[0-9]*@[a-z]+\.[a-z]{2,3}$" required class="form-control"></td>
				</tr>
				<tr>
					<td style="color: white;">Address</td>
					<td><textarea name="txtaddr" required></textarea></td>
				</tr>
				<tr>
					<td style="color: white;">Contact no.</td>
					<td><input type="text" name="txtccon" pattern="^[0-9]{10}$" required class="form-control"></td>
				</tr>
				<tr>
					<td style="color: white;">Gender</td>
					<td style="color: white;">
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
	<?php include 'footer.php' ?>
</body>

</html>