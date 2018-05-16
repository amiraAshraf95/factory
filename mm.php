<?php
require "ORDERDATA.php";
$data = new Databasess;



	
 

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

<form id="mm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1><b>Notfication</h1> 
<fieldset>
 <label> <?php $a2=$data->Observer();print_r($a2);?> </label>
</fieldset>
</form>

</html>