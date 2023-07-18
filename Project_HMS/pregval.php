<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'useregistrationss');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["username"];
$email = $_POST["email"];
$phno = $_POST["phno"];
$gender =$_POST['gender'];
$dob = $_POST["dob"];
$addr = $_POST["addr"];
$password = $_POST["password"];

$sql = " SELECT * FROM  usertable WHERE name = '$name'";
$result = mysqli_query($con, $sql);

$num =mysqli_num_rows($result);
if ($num ==1) {

   echo "User already exist";
   header('Location:preg.php');

} else {
    $reg = " INSERT into usertable (name , email , phno , gender , 
    dob , addr , password) values ('$name' , '$email' , '$phno' ,
    '$gender' , '$dob' , '$addr' , '$password')";
    mysqli_query($con, $reg);
    echo "Registration Sucessful!";
    header('Location:plogin.php');
}}
?>