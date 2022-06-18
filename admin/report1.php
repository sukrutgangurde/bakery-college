<html>

<head>
	<?php require 'head.php'; ?>
	<title></title>
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php include 'bg2.php' ?>
	<input type="button" onclick="print()" name="" value="Print">
	<?php
	$q = pg_query("select count(*) as totalproduct from tbproduct");
	$r = pg_fetch_array($q);
	echo "Total No . Of product=" . $r['totalproduct'];
	?>
	<table class="table">
		<Tr>
			<Th>
				product id
			</Th>

			<th>
				product Name
			</th>
			<th>
				product price
			</th>
			<th>
				product description
			</th>
			<th>
				product discount price
			</th>
			<th>
				product stock
			</th>


		</Tr>

		<?php
		$q = pg_query("select * from tbproduct");
		while ($r = pg_fetch_array($q)) {
		?>
			<tr>
				<tD><?php echo $r['pid']; ?></tD>
				<tD><?php echo $r['pname']; ?></tD>
				<tD><?php echo $r['pprice']; ?></tD>
				<tD><?php echo $r['pdisc']; ?></tD>
				<tD><?php echo $r['pdprice']; ?></tD>
				<tD><?php echo $r['pstock']; ?></tD>

			</tr>
		<?php
		}
		?>
	</table>
	<?php require 'footer.php'; ?>
</body>

</html>