<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'useregistrations');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["username"];
$password = $_POST["password"];

$sql = " SELECT * FROM  usertable WHERE name = '$name' && password = '$password'";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
if ($num>0){
$_SESSION['name'] = $name;
header('Location:profile.php');

}
else{
   header('Location:login.php');
}
}
?>