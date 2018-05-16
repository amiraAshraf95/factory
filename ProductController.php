
<?php
include "ORDERDATA.php";
include "Product.php";


$view= new productview();
$model= new Databasess();
$view->producthtml();
if(isset($_POST['submit']))
{
	$tableName='factoryy.product';
    $model->product($tableName,$_POST['TypeName'],$_POST['TypeSize']);


}

?>