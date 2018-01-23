<?php include "inc/header.php"; ?>


<?php 

class Jmidar{
	public $name;
	public $age;

	public function personName(){
		 echo "My Name is ".$this->name="Jmidar";
		
	}

	public function personAge($value){

	}

}

$jmi = new Jmidar;
//echo $jmi->name;
//$jmi->name="Jmidar";
$jmi->personName();
/*class Person{
		public $name;
		public $age;

	    public function personName(){
	    	echo "Person Name is:".$this->name."<br/>";
	   }

	  public function personAge($value){
	  		echo "Person Age is:".$this->age=$value;

	   }
  }

$personOne = new Person;
$personOne->name="Ariful Islam";
$personOne->personName();

$personOne->personAge("18");

*/


?>

		













<?php include "inc/footer.php"; ?>