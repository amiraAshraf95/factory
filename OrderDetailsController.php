<?php
//session_start();
?>
<?php
include "ORDERDATA.php";
include "QuantityProduct.php";
//include "OrderDetails.php";
class neww{
	function newww(){
$view= new quantityview();
$model= new Databasesss();
$view->quantityhtml();

//if(isset($_POST['submi']))
//{
	//$tableName='orderdetails';
	//$model->orderdetails($tableName,$_POST['productID'],$_POST['Unit'],$_POST['quantity'],$_POST['orderID']);



	//$tableNam='factoryy.order';
	//$model->order($tableNam,$_POST['ClientID'],$_POST['Price'],$_POST['DeliverDate'],$_POST['PaymentMethodID']);


	//$table='client';
	//$model->client($table,$_POST['ClientName'],$_POST['Address'],$_POST['Mobile']);


	//$tableNa='factoryy.product';
    //$model->option($tableNa,$_POST['TypeName'],$_POST['TypeSize']);
//}
//$table='product';
//$model->option('TypeName',$table);
$table='orderdetails';
$arr=$model->getquantity($table);

//$tableNameee='product';

//$model->ProductTable($tableNameee,'ID','TypeName','TypeSize');


//$tableNamee='client';

//$model->ClientTable($tableNamee,'ID','ClientName','Address','Mobile');
	}
}
?>

