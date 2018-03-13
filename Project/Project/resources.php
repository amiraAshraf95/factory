<!DOCTYPE html>
    <head>
<link rel="stylesheet" href="css2.css">
    </head>
<html>
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

<div id="RES">
	
	<fieldset>
<legend> Avaliable Resources </legend>

<table style="width:100%" border =1px "solid black">
  <tr>
    <th>Type Name</th>
    <th>Quantity</th>
    <th>Unit</th>
	<th>Storing Date</th>
  </tr>
  <tr>
    <td>abc    </td>
    <td>  </td>
    <td>   </td>
	<td>   </td>
  </tr>
  <tr>
    <td>abc</td>
    <td></td>
    <td></td>
	<td>   </td>
  </tr>
  <tr>
    <td>abc</td>
    <td></td>
    <td></td>
	<td>   </td>
  </tr>
  <tr>
    <td>abc</td>
    <td></td>
    <td></td>
	<td>   </td>
  </tr>
  <tr>
    <td>abc</td>
    <td></td>
    <td></td>
	<td>   </td>
  </tr>
  <tr>
    <td>abc</td>
    <td></td>
    <td></td>
	<td>   </td>
  </tr>
</table>
</fieldset>
	
	<br>
	
	
	<fieldset>
	<legend>Request New Resources</legend>
        <form >
                <b>Type of resource</b>
				<br>
				<input type="text" name="resource" required>
				<br>
				<b>Quantity</b> 
				<br>
                <input type="text" name="quantity" required>
				<br>
                <b>Unit</b> 
				<br>
                <input type="text" name="unit" required>
				<br>
                <b>Price:</b> 
				<br>
                <input type="text" name="price" required>
				<br>
				<b>Tips:</b> 
				<br>
                <input type="text" name="tips" required>
				<br>
				<br>
                <button name="submit" type="submit"  >Done</button>
				</br>
        </form>
</fieldset>
</div>
    </body>
</html>