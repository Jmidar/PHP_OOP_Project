<?php 
include "inc/header.php"; 
include "functions.php"; 

?>



<form action="index.php" method="post">
	<table>
		<tr>
			<td>Enter the 1st Number : </td>
			<td><input type="number" name="num1" /></td>
		</tr>

		<tr>
			<td>Enter the 2st Number : </td>
			<td><input type="number" name="num2" /></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="calculate" /></td>
		</tr>
	</table>
</form>

<?php
if(isset($_POST['calculation'])){

	$numOne = $_POST['num1'];
	$numTwo = $_POST['num2'];

	if(empty($numOne) or empty($numTwo)){

		echo "<span style='color:#EE6554'>Field must not be empty</span><br>";
	} else {

	$cal = new Calculation;
	$cal->add($numOne, $numTwo);
	$cal->sub($numOne, $numTwo);
	$cal->mul($numOne, $numTwo);
	$cal->div($numOne, $numTwo);
	$cal->mod($numOne, $numTwo);


	}

}
?>


<?php include "inc/footer.php"; ?>