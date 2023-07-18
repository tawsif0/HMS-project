<?php
session_start();



$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'appointment');
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = $_POST['name'];
	$date = $_POST['sd'];
	$phone = $_POST['pn'];
    $ward  = $_POST['bn'];
	$bloodGroup = $_POST['bc'];
	$pCondi= $_POST['injury'];
	
    $payment = $_POST['payment'];

$sql = " SELECT * FROM  usertable WHERE name = '$name'";
$result = mysqli_query($con, $sql);

$num =mysqli_num_rows($result);
if ($num ==1) {

   echo "User already exist";
   header('Location:appointment.php');

} else {
    $reg = " INSERT into usertable (name , date , phone , ward , 
    bloodGroup , pCondi  , shortmsg) values ('$name' , '$date' , '$phone' ,
    '$ward' , '$bloodGroup' , '$pCondi'  , '$payment' )";
    mysqli_query($con, $reg);
	header('location: submitted.php');
}}
?>