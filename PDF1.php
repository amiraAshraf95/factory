<?php
require_once( "fpdf/fpdf.php" );

$con = mysqli_connect("localhost",'root', '');
mysqli_select_db($con,'factoryy');
$table="factoryy.order";
$table2="factoryy.orderdetails";


$query = "SELECT * FROM ".$table." ";
		$result = mysqli_query($con, $query);
$order=mysqli_fetch_array($result);


$query2 = "SELECT * FROM ".$table2." ";
		$result2 = mysqli_query($con, $query2);
		$orderdetails=mysqli_fetch_array($result2);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);




$pdf->Cell(40,10,"UserID:", 0 ,0);
$pdf->Cell(40,10,$order['UserID'], 0,1);

$pdf->Cell(40,10,"Price :", 0 ,0);
$pdf->Cell(40,10,$order['Price'],  0,1);

$pdf->Cell(40,10,"DeliverDate :", 0 ,0);
$pdf->Cell(40,10,$order['DeliverDate'],  0,1);

$pdf->Cell(60,10,"PaymentMethodID :", 0 ,0);
$pdf->Cell(40,10,$order['PaymentMethodID'], 0,1);









$pdf->Cell(40,10,"productID:", 1 ,0,'C');
$pdf->Cell(40,10,"quantity :", 1 ,0,'C');
$pdf->Cell(40,10,"orderID :", 1 ,1,'C');

$pdf->Cell(40,10,$orderdetails['productID'], 1,0,'C');
$pdf->Cell(40,10,$orderdetails['quantity'],  1,0,'C');
$pdf->Cell(40,10,$orderdetails['orderID'],  1,1,'C');











$pdf->Output();
?>