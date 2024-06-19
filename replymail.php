<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\phpmailer\src\SMTP.php';


$uname = $_POST["uname"];
$userEmail = $_POST["email"]; // Change variable name to avoid conflict
$reply= $_POST["reply"];
$msg=$_POST["message"];

// $server = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "snapshots";

// $conn = mysqli_connect($server, $username, $password, $dbname);

// $sql = "insert into regusers(name,username,email,password) values('$name','$uname','$userEmail','$pass')";

// if (mysqli_query($conn, $sql)) {
    $phpMailer = new PHPMailer(true); // Change variable name

    $email = 'anuragsuryakot@gmail.com';
    $password = 'wmqg jokw oocd wfko';

    try {
        // Configure SMTP settings
        $phpMailer->isSMTP();
        $phpMailer->Host = 'smtp.gmail.com';
        $phpMailer->SMTPAuth = true;
        $phpMailer->Username = $email;
        $phpMailer->Password = $password;
        $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $phpMailer->Port = 587;

        // Recipient information
        $phpMailer->setFrom($email, $uname);
        $phpMailer->addAddress($userEmail, $uname); // Use $userEmail here
        $phpMailer->addReplyTo($email, 'Snap Shots');

        // Email content
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'Reply From SnapShot';
        $phpMailer->Body =  $reply;


        $phpMailer->send();
        header("Location: contmanagement.php");
    } catch (Exception $e) {
        echo 'Failed to send email: ', $phpMailer->ErrorInfo;
    }


?>
