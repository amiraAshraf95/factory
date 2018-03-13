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

<form id="DEL">
<h1><b>Deliver</h1> 
<fieldset>
<legend>Request</legend>

<b>Date to deliver:</b>
<br>
<input type "text" name= "DD" id="DD">
<br>

<b>Time to deliver:</b>
<br>
<input type "text" name= "TD" id="TD">
<br>

</fieldset>
<fieldset>
<legend>client information </legend>

<b>Client Name:</b>
<br>
<input type "text" name= "CN" id="CN">
<br>

<b>Client Address:</b>
<br>
<input type "text" name= "CA" id="CA">
<br>


<b>Client Mobile:</b>
<br>
<input type "text" name= "mobile" id="OD">
<br>
<b>Order ID:</b>
<br>
<input type "text" name= "OD" id="OD">
<br>
<br>
         
<button name="submit" type="submit"  >Done</button>
</fieldset>




</form>
</body>
</html>