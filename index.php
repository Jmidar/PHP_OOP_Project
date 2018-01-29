<?php include "inc/header.php"; ?>

<?php


$db = new mysqli("localhost","root","","oop");

if(mysqli_connect_errno()){
	echo "Error...";
	exit();
}else{
	echo "Successful...";
}






?>

<?php include "inc/footer.php"; ?>