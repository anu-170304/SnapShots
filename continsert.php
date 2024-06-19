<?php 
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "snapshots";

$uname=$_POST["uname"];
$email=$_POST["email"];
$cont=$_POST["cont"];
$msg=$_POST["message"];


$conn = mysqli_connect($server, $username, $password, $dbname);

$sql = "insert into contacts (username,email,contactno,message) values('$uname','$email','$cont','$msg')";

if (mysqli_query($conn, $sql)) {
    header("Location:home.html");


}
else{
header("Location:error2.html");

}









?>