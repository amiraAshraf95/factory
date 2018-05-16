
<?php
include "data.php";
include "SignIn.php";

$view= new view();
$model= new Databasess();

$view->html();
if(isset($_POST['submit'])){
	
 
$tableName='user';

$model->sig($tableName,$_POST['Email'],$_POST['Password']);

}

 
?>
