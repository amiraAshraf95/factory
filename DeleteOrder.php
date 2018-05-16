
<?php
class deleteorderview{

function deleteorderhtml()
{



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
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
	<?php
}
}
?>
</body>
</html>