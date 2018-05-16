<?php
require_once( "fpdf/fpdf.php" );

$con = mysqli_connect("localhost",'root', '');
mysqli_select_db($con,'factoryy');

class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial', 'B' , 16);
		$this->cell(12);
		
		$this->cell(100,10,'Order List',0,1);
		$this->Ln(5);
		
		$this->SetFont('Arial' , 'B' , 18);

		$this->SetFillColor(180,180,225);
		$this->SetDrawColor(50,50,100);
		$this->Cell(20,10,"ID",  1,0 , '',true);
		$this->Cell(35,10,"ClientID",  1,0 , '',true);
		$this->Cell(30,10,"Price",  1,0, '',true);
        $this->Cell(40,10,"DeliverDate",  1,0, '',true);
        $this->Cell(60,10,"PaymentMethod", 1,1, '',true);

	}
	
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial' , 'B' , 8);
		$this->cell(0,10,'Page '.$this->PageNo()." / {pages}" , 0 ,0 , 'C');
	}
}

$pdf = new PDF ('P' , 'mm' , 'A4');

$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial' , 'B', 12);
$pdf->SetDrawColor(50,50,100);

$query = mysqli_query($con , "SELECT * FROM factoryy.order");
while($order=mysqli_fetch_array($query)){
	$pdf->cell(20,10,$order['ID'],1,0);
	$pdf->cell(35,10,$order['UserID'],1,0);
	$pdf->Cell(30,10,$order['Price'], 1 ,0);
    $pdf->Cell(40,10,$order['DeliverDate'],  1,0);
    $pdf->Cell(60,10,$order['PaymentMethodID'],  1,1);
}



$pdf->Output();

?>