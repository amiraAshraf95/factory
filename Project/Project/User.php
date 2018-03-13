<?php
session_start();
require 'data.php';
$data = new Databasess;


if(isset($_POST['submit']))
{
	$tableName='user';
	$data->insert($tableName,$_POST['FirstName'],$_POST['LastName'],$_POST['Mobile'],$_POST['Age'],$_POST['WorkHours'],$_POST['TypeID'],$_POST['Address'],$_POST['Email'],$_POST['Password']);


}
?>
<html>
<head>
<title> Add User </title>
<link rel="stylesheet" href="css2.css">
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div id="mybar">
  
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

    <div id="SIUF">
	<fieldset id="fieldset">
	<legend> Add User </legend>
      <h1>Add User</h1>
      <h3>Please fill in this form to create an account.</h3>
      <hr>
	  
      <b>FirstName</b>
      <input name="FirstName" type="text" placeholder="Enter FirstName" required>
	  
	  </br>
	  </br>
	  
      <b>LastName</b>
      <input name="LastName" type="text" placeholder="Enter LastName" required>

	  </br>
	  </br>
	  <b>Mobile</b>
      <input name="Mobile" type="text" placeholder="Enter Telephone" required>
	  
	  </br>
	  </br>  
	  <b>Age</b>
      <input name="Age" type="text" placeholder="Enter Age" required>
	  
	  </br>
	  </br>
	  <b>Work Hours: </b>
      <input type "text" name= "WorkHours" id="Address">
      </br>
	  </br>
	  <b>TypeID </b>

      <input name="TypeID" type="text" placeholder="Enter Address" required>
	  
	  </br>
	  </br>  
	  <b>Address</b>
      <input name="Address" type="text" placeholder="Enter Address" required>
	  
	  </br>
	  </br>
      <b>Email</b>
      <input name="Email" type="text" placeholder="Enter LastName" required>

	  </br>
	  </br>
	  
     
	  <b>Password</b>
      <input name="Password" type="password" placeholder="Enter password" required>
	  
	  </br>
	  </br>
	  
	  
      <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy.</a></p>

        <button type="button" class="cancelbtn">Cancel</button>
        <!--<button  name="submit" type="submit" >Add User</button>-->
		<input type="submit" name="submit" value="Add User" >
		 
		</fieldset>
      </div>
  </form>
</body>
</html>