<?php
session_start();
?>
<?php
include "data.php";
include "EditProfile.php";


$view= new editprofileview();
$model= new Databasess();
$view->editprofilehtml();


if(isset($_POST['submit']))
{	$tableName='user';
	$model->update($tableName,$_POST['ID'],$_POST['FirstName'],$_POST['LastName'],$_POST['Mobile'],$_POST['Age'],$_POST['WorkHours'],$_POST['result'],$_POST['Address']);
	

}

?>