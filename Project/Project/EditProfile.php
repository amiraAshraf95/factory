
<?php
session_start();
require 'data.php';
$data = new Databasess;

if(isset($_POST['submit']))
{	$tableName='user';
	$data->update($tableName,$_POST['ID'],$_POST['FirstName'],$_POST['LastName'],$_POST['Mobile'],$_POST['Age'],$_POST['WorkHours'],$_POST['Address']);
	

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css2.css">
</head>

<body>
<div id="mybar">
  <a href="profile.php" id="profile">Profile</a>	
  <a href="EditProfile.php" id="EditProfile">Profile Edit</a>
  
</div>
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
<b>Worker Position: </b>
<input type "text" name= "position" >
</br>

<button name="submit"  type="submit"  >apply</button>
</fieldset>
</form>
</html>