<?php
include "ORDERDATA.PHP";
$data=new Databasess();

if(isset($_POST['submit']))
{
	$tableName='taxes';
	$data->addtax($tableName,$_POST['tax']);


}
?>
<!DOCTYPE html>
<html>
<body>
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
 Tax<br>
<input type="text" name="tax" ><br> 
<input type="submit" value="Submit" name = "submit">
</fieldset>
</form>
</body>


</html>