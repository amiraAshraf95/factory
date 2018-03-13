<?php
session_start();
require 'ORDERDATA.php';
$dataa = new Databases;

if(isset($_POST['submi']))
{
	$tableName='factoryy.order';
	$dataa->order($tableName,$_POST['ClientID'],$_POST['Price'],$_POST['DeliverDate'],$_POST['PaymentMethodID']);


}






$tableNamee='client';

$dataa->ClientTable($tableNamee,'ID','ClientName','Address','Mobile');
?>


<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css2.css">
    </head>
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
<div id="ORD">



<h2></h2>
<style>
table, th, td {
    border: 1px solid black;
    text-align: center;
	
}
</style>
	<fieldset>
	<legend>Order</legend>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		
               
                <b>ClientID:</b>
                <input type="text" name="ClientID" required>
				<br>
				
				
				<b>Price:</b>
                <input type="text" name="Price" required>
				<br>
				
               
				<b>DeliverDate:</b>
                <input type="text" name="DeliverDate" required>
				<br>
				
				
				<b>PaymentMethodID:</b>
                <input type="text" name="PaymentMethodID" required>
				<br>
				
                <input name="submi" type="submit"  value="Done" >



        </form>
</fieldset>


<div>
    </body>
</html>