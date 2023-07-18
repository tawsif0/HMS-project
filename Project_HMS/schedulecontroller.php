<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'useregistrations');
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = $_POST['username'];
	$date = $_POST['date'];
	$day = $_POST['day'];
    $time  = $_POST['time'];
	
$sql = " SELECT * FROM  usertable WHERE name = '$name'";
$result = mysqli_query($con, $sql);

$num =mysqli_num_rows($result);
if ($num ==1) {

   echo "User already exist";
   header('Location:schedule.php');

} else {
    $reg = " INSERT into usertable (name , date , day , time ) values ('$name' , '$date' , '$day' ,'$time' )";
    mysqli_query($con, $reg);
	header('location: rprofile.php');
}}
?>