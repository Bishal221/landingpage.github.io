<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPmailer/PHPMailer.php');
require('PHPmailer/SMTP.php');
require('PHPmailer/Exception.php');

if (isset($_POST['notify'])) {
    $email = $_POST['email'];

    // Check if email is empty or blank
    if (empty($email) || trim($email) === '') {
        echo '<script>alert("Something went wrong. Please provide a valid email address.");</script>';
        header("Location: index.html");
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'mail.example.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example.example.com';
        $mail->Password   = 'example';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Set recipients, email format, and content
        $mail->setFrom($email);
        $mail->addAddress('example.example.com', 'Example');
        $mail->isHTML(true);
        $mail->Subject = "New Email from Website Notification";
        $mail->Body    = $email;

        // Send the email
        $mail->send();
        header("Location: index.html");
        exit();
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong. Please try again later.");</script>';
        header("Location: index.html");
        exit();
    }
}

if (isset($_POST['contact_lower'])) {
    $name = $_POST['name'];
    $message = $_POST['massage'];
    $email = $_POST['email'];

    // Check if any of the fields are empty or blank
    if (empty($name) || trim($name) === '' || empty($message) || trim($message) === '' || empty($email) || trim($email) === '') {
        echo '<script>alert("Something went wrong. Please fill in all the fields.");</script>';
        header("Location: index.html");
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'mail.example.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example.example.com';
        $mail->Password   = 'example';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Set recipients, email format, and content
        $mail->setFrom($email, $name);
        $mail->addAddress('example.example.com', 'Example');
        $mail->isHTML(true);
        $mail->Subject = "New Contact Email from Website";
        $mail->Body    = $message;

        // Send the email
        $mail->send();
        header("Location: index.html");
        exit();
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong. Please try again later.");</script>';
        header("Location: index.html");
        exit();
    }
}

if (isset($_POST['send-mail'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $selectedOption = $_POST['mySelect'];

    // Check if any of the fields are empty or blank
    if (empty($name) || trim($name) === '' || empty($email) || trim($email) === '' || empty($phone) || trim($phone) === '' || empty($selectedOption) || trim($selectedOption) === '') {
        echo '<script>alert("Something went wrong. Please fill in all the fields.");</script>';
        header("Location: index.html");
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'mail.example.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example.example.com';
        $mail->Password   = 'example';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Set recipients, email format, and content
        $mail->setFrom($email, $name);
        $mail->addAddress('example.example.com', 'Example');
        $mail->isHTML(true);
        $mail->Subject = "New Contact Email from Website";
        $mail->Body    = "Name: $name <br>
          Email: $email <br>
          Phone: $phone <br>
          Selected Option: $selectedOption";

        // Send the email
        $mail->send();
        header("Location: index.html");
        exit();
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong. Please try again later.");</script>';
        header("Location: index.html");
        exit();
    }
}
