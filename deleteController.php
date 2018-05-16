<?php
session_start();
?>
<?php
include "data.php";
include "delete.php";


$view= new deleteview();
$model= new Databasess();
$view->deletehtml();

$tableName='user';

if(isset($_POST['Delete']))
{

	$model->deletee($_POST['ID'],"user");
	

}


?>