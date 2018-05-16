
<?php
include "ORDERDATA.php";
include "ProductsTable.php";


$view= new productview();
$model= new Databasess();
$view->producthtml();


	//$tableNa='product';
    $model->ProductTable();//$tableNa);//,'ID','TypeName','TypeSize','Description','Image','Price');
?>