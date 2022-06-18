<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php'; ?>
	<title></title>
</head>

<body>
	<?php include 'menu.php'; ?>
	<?php include 'bg1.php' ?>

	<input type="button" onclick="print()" value="Print">
	<table class="table">
		<Tr>
			<Td>
				Name
			</Td>
			<td>
				<?php echo $_SESSION['cname']; ?>
			</td>
		</Tr>
		<Tr>
			<Td>
				Contact
			</Td>
			<td>
				<?php echo $_SESSION['ccon']; ?>
			</td>
		</Tr>
		<Tr>
			<Td>
				Address
			</Td>
			<td>
				<?php echo $_SESSION['caddr']; ?>
			</td>
		</Tr>
	</table>

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
			</tr>

		<?php
		}
		?>
		<tR>
			<td>
				Final Total=₹<?php echo $ftotal; ?>/-
			</td>
		</tR>
	</table>
	<?php
	if (isset($_POST['btnpay'])) {
		extract($_POST);
		pg_query("update tbcart set status='1' where custid=" . $_SESSION['custid']);
		header("location:paid.php");
	}

	?>
	<form method="post">
		<table>
			<Tr>
				<td>
					<input type="submit" name="btnpay" value="Pay">
				</td>
			</Tr>
		</table>
	</form>

	<?php include 'footer.php'; ?>
</body>

</html>