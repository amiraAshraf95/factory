<?php

abstract class Client {
	//$id;
	private $name;
	private $LN;
    abstract function send(Message $subject_in);
}

abstract class Message {
    abstract function addClient(Client $c);
    abstract function removeClient(Client $c);
    abstract function notify();
}

function writeln1($line_in) {
    echo $line_in."<br/>";
}

/*class customer extends Client {
	
    public function __construct($name,$LN){//,$id) {
		$this->name = $name;
		$this->LN = $LN;
    }
    public function send(Message $subject) {
      writeln('  '.$this->name);
	   writeln($this->LN);
	  
      writeln(' '.$subject->get_Text());      
    }
	}*/
class PremiumClient extends Client {
	
    public function __construct($name,$LN) {
		$this->name = $name;
		$this->LN = $LN;
    }
    public function send(Message $subject) {
      writeln1(' Dear Customer. '.$this->name);
	   writeln1($this->LN);
      writeln1(' '.$subject->get_Text());      
    }
}

class clientGroup extends Message {
    private $text = NULL;
    private $clients = array();
    function addClient(Client $c) {
      //could also use array_push($this->clients, $c);
      $this->clients[] = $c;
    }
    function removeClient(Client $c) {
      //$key = array_search($c, $this->clients);
      foreach($this->clients as $okey => $oval) {
        if ($oval === $c) { 
          unset($this->clients[$okey]);
        }
      }
    }
    function notify() {
      foreach($this->clients as $obs) {
        $obs->send($this);
      }
    }
    function sendEmail($newFavorites) {
      $this->text = $newFavorites;
      $this->notify();
    }
    function get_Text() {
      return $this->text;
    }
}



?>