

 <?php
 require "ORDERDATA.php";
 
 $nn=new Databasess();
 //class quantityproductview{
	 //function quantityproducthtml(){
	
//if(isset($_POST['submit']))
//{	$tableName='orderdetails';
	//$nn->orderD($tableName,$_POST['quan']);
	

//}


?>

		  

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css.css">
<script type="text/javascript">
function redirect()
{
location.href="OrderController.php";
};
</script>
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
  
  
<div id="f4">
<fieldset>
	<legend>Product Quantity </legend>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		
<b>Details</b>
<br>
<?php $a2=$nn->select(); print_r($a2);?>
<br>
		<b>Quantity:</b>
		<br>
		<select name="quan">
 <?php $a=$nn->getquantity(); print_r($a); ?>
</select>	
				<br>
				
        <input type="hidden" name="productid" value="" />
		  <input type="button" value="submit" onclick="redirect();" >
			 <!--  <a href="OrderController.php?id'' > checkout</a>-->
			     <!-- <input name="submi" type="submit"  value="insert"  >-->


        </form>
</fieldset>

</div>

    </body>
</html>