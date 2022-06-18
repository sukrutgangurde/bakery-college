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
		pg_query("insert into tbfeedback(fdesc,custid)values('$txtfdesc','" . $_SESSION['custid'] . "')");
	}
	?>
	<?php include 'menu.php' ?>
	<div class="row">
		<div class="col-md-6">
			<form method="post">
				<table class="table">
					<tr>
						<td>
							feedback
						</td>
						<td>
							<textarea name="txtfdesc" class="form-control"></textarea>
						</td>
					</tr>
					<td>

					<Td colspan=2 align="center">
						<input type="submit" class="btn btn-success" name="btnsave" value="Submit">
					</Td>
					</tr>
				</table>
			</form>
		</div>

	</div>
	<?php include 'footer.php' ?>
</body>

</html>