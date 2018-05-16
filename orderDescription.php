<?php
require "ORDERDATA.php";
$nn=new Databasess();
//class orderDesview{
	
//function orderDeshtml()
//{



?>

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css.css">
    </head>
		<script type="text/javascript"> 
function redirect()
{
location.href="addtax.php";
};
</script>
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


  <div id="f5">
<h2></h2>
	<fieldset>
	<legend>Order</legend>
        <?php $a2=$nn->orderdescript(); print_r($a2);?>
		
    
	
        
</fieldset>
	
<fieldset>
	<legend>order details</legend>
       
		 <?php $a3=$nn->productdescript(); print_r($a3); ?>
                


   
       
</fieldset> 
<fieldset>
	<legend>client Info</legend>
       
		 <?php $a4=$nn->clientdescript(); print_r($a4); ?>
                


   
       
</fieldset> 
<br>
<input name="submit" type="button"  onclick="redirect()"value="AddTax" >
</div>

<?php
//}
//}
?>
    </body>
</html>