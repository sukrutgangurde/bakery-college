<html>

<head>
	<?php require 'head.php'; ?>
	<title></title>
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php include 'bg2.php' ?>
	<input type="button" onclick="print()" name="" value="Print">
	<form method="post">
		<table>
			<Tr>
				<tD>
					Choose Year
				</tD>

				<td>
					<select name="cmbyear">
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>

					</select>
				</td>
			</tr>
			<Tr>
				<tD>
					Choose Month
				</tD>

				<td>
					<select name="cmbmonth">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="5">05</option>
						<option value="6">06</option>
						<option value="7">07</option>
						<option value="8">08</option>
						<option value="9">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>

					</select>
				</td>
			</tr>
			<Tr>
				<td>
					<input type="submit" name="btnshow" value="Show">
				</td>
			</Tr>
		</table>
	</form>


	<?php

	if (isset($_POST['btnshow'])) {
		extract($_POST);
		$q = pg_query("select * from tbcart,tbproduct where tbproduct.pid=tbcart.pid and tbcart.year='$cmbyear' and tbcart.month='0$cmbmonth'");

		while ($r = pg_fetch_array($q)) {
			$total += $r['qty'] * $r['pdprice'];
		}
		echo $total;
	}
	?>
	<?php require 'footer.php'; ?>
</body>

</html>