<?php
require 'data.php';
session_start();
$data = new Databasess;



	$tableName='user';
 

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css2.css">
</head>
<script type="text/javascript"> 
function redirect()
{
location.href="EditProfile.php";
};
</script>
<body>
<div id="mybar">
  <a href="SignIn.php" id="SignIn">SignIn</a>
  <a href="User.php" id="SignUp">ADDUSER</a>
  <a href="profile.php" id="profile">Profile</a>	
  <a href="EditProfile.php" id="EditProfile">Profile Edit</a>
  <a href="Order.php" id="Order">Order</a>
  <a href="StoreRoom.php" id="StoreRoom">Store Room</a>
  <a href="resources.php" id="resources">Resources</a>
  <a href="deliver.php" id="deliver">Deliver</a>
  <a href="attendence.php" id="attendence">Attendence</a>
  <a href="delete.php" id="delete">Delete</a>
  <a href="workerstable.php" id="workerstable">Worker Table</a>
  <a href="ProfitDeduction.php" id="PD">Profit Deduction</a>
  <a href="ClientInformation.php" id="ClientInformation">Client Info</a>
  <a href="Product.php" id="Product">Product</a>
  <a href="OrderDetails.php" id="OrderDetails">Order Details</a>
  <a href="DeleteOrder.php" id="DeleteOrder">Delete Order</a>
</div>
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
<label type="text" name="WorkerType"   <?php   $T = $data->Type("WorkerType","user");  print_r($T); ?>  ></label> 
</br>
<button type="button" id="edit" onclick="redirect()">Edit</button>
</fieldset>
</form>
</html>