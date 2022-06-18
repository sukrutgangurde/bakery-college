<html>

<head>
	<?php require 'head.php' ?>

	<title></title>
</head>

<body>
	<?php require 'menu.php' ?>
	<?php include 'bg2.php' ?>
	<table class="table">
		<tr>
			<td>
				feedback
			</td>
			<td>
				Name
			</td>
		</Tr>
		<?php
		$q = pg_query("select * from tbfeedback,tbcustomer where tbcustomer.custid=tbfeedback.custid");
		while ($r = pg_fetch_array($q)) {
		?>
			<tr>
				<Td><?php echo $r['fdesc']; ?></Td>
				<td><?php echo $r['cname']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
	<?php require 'footer.php'; ?>
</body>

</html>