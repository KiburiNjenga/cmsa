<!DOCTYPE html>
<?php
include("includes/db.php");

?>
<html>
<head>
	<title>inserting products</title>
	
	<script src="//tinymce.cachefly.net./4.1/tinymce.min.js" </script>
		<script>
		tinymce.init({selector:'textarea'});
	</script>
</head>
<body bgcolor="biege  ">

<form action="insert_product.php" method="post" enctype="multipart/form-data">

	<table align="center" width="750" border="2" bgcolor="lightgrey">
		<tr align="center">
		<td colspan="8"><h2> Insert New Product Here</h2></td> </tr>
		<tr>
			<td align="right"><b>Product Id:</b></td>
			<td><input type="text" name="product_ id" /></td>
		</tr>
		 <tr >
		    <td align="right"><b>Product Category:</b></td>
			
                <td>
                 <select name="product_cat">
                    <option>Select a Category</option>
					<?php
					$get_cats = "select*from categories";
		
	             	$run_cats = mysqli_query($con, $get_cats);
		
		            while($row_cats = mysqli_fetch_array($run_cats)){
			
			        $cat_id = $row_cats['cat_id'];
			         $cat_title = $row_cats['cat_title'];
		
		             echo "<option value='$cat_id'>$cat_title</a></option>";
			
		        }
					
					?>
					</select>
			
			
		</tr>
		<tr>
			<td align="right"><b>Product Title:</b></td>
			<td><input type="text" name="product title" /></td>
		</tr>
		<tr>
			<td align="right"><b>Product Brand:</b></td>
			<td>
                 <select name="product_brand">
                    <option>Select a brand  </option>
					<?php
					$get_brand = "select*from brands";
		
	             	$run_brand = mysqli_query($con, $get_brand);
		
		            while($row_brand = mysqli_fetch_array($run_brand)){
			
			        $brand_id = $row_brand['brand_id'];
			         $brand_title = $row_brand['brand_title'];
		
		             echo "<option value='$brand_id'>$cat_title</a></option>";
			
		        }
					
					?>
					</select> 

			</td>
		</tr>
		<tr>
			<td align="right"><b>Product Price:</b></td>
			<td><input type="text" name="product title" /></td>
		</tr>
		<tr>
			<td align="right"><b>Product Image:</b></td>
			<td><input type="file" name="product_image" /></td>
		</tr>
		<tr>
			<td align="right"><b>Product Description:</b></td>
			<td><textarea name="product_desc cols="20" rows="10"> </textarea></td>
		</tr>
		<tr>
			<td align="right"><b>Product Key Words:</b></td>
			<td><input type="text" name="product_keywords" /></td>
		</tr>
		<tr align="center">
			<td colspan="8"><input type="submit" name="insert_post" value="Insert  Product Now"/></td>
		</tr> 
	</table>
</form>
</body>
</html>