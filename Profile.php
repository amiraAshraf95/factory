<?php
require 'data.php';
session_start();
$data = new Databasess;



	$tableName='user';
 

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<script type="text/javascript"> 
function redirect()
{
location.href="EditProfileController.php";
};
</script>
<body>
    
<ul>
   <li><a href="SignInController.php" >SignIn</a></li>
   <li> <a href="UserController.php" >ADDUSER</a></li>
   <li> <a href="profile.php" >Profile</a></li>	
   <li><a href="OrderController.php" >Order</a></li>
   <li><a href="ProductsTableController.php" >ProductsTable</a></li>

     <li><a href="deleteController.php" >Delete</a></li>
     <li><a href="ProductController.php" >Add Product</a></li>
	 <li><a href="DeleteOrderController.php" >Delete Order</a></li>
   <li><a href="map.php" >Map</a></li>
    <li><a href="mm.php" >Notification</a></li>
	 <li><a href="Bestseller.php" >BestSeller</a></li>
	 	 <li><a href="star.php" >Rating</a></li>
		 	<li><a href="ListOrder.php" >ListOrder</a></li>
   <li><a href="ListProduct.php" >ListProduct</a></li>
	<li><a href="ListCustomers.php" >Customers</a></li>
		<li><a href="SignOut.php" >SignOut</a></li>
  </ul> 

<form id="PRO" method="POST">
<h1><b>Profile</h1> 
<fieldset>
<legend>Worker Information</legend>
<b>ID: </b>

<label type="text" name="ID" <?php   $i = $data->IDuser("ID","user");  print_r($i); ?>   ></label>
</br>
<b>FristName:</b>
<label type="text" name="FristName"  <?php   $FN = $data->FIRST("FristName","user");  print_r($FN); ?>   ></label>
</br>
<b>LastName:</b>
<label type="text" name="LastName"    <?php   $LN = $data->LasttName("LastName","user");  print_r($LN); ?>  ></label>
</br>
<b>Mobile Number: </b>
<input type="text" name="Mobile" value="0020" size="2px" readonly> <label type="text" name="Mobile"  <?php   $mob = $data->GetMobilee("Mobile","user");  print_r($mob); ?>    > </label>
</br>
<b>Age: </b>
<label type="text" name="Age"    <?php   $A= $data->AGE("Age","user");  print_r($A); ?>  ></label>
</br>
<b>Work Hours: </b>
<label type="text" name="WorkHours"    <?php   $W= $data->Hours("WorkHours","user");  print_r($W); ?>  ></label>
</br>
<b>Address: </b>
<label type="text" name="Address"   <?php   $addr = $data->GetAddr("Address","user");  print_r($addr); ?>  ></label> 
</br>
<b>Worker Position: </b>
<label type="text" name="result1"   <?php   $T = $data->Type("TypeID","user");  print_r($T); ?>  ></label> 
</br>
<button type="button" id="edit" onclick="redirect()">Edit</button>
</fieldset>
</form>

</body>

</html>