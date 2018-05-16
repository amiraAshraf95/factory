
<?php

class orderdetailsview{
	
function orderdetailshtml()
{




?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css2.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=devic-width,initial-scale=1.0">
<!--<script src="java.js" type="text/javascript"></script>-->
<style id="table">

table, th, td {
    border:1px solid black;
    text-align: center;
	
}
table=tr:not(:first-child){
	cursor: pointer;transition: all .25s ease-in-out;
}
table tr:not(:first-child):hover{background-color: #ddd};


</style>

    </head>
    <body>
<div id="mybar">
  <a href="SignInController.php" id="SignIn">SignIn</a>
  <a href="UserController.php" id="SignUp">ADDUSER</a>
  <a href="profile.php" id="profile">Profile</a>	
  <a href="EditProfileController.php" id="EditProfile">Profile Edit</a>
  <a href="OrderController.php" id="Order">Order</a>
  <a href="StoreRoom.php" id="StoreRoom">Store Room</a>
  <a href="resources.php" id="resources">Resources</a>
  <a href="deliver.php" id="deliver">Deliver</a>
  <a href="attendence.php" id="attendence">Attendence</a>
  <!--<a href="deleteController.php" id="delete">Delete</a>-->
  <a href="workerstableController.php" id="workerstable">Worker Table</a>
  <a href="ProfitDeduction.php" id="PD">Profit Deduction</a>
  <a href="ClientInformationController.php" id="ClientInformation">Client Info</a>
  <a href="ProductController.php" id="Product">Product</a>
  <a href="OrderDetailsController.php" id="OrderDetails">Order Details</a>
  <a href="DeleteOrderController.php" id="DeleteOrder">Delete Order</a>
  <!--<a href="map.php" id="map">Map</a>-->
  
</div>


<h2></h2>

<fieldset>
              
	           <legend>Order</legend>
        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		
               
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
				
               <!-- <input name="submi" type="submit"  value="Done" >-->

<hr>
	<legend>Order Details</legend>
       <form   method="POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		        <b>ProductID:</b> 
                <input type="text" id="productID" name="productID" required>
				<br>
               <b>Unit:</b> 
                <input type="text" name="Unit" required>
				<br>
				
                <b>Quantity:</b> 
                <input type="text" name="quantity" required>
				<br>
				 <b>OrderID:</b> 
                <input type="text" name="orderID" required>
				<br>
		
				<br>
    <!--  <input name="submit" type="submit"  value="Done" >-->


 <input name="submi" type="submit"  value="Done" >
        </form>		
</fieldset>
	
 

               


<?php
}
}
?>
    </body>
</html>