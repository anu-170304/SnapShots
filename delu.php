<?php 

$id = $_GET["id"];

$servername ="localhost";
$username = "root";
$password = "123456";
$dbname = "snapshots";

$conn = mysqli_connect($servername,$username,$password,$dbname);


$sql = "DELETE FROM regusers WHERE id = $id";


if (mysqli_query($conn,$sql)) {
    header("Location:userreg.php");
} else {
    echo "Something went wrong";
}



?>