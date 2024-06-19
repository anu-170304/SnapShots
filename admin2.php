<?php 

session_start();

$uname=$_POST["aname"];
$pass=$_POST["pass"];

$conn=mysqli_connect("localhost","root","123456","snapshots");

$sql="select* from admin where adminname='$uname' and password='$pass';";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    
     $_SESSION["aname"]=$uname;
      $_SESSION["pass"]=$pass;    
    header("Location:adminpanel.php");
    
} else {
    # code...
    echo"something went wrong";
}



mysqli_close($conn);




?>