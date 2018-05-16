

<?php
class userview{
	
function userhtml()
{



?>
<html>
<head>
<title> Add User </title>
<link rel="stylesheet" href="css.css">
</head>

<script type="text/javascript"> 

function validateForm() {
    var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var mobile = document.getElementById('mobile').value;  
	var age = document.getElementById('age').value;
	  var whours = document.getElementById('whours').value;
	  var email=document.getElementById('email').value;
	  
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
  
 
	
   if(sname.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter only alphabets in sur name");  
     
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
if((/^\d{11}$/.test(mobile.value)))
	{
		return true;
}
else
{
	alert("this is not a valid number");

}
var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Not a valid e-mail address");
	}
	
};
</script>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    
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

    <div id="SIUF">
	<fieldset id="fieldset">
	<legend> Add User </legend>
      <h1>Add User</h1>
      <h3>Please fill in this form to create an account.</h3>
      <hr>
	  
      <b>FirstName</b>
      <input name="FirstName" type="text" placeholder="Enter FirstName" required>
	  
	  </br>
	  </br>
	  
      <b>LastName</b>
      <input name="LastName" type="text" placeholder="Enter LastName" required>

	  </br>
	  </br>
	  <b>Mobile</b>
      <input name="Mobile" type="text" placeholder="Enter Telephone" required>
	  
	  </br>
	  </br>  
	  <b>Age</b>
      <input name="Age" type="text" placeholder="Enter Age" required>
	  
	  </br>
	  </br>
	  <b>Work Hours: </b>
      <input type "text" name= "WorkHours" id="Address">
      </br>
	  </br>
	  <b>TypeID </b>
      <select name="result">
	 
  <option value="Admin">Admin</option>
  <option value="Manager">Manager</option>

   </select>
     <!-- <input name="TypeID" type="text" placeholder="Enter Address" required>-->
	  
	  </br>
	  </br>  
	  <b>Address</b>
      <input name="Address" type="text" placeholder="Enter Address" required>
	  
	  </br>
	  </br>
      <b>Email</b>
      <input name="Email" type="text" placeholder="Enter LastName" required>

	  </br>
	  </br>
	  
     
	  <b>Password</b>
      <input name="Password" type="password" placeholder="Enter password" required>
	  
	  </br>
	  </br>
	  
	  
      <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy.</a></p>

        <button type="button" class="cancelbtn">Cancel</button>
        <!--<button  name="submit" type="submit" >Add User</button>-->
		<input type="submit" name="submit" value="Add User" >
		 
		</fieldset>
      </div>
	  <?php
}
}
?>
  </form>
</body>
</html>