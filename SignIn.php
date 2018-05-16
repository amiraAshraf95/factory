

<?php
class view{

function html()
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
  
  </ul> 
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="SINF">
	<fieldset>
	<legend> SignIN </legend>
	  <h1>Sign In</h1>
	  <hr>
	  
      <b>Email</b>
      <input name="Email" type="text" placeholder="Enter Username/ID" required>
	  
	  </br>
	  </br>

      <b>Password</b>
      <input name="Password" type="password" placeholder="Enter Password" required>
      
	  </br>
	  </br>
	  
     <!-- <button type="submit" name="submit">Login</button>-->
	  
	  <button type="button" name="cancel">Cancel</button>
<button class="loginbtn" name="submit" type="submit"   >Login</button>
	  
	  </br>
	  
      <p>Forgot <a href="#">password?</a><p>
	  
	  </fieldset>
    </div>
	<?php
}
}
?>
</body>
</form>
</html>