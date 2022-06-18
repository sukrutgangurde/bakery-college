<html>
<head>
	<?php require 'head.php';?>	
	<title></title>
</head>
<body>
	
<?php require 'menu.php';?>
<?php include 'bg2.php'?>
<input type="button" onclick="print()" name="" value="Print">
<?php
$q=pg_query("select count(*) as totalcustomer from tbcustomer");
$r=pg_fetch_array($q);
echo "Total No . Of customer=".$r['totalcustomer'];
?>
<table class="table">
	<Tr>
		<Th>
			customer id
		</Th>
		<th>
			customer Name
		</th>
		<th>
			customer Email
		</th>
		<th>
			customer password
		</th>
		<th>
			customer Address
		</th>
		


	

	
	</Tr>

<?php
$q=pg_query("select * from tbcustomer");
while($r=pg_fetch_array($q)){
?>
<tr>
	<tD><?php echo $r['custid'];?></tD>
	<tD><?php echo $r['cname'];?></tD>
	<tD><?php echo $r['cemail'];?></tD>
	<tD><?php echo $r['cpass'];?></tD>
	<tD><?php echo $r['caddr'];?></tD>
	
</tr>
<?php
}
?>
</table>
<?php require 'footer.php';?>
</body>
</html>
