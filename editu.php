<?php 

$id=$_POST["id"];

$name=$_POST["name"];
$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];


$server ="localhost";
$username="root";
$password="123456";
$dbname="snapshots";
   
$conn=mysqli_connect($server,$username,$password,$dbname);

$sql="update regusers set  name='$name',username='$uname',email='$email',password='$pass'  where id=$id";


if (mysqli_query($conn,$sql)) {
    # code...
   header("Location:userreg.php");
} else {
    # code...
    echo"something went wrong";
}



















?>