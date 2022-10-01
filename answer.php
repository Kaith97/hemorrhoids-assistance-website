<?php 
include('db.php');

if(isset($_POST)){
	$one=$_POST['one'];
	$two=$_POST['two'];
	$three=$_POST['three'];
	$four=$_POST['four'];
	$five=$_POST['five'];
	$six=$_POST['six'];
	$seven=$_POST['seven'];
	$eight=$_POST['eight'];
	$nine=$_POST['nine'];
	$ten=$_POST['ten'];
	$eleven=$_POST['eleven'];
	$twelve=$_POST['twelve'];
	$query=mysqli_query($conn,"INSERT INTO answer (one,two,three,four,five,six,seven,eight,nine,ten,eleven,twelve,created_date,modified_date) VALUES ('$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$eleven','$twelve',now(),now())");
	header("location:answer.php");
}


?>

