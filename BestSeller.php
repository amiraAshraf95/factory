<?php
require 'ORDERDATA.php';

$nn = new Databasess;



	if(isset($_POST['submit']))
{	//$tableName="user";
	$nn->getbestMseller($_POST['month'],$_POST['year']);
	
}
 

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
 <form id="Best" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

<fieldset>
<legend>BestSeller</legend>
	<b>ID</b>
				<br>
				<?php $a1=$nn->getid(); print_r($a1);?>
				<br>
				<br>
			</fieldset>	
			<fieldset>
<legend>Enter date to select the total sell per month:</legend>
				
				
               <b>enter month:</b>
               <input type="number" name="month" min="1" max="12">
				<br>
				<b>enter year:</b>
				<input type="number" name="year" min="2017" max="2018">
				<br>
				
				<button name="submit"  type="submit"  >Get</button>
<?php $a2=$nn->OrderT(); print_r($a2);?>
				<br>
<!--<button type="button" id="edit" onclick="redirect()">Edit</button>-->
</fieldset>
</form>


</html>