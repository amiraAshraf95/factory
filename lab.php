<?php
require_once("ORDERDATA.php");
 $B = new Databasess;
class salary{
	public $amount;
	function __construct($a)
	{  $this->amount=$a;
	}
	
function getamount () {
	return $this->amount ;
}
}


class salarydecorator {
	public $salary;
	public $amount;
	public function __construct(Salary $salary_in )  {
		$this ->salary = $salary_in;
	
		$this ->resettitle();
		
	}
	function resettitle() { 
	$this -> amount = $this -> salary -> getamount();

	}
	
	function showamount() {
		return $this ->amount;
		}
}

class salarybonusdecorator extends salarydecorator {
	public $btd;
	
	public $amount;
		public function __construct (salarydecorator $btd_in)
	{
		
		$this->btd= $btd_in;
		
	}
	function addbonus() {
	
	    $B = new Databasess;
		
	    $this ->btd ->amount +=$B->gettax("TAX");

	}
}



//writeln ('begin testing decorator Pattern');
//writeln('');

//$patternBook = new Salary($B->selectprice("Price"));

//$decorator = new salarydecorator($patternBook);

//$bonusdecorator = new salarybonusdecorator($decorator);


//writeln('Showing Salary: ');
//writeln($decorator->showamount());
//writeln('');


//writeln('showing salary after adding taxes ' );
//$bonusdecorator->addbonus();
//writeln($decorator->showamount());
//writeln('');



function writeln ($line_in)  {
	echo $line_in."<br/>";
}



?>