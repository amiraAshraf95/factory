<?php
class editprofileview{

function editprofilehtml()
{



?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css2.css">
</head>
<script type="text/javascript"> 

function validateForm() {
    var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var mobile = document.getElementById('mobile').value;  
	var age = document.getElementById('age').value;
	  var whours = document.getElementById('whours').value;
	  
	 var letters = /^[A-Za-z]+$/;  
	 	var num = / [^0-9]]/g;

   if(fname.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter only alphabets in first name");  
    
  }
  
 
	
   if(lname.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter only alphabets in sur name");  
     
  }
  
if((/^\d{11}$/.test(mobile.value)))
	{
		return true;
}
else
{
	alert("this is not a valid number");

}
    
 if(age.match(num))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter only numbers ");  
     
  }

  if(whours.match(num))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter only numbers ");  
     
  }

	
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
<form id="PRO" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1><b>Edit Profile</h1> 
<fieldset>
<legend>Worker Information</legend>
<b>ID: </b>
<input type "text" name= "ID" required>
</br>
<b>FristName:</b>
<input type "text" name= "FirstName"  required>
</br>
<b>LastName:</b>
<input type "text" name= "LastName"  required>
</br>
<b>Mobile Number: </b>
<input type= "text" name= "Mobile" required >
</br>
<b>Age: </b>
<input type "text" name= "Age" required>
</br>
<b>Work Hours: </b>
<input type "text" name= "WorkHours" required>
</br>
<b>Address: </b>
<input type "text" name= "Address" required>
</br>
 <b>TypeID </b>
      <select name="result">
	 
  <option value="Admin">Admin</option>
  <option value="Manager">Manager</option>

   </select>

<button name="submit"  type="submit"  >apply</button>
</fieldset>
<?php
}
}
?>
</form>
</html>