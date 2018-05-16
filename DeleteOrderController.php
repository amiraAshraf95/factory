
<?php
include "ORDERDATA.php";
include "DeleteOrder.php";


$view= new deleteorderview();
$model= new Databasess();
$view->deleteorderhtml();


$tableName='factoryy.order';

if(isset($_POST['Delete']))
{

	$model->deleteeorder($_POST['ID'],"factoryy.order");
	

}


?>