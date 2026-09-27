<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header("Content-Type: application/json");
require __DIR__ . '/../../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']); // User's email
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    // Validate name (should not contain numbers)
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        echo json_encode(["success" => false, "message" => "Name should contain only letters."]);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email format."]);
        exit;
    }

    // Validate phone number (should be exactly 10 digits)
    if (!preg_match("/^\d{10}$/", $phone)) {
        echo json_encode(["success" => false, "message" => "Phone number should be exactly 10 digits."]);
        exit;
    }

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    // 🔹 Admin Email
    $adminEmail = "srcap26@gmail.com";

    // 🔹 Email Body for Admin
    $adminBody = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    ";

    // 🔹 Email Body for User
    $userBody = "
        <h2>Thank You for Contacting Us!</h2>\
        <p>Dear $name,</p>
        <p>Thank you for reaching out. We have received your query and will get back to you as soon as possible.</p>
        <p><strong>Your Submitted Details:</strong></p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
        <br>
        <p>Best Regards,</p>
        <p><strong>SR Capital Service</strong></p>
    ";

    $adminMailSent = sendMail(
        $adminEmail,
        "New Query from $name",
        $adminBody,
        $name,
        $email,
        "SR Capital Service"
    );

    $userMailSent = sendMail(
        $email,
        "Thank You for Your Query!",
        $userBody,
        "Konda Finserv Support",
        $adminEmail,
        "SR Capital Service"

    );
    // 🔹 Return JSON Response
    if ($adminMailSent && $userMailSent) {
        echo json_encode(["success" => true, "message" => "Your message has been received by the admin. We will get back to you soon!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to send email."]);
    }
    exit;
}



function sendMail($toEmail, $subject, $messageHtml, $fromName, $fromEmail, $senderName)
{
    $apiKey = 'md-tPoa4NotFCX5E35kjkE6vA'; // Replace with your actual Mandrill API key

    $message = [
        'html' => $messageHtml,
        'subject' => $subject,
        'from_email' => $fromEmail,
        'from_name' => $senderName,
        'to' => [
            [
                'email' => $toEmail,
                'name' => $fromName,
                'type' => 'to'
            ]
        ],
        'headers' => [
            'Reply-To' => $fromEmail
        ],
        'track_opens' => true,
        'track_clicks' => true
    ];

    $postData = [
        'key' => $apiKey,
        'message' => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mandrillapp.com/api/1.0/messages/send.json');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        error_log("Mandrill Error: " . $error);
        return false;
    }

    $result = json_decode($response, true);
    return isset($result[0]['status']) && in_array($result[0]['status'], ['sent', 'queued']);
}
