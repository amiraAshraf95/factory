<?php
session_start();
?>
<?php
include "ORDERDATA.php";
include "ClientInformation.php";


$view= new clientinformationview();
$model= new Databases();
$view->clientinformationhtml();

if(isset($_POST['submit']))
{
	$tableName='client';
	$model->client($tableName,$_POST['ClientName'],$_POST['Address'],$_POST['Mobile']);


}


?>