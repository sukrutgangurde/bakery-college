<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php
		
		if(isset($_POST["btnsave"])){
			extract($_POST);
			$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  
			pg_query("insert into tbproduct(pname,pprice,pdprice,pstock,pdisc,pimage,cid) values ('$txtpname','$txtpprice','$txtpdprice','$txtstock','$txtdesc','$target_file','$cmbcat')");

		}
	?>
	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
<form method="post" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td>
				Choose Category
			</td>
			<td>
				
					<select name="cmbcat" class="form-control">
						<?php
					$q=pg_query("select * from tbcategory");
					while ($r=pg_fetch_array($q)) {
						?>
							<option value="<?php echo $r['cid'];?>"><?php echo $r['catname'];?></option>
						<?php
						}	
					?>
					</select>

					
				
			</td>
		</tr>
		<tr>
			<td>
				Product Name
			</td>
			<td>
				<input type="text" name="txtpname" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Product Price
			</td>
			<td>
				<input type="text" name="txtpprice" class="form-control">
			</td>
		</tr>

		<tr>
			<td>
				Product Discount Price
			</td>
			<td>
				<input type="text" name="txtpdprice" class="form-control">
			</td>
		</tr>

		<tr>
			<td>
				Product Stock
			</td>
			<td>
				<input type="text" name="txtstock" class="form-control">
			</td>
		</tr>

		<tr>
			<td>
				Product Image
			</td>
			<td>
				<input type="file" name="fileToUpload" class="form-control">
			</td>
		</tr>
		
<tr>
			<td>
				Product Description
			</td>
			<td>
				<textarea name="txtdesc" class="form-control"></textarea>
			</td>
		</tr>
		

		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-success" name="btnsave" value="Add Product">
			</Td>
		</tr>
	</table>
</form>
</div>

<?php include 'footer.php'?>
</body>
</html>
