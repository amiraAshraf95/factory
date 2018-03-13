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

        <form id="PROD">
	<fieldset>
	<legend>Profit Deduction</legend>
	
                <b>Electricity:</b> 
				<br>
                <input type="text" name="ele" required>
				<br>
                <b>Water:</b> 
				<br>
                <input type="text" name="water" required>
				<br>
                <b>Month:</b> 
				<br>
                <input type="text" name="month" required>
				<br>
				<b>Worker Salary:</b>
				<br>
                <input type="text" name="salary" required>
				<br>
                <br>
                <button name="submit" type="submit"  >Done</button>



        </form>
</fieldset>
    </body>
</html>