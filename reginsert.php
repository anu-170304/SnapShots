<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\phpmailer\src\SMTP.php';

$name = $_POST["name"];
$uname = $_POST["uname"];
$userEmail = $_POST["email"]; // Change variable name to avoid conflict
$pass = $_POST["pass"];

$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "snapshots";

$conn = mysqli_connect($server, $username, $password, $dbname);

$sql = "insert into regusers(name,username,email,password) values('$name','$uname','$userEmail','$pass')";

if (mysqli_query($conn, $sql)) {
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
        $phpMailer->setFrom($email, $name);
        $phpMailer->addAddress($userEmail, $name); // Use $userEmail here
        $phpMailer->addReplyTo($email, 'Anurag');

        // Email content
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'Email From SNapsHots';
        $phpMailer->Body = 'Registration Is Successful';

        $phpMailer->send();
        header("Location: login2.html");
    } catch (Exception $e) {
        echo 'Failed to send email: ', $phpMailer->ErrorInfo;
    }
} else {
    echo "not inserted";
}

?>
