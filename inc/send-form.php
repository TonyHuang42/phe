<?php
// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not allowed');
}

// Simple email validation
function isValidEmail($email)
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL) !== false;
}

// Simple input sanitization
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get and sanitize form data
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($message) || !isValidEmail($email)) {
        header('Location: ./support.php?error=Please fill all fields correctly.#form');
        exit;
    }

    // Email configuration
    $to = 'marketing@i-nova.ca';
    $subject = 'INOVA Support Message from ' . $name;

    // Create email body
    $emailBody = "
    Name: $name
    Email: $email
    
    Message:
    $message
    
    ---
    This message was sent from the INOVA website contact form.
    ";

    // Email headers
    $headers = [
        'From: noreply@i-nova.ca',
        'Reply-To: ' . $email,
        'Content-Type: text/plain; charset=UTF-8',
        'X-Mailer: PHP/' . phpversion()
    ];

    // Send email
    $mailSent = mail($to, $subject, $emailBody, implode("\r\n", $headers));

    if ($mailSent) {
        header('Location: ./support.php?success=Your message has been sent#form');
    } else {
        header('Location: ./support.php?error=Failed to send message. Please try again#form');
    }
    exit;
}
