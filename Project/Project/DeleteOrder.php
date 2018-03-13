<?php
require 'ORDERDATA.php';

$data = new Databases;

$tableName='factoryy.order';

if(isset($_POST['Delete']))
{

	$data->deleteeorder($_POST['ID'],"factoryy.order");
	

}
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
<div id="DELETE">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
	<legend> DELETE Order </legend>
	  <h1>DELETE</h1>
	  <hr>
	  
      <b>ID</b>
      <input name="ID" type="text" placeholder="Enter ID" required>
      
	  </br>
	  
	  </br>
	  
      <!--<button type="submit" name="delete">DELETE User</button>-->
	  <button type="button" name="cancel">Cancel</button>
	  
	  <input type="submit" name="Delete" value="Delete" >
	  </fieldset>
    </form>
	</div>
</body>
</html>