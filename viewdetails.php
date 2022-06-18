<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php'; ?>
	<title></title>
</head>

<body>
	<?php include 'menu.php'; ?>
	<?php include 'bg1.php' ?>
	<?php
	if (isset($_POST['btnaddcart'])) {
		extract($_POST);
		$q1 = pg_query("select * from tbproduct where pid=" . $_GET["id"]);
		$r1 = pg_fetch_array($q1);
		$newstock = $r1['pstock'] - $txtqty;
		echo $newstock;
		if ($newstock < 0) {
	?>
			<script type="text/javascript">
				alert("OUT OF STOCK");
			</script>
	<?php
		} else {

			pg_query("insert into tbcart(pid,qty,custid)values('" . $_GET["id"] . "','$txtqty','" . $_SESSION['custid'] . "')");
		}
	}

	?>
	<div class="row">
		<?php
		$q = pg_query("select * from tbproduct where pid=" . $_GET["id"]);
		while ($r = pg_fetch_array($q)) {
		?>
			<div class="col-md-6">
				<div class="card">
					<img src="admin/<?php

									echo $r['pimage']; ?>" class="card-img-top" alt="Fissure in Sandstone" />
					<div class="card-body">
						<h5 class="card-title">Product Details</h5>
						<p class="card-text">
						<table class="table">
							<Tr>
								<td>
									Product Name
								</td>
								<td>
									<?php
									echo $r['pname']; ?>
								</td>
							</Tr>
							<Tr>
								<td>
									Product Price
								</td>
								<td>
									<strike><?php
											echo $r['pprice']; ?></strike>
								</td>
							</Tr>
							<Tr>
								<td>
									Product Discount Price
								</td>
								<td>
									<?php
									echo $r['pdprice']; ?>
								</td>
							</Tr>
							<Tr>
								<td>
									Product Discription
								</td>
								<td>
									<?php
									echo $r['pdisc']; ?>
								</td>
							</Tr>
						</table>
						</p>
						<form method="post">
							<input type="number" name="txtqty" class="form-control">
							<input type="submit" name="btnaddcart" value="Add2Cart" class="btn btn-warning">
						</form>
					</div>
				</div>

			</div>
		<?php
		}
		?>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>