<?php include "inc/header.php"; ?>

<?php
/*
spl_autoload_register(function($class){
	include "classes/".$class.".php";
});
*/
include "classes/Java.php";
include "classes/Php.php";
include "classes/Person.php";
use Jmidar\Person as jmi;
new Jmidar\Java();
new Jmidar\Php();
new jmi();






?>

<?php include "inc/footer.php"; ?>