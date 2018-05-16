
<html>
<head>
<title> Map Page </title>
<link rel="stylesheet" href="css.css">
</head>

    
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
<div id="map">

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myposition1 = new google.maps.LatLng(30.1607034,31.3896252); 
  var mapview = {center: myposition1, zoom: 12};
  var map = new google.maps.Map(mapCanvas,mapview);
 
 var marker1 = new google.maps.Marker({
    position: myposition1
  });
  marker1.setMap(map);

}
</script>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArxrddH_96CPB6ELh5xEkoQDXxi37CdPg&callback=myMap"></script>

</body>
</html>