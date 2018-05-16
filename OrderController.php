
<?php
include "ORDERDATA.php";
include "Order.php";


$view= new orderview();
$model= new Databasess();
$view->orderhtml();

if(isset($_POST['submi']))
{
	$tableName='factoryy.order';
	$model->orderr($tableName,$_POST['PaymentMethod']);

$tablename='factoryy.orderdetails';
$model->orderD($tablename);

}
//$model->getid();
//$tableNamee='product';

//$model->getproductID();
//$tableNamee='factoryy.order';

//$model->OrderTable($tableNamee,'ID','ClientID','Price','DeliverDate','PaymentMethodID');
//$tableNamee='client';

//$model->ClientTable($tableNamee,'ID','ClientName','Address','Mobile');


?>