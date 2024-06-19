<?php 

session_start();

$uname=$_POST["uname"];
$pass=$_POST["pass"];

$conn=mysqli_connect("localhost","root","123456","snapshots");

$sql="select* from regusers where username='$uname' and password='$pass';";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    
     $_SESSION["uname"]=$uname;
     $_SESSION["pass"]=$pass;    
    header("Location:home2.html");
    
} else {
    # code...
    header("Location:error.html");
}



mysqli_close($conn);




?>