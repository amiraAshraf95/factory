<?php
session_start();
?>
<?php
include "data.php";
include "User.php";


$view= new userview();
$model= new Databasess();

$view->userhtml();
if(isset($_POST['submit']))
{
	$tableName='user';
	$model->insert($tableName,$_POST['FirstName'],$_POST['LastName'],$_POST['Mobile'],$_POST['Age'],$_POST['WorkHours'],$_POST['result'],$_POST['Address'],$_POST['Email'],$_POST['Password']);


}
?>