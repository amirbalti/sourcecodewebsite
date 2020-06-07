@extends('layout')

@section('Content')
<h1>Add Record is here</h1>
<form name="myform" action="" method="post" enctype="multipart/form-data" >
	@csrf
	<table width="80%" border="0">
 
   <tr>
    <td height="34" colspan="2" ><strong>Add Product Record</strong></td>
  </tr>
  
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="proname" value="" placeholder="Enter Name " /></td>
  </tr>
   <tr>
    <td>Product Price</td>
    <td><input type="Price" name="proprice" value="" placeholder="Enter Price "/></td>
  </tr>
  <tr>
    <td>Product Code</td>
    <td><input type="Code" name="procode" value="" placeholder="Enter Code"/></td>
  </tr>
  <tr>
    <td>Product Discount</td>
    <td><input type="Discount" name="prodiscount" value="" placeholder="Enter Discount"/></td>
  </tr>
   <tr>
    <td valign="top">Product Detail</td>
    <td valign="top"><textarea cols="70" rows="5" name="prodetail" placeholder="Enter Detail"></textarea></td>
  </tr>
  <tr>
    <td>Product Size</td>
    <td><select name="prosize" >
		<option value="L" >Large</option>
		<option value="M" >Medium</option>
		<option value="S" >Small</option>
		</select></td>
  </tr> 
  <tr>
   <td>Product In Stock</td>
    <td><select name="proInstock" >
		<option value="Y" >Available</option>
		<option value="N" >Not Available</option>
		</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit" class="btn btn-primary">Add Product</button></td>
	
  </tr>
</table>
</form>

@stop