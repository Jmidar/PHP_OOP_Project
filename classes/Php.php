<?php

  abstract class Php{

	public function details(){
		echo "I am jmi...".__CLASS__."<br>";
		echo "I am Jmidar".get_class($this)."<br>";
	}
}
?>