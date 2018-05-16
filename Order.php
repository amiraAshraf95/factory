

<?php
class orderview{
	
function orderhtml()
{



?>

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css.css">
    </head>
	<script type="text/javascript"> 
function redirect()
{
location.href="orderinformation.php";
};
function re()
{
location.href="ProductsTableController.php";
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



<h2></h2>
<style>
table, th, td {
    border: 1px solid black;
    text-align: center;
	
}
</style>
<div id="f1">
	<fieldset>
	<legend>Order</legend>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		
             
				
			
			
				 <b>PaymentMethodID: </b>
      <select name="PaymentMethod">
	  <option value="Visa">Visa</option>
      <option value="Cash">Cash</option>
      </select>
	  
				
           
<!--<input type="hidden" name="productid" value="" />-->
   <input name="submit" type="button" onclick="redirect()" value="Done" >
     <input name="submi" type="submit"  value="insert" >
	<!-- <input name="sss" type="button" onclick="re()" value="Back to products">-->


	



        </form>
</fieldset> 


</div>
<?php
}
}
?>
    </body>
</html>