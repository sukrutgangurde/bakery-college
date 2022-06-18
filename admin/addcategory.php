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
		pg_query("insert into tbcategory(catname) values ('$txtcatname')");
	}
	?>
	<?php include 'menu.php' ?>
	<div class="row">
		<div class="col-md-6">
			<form method="post">
				<table class="table">
					<tr>
						<td>
							Category Name
						</td>
						<td>
							<input type="text" name="txtcatname" class="form-control">
						</td>
					</tr>

					<tr>
						<Td colspan=2 align="center">
							<input type="submit" class="btn btn-success" name="btnsave" value="Add Category">
						</Td>
					</tr>
				</table>
			</form>
		</div>

		<?php include 'footer.php' ?>
</body>

</html>