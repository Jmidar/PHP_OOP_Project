<?php include "inc/header.php"; ?>

<?php

spl_autoload_register(function($class){
	include "classes/".$class.".php";
});


class childJmi extends Php{
	public function lol(){
		echo "I am jmi...".__CLASS__."<br>";
		echo "I am Jmidar".get_class($this)."<br>";
	}

	public function java(){
		echo "I am jmi...".__CLASS__."<br>";
		echo "I am Jmidar".get_class($this)."<br>";
	}
}
$c = new childJmi();
$c->details();
echo "<hr>";
$c->lol();
echo "<hr>";
$c->java();



?>

<?php include "inc/footer.php"; ?>