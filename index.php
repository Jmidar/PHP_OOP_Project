<?php include "inc/header.php"; ?>

<?php

spl_autoload_register(function($class){
	include "classes/".$class.".php";
});

$java = new Java;
new Php($java);



?>





<?php include "inc/footer.php"; ?>