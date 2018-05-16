

<?php
require "ORDERDATA.php";
//$=new Databasess();
//class orderinfoview{
	$nn=new Databasess();
//function orderinfohtml()
//{

if(isset($_POST['submit']))
{	$tableName="user";
	$nn->edit($tableName,$_POST['Mobile'],$_POST['Address']);
	
}


?>





<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css.css">
    </head>
	<script type="text/javascript"> 
function redirect()
{
location.href="orderDescription.php";
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


<div>
<h2></h2>
<style>
table, th, td {
    border: 1px solid black;
    text-align: center;
	
}
</style>
<div id="f4">
	<fieldset>
	<legend>TotalPrice</legend>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	
				  <?php $a2=$nn->totalprice(); print_r($a2);?>
				<br>
	
        </form>
</fieldset>
	
<fieldset>
	<legend>client information</legend>
       
		 <?php $a3=$nn-> clientinfo(); print_r($a3); ?>
                

       
</fieldset>

				
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1><b>Edit information</h1> 
<fieldset>

<b>Mobile Number: </b>
<input type="text" name="Mobile" required >
</br>

<b>Address: </b>
<input type="text" name="Address" required>
</br>
<button name="submit"  type="submit"  >apply</button>
   
</fieldset>
<input name="submit" type="button"  onclick="redirect()"value="Finish&Pay" >
</form>
</div>
    </body>
</html>