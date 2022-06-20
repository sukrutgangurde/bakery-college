<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php'; ?>
	<title></title>
</head>

<body>
	<?php include 'menu.php'; ?>
	<?php include 'bg1.php' ?>

	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<Tr>
					<Td>
						Product Name
					</Td>
					<td>
						Product Price
					</td>
					<td>
						Quantity
					</td>
					<td>
						Total
					</td>
				</Tr>

				<?php

				$q = pg_query("select * from tbcart,tbproduct where tbproduct.pid=tbcart.pid and tbcart.custid='" . $_SESSION['custid'] . "'");
				while ($r = pg_fetch_array($q)) {
				?>
					<Tr>
						<Td>
							<?php

							echo $r['pname']; ?>
						</Td>
						<td>
							<?php
							echo $r['pdprice']; ?>
						</td>
						<td>
							<?php
							echo $r['qty']; ?>
						</td>
						<td>
							<?php $total = $r['pdprice'] * $r['qty'];
							$ftotal += $total;
							echo $total; ?>
						</td>

						<Td>
							<a href="cancel.php?cartid=<?php echo $r['cartid']; ?>"> Cancel</a>
						</Td>
					</tr>

				<?php
				}
				?>
				<tR>
					<td>
						Final Total=₹<?php echo $ftotal; ?>/-
					</td>
				</tR>
				<tr>
					<td>
						<a href="bill.php">Confirm</a>
					</td>
				</tr>
			</table>
		</div>
		<?php include 'footer.php'; ?>
</body>

</html>