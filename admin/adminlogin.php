
<html>
<head>
	<?php require 'head.php';?>
<?php
if(isset($_POST['btnlogin'])){
	extract($_POST);
	$q=pg_query("select * from tbadmin where aemail='$txtemail' and apass='$txtpass'");
	if(pg_num_rows($q)>0){
		$_SESSION['admin']=$txtemail;
		header("location:index.php");
	}
}

?>
<h1>Login Page</h1>
<div class="row">
		<div class="col-md-6">
<form method="post" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="text" name="txtemail" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="txtpass" class="form-control">
			</td>
		</tr>
		
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-success" name="btnlogin" value="Login">
			</Td>
		</tr>
	</table>
</form>
</div>
</head>
</html>
