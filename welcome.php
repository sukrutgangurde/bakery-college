<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php'; ?>
	<title>Welcome</title>
	<style>
		.card-img-top {
			width: 300px;
			height: 200px;
			object-fit: cover;
		}
	</style>
</head>

<body>
	<?php include 'menu.php'; ?>
	<?php include 'bg1.php' ?>

	<div class="row">
		<br>
		<br>
		<br>
		<form method="post">
			<table class="table">
				<tr>
					<td>
						Search By Category
					</td>
					<td>
						<select name="cmbcat" class="form-control">
							<?php
							$q = pg_query("select * from tbcategory");
							while ($r = pg_fetch_array($q)) {
							?>
								<option value="<?php echo $r['cid']; ?>"><?php echo $r['catname']; ?></option>
							<?php
							}
							?>
						</select>
					</td>
					<Td>
						<input type="submit" name="btnsearchbycat" value="Search">
					</Td>
				</tr>

			</table>
		</form>
		<?php
		if (isset($_POST['btnsearchbycat'])) {
			extract($_POST);

			$q = pg_query("select * from tbproduct where cid= '$cmbcat'");
		} else if (isset($_POST['btnsearch'])) {
			extract($_POST);

			$q = pg_query("select * from tbproduct where pname like '%" . $txtsearch . "%'");
		} else {
			$q = pg_query("select * from tbproduct");
		}
		while ($r = pg_fetch_array($q)) {
		?>
			<div class="col-md-4">
				<div class="card">
					<img src="admin/<?php echo $r['pimage']; ?>" class="card-img-top" style="width: 300px; height: 200px; object-fit: cover;" alt="Fissure in Sandstone" />
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
						</table>
						</p>
						<a href="viewdetails.php?id=<?php echo $r['pid']; ?>" class="btn btn-primary">View Details</a>
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