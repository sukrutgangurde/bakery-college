<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php'; ?>
	<title></title>
</head>

<body>
	<?php include 'menu.php'; ?>

	<table class="table">
		<Tr>
			<Td>
				Name
			</Td>
			<Td>
				Address
			</Td>
			<Td>
				Phone
			</Td>
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

		$q = pg_query("select * from tbcart,tbproduct,tbcustomer where tbcustomer.custid=tbcart.custid and tbproduct.pid=tbcart.pid and status='1'");
		while ($r = pg_fetch_array($q)) {
		?>
			<Tr>
				<Td>
					<?php

					echo $r['custname']; ?>
				</Td>
				<Td>
					<?php

					echo $r['ccon']; ?>
				</Td>
				<Td>
					<?php

					echo $r['caddr']; ?>
				</Td>
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

	<?php include 'footer.php'; ?>
</body>

</html>