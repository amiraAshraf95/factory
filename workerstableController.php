<?php
session_start();
?>
<?php
include "data.php";
include "workerstable.php";


$view= new workerstableview();
$model= new Databasess();
$view->workerstablehtml();

$tableName='user';

$model->WorkerTable($tableName,'ID','FirstName','LastName','Mobile','Age','WorkHours','TypeID','Address');


?>